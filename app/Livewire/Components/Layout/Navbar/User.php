<?php

namespace App\Livewire\Components\Layout\Navbar;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class User extends Component
{
    public function singOut()
    {
        return redirect('/')->with(Auth::logout());
    }
    public function render()
    {
        return view('livewire.components.layout.navbar.user');
    }
}
