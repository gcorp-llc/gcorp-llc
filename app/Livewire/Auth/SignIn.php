<?php

namespace App\Livewire\Auth;

use App\Helper\SendSms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SignIn extends Component
{
    public $email, $password;

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.sign-in');
    }

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password],)) {
            return redirect()->route('user.profile');
        }else {
            session()->flash('error', 'اطلاعات وارد شده صحیح نمی باشد');
            return back();
        }
    }
}
