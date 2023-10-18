<?php

namespace App\Livewire\Components\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ToolsBar extends Component
{
    public function singOut()
    {
        return redirect('/')->with(Auth::logout());
    }
    public function render()
    {
        return view('livewire.components.user.tools-bar');
    }
}
