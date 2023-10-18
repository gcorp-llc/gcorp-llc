<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $socialite = Socialite::driver($provider)->user();

        $user=User::firstWhere([
            'email' => $socialite->email,
            'social_id' => $socialite->id,
            'social_type' => $provider,
        ]);

        if ($user){
            Auth::login($user);
            return redirect('/');
        }

        if (User::where('email', $socialite->email)->exists()) {
            session()->flash('error-so', 'ایمیل قبلا ثبت شده است.');
            return redirect()->route('sign-in');
        }
        $user = User::updateOrCreate([
            'email' => $socialite->email,
            'social_id' => $socialite->id,
            'social_type' => $provider,
        ], [
            'name' => $socialite->name,
            'social_type' => $provider,
            'password' => $socialite->token,
            'role_id'=>2
        ]);

        Auth::login($user);
        return redirect('/');
    }
}
