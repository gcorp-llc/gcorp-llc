<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class DrLogin extends Component
{

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.dr-login');
    }
}
