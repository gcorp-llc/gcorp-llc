<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SignUp extends Component
{
    public $name, $phone, $email, $password, $confirm_password, $toc;

    public function signup()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:255',
            'confirm_password' => 'required|same:password',
            'toc' => 'required'
        ]);

        // بررسی وجود ایمیل در پایگاه داده
        if (User::where('email', $this->email)->exists()) {
            session()->flash('error', 'ایمیل قبلا ثبت شده است.');
            return back();
        }

        if (!empty($this->phone) && User::where('phone', $this->phone)->exists()) {
            session()->flash('error', 'شماره تماس قبلا ثبت شده است.');
            return back();
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
            'role_id' => 2,
        ]);

        if (!empty($this->phone)) {
            return redirect()->route('two-factor', $this->phone);
        }

        // ورود کاربر به سیستم
        Auth::login($user);

        // هدایت کاربر به صفحه اصلی
        return redirect()->route('user.profile');

    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
