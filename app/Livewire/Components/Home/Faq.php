<?php

namespace App\Livewire\Components\Home;

use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        return view('livewire.components.home.faq')->with([
            'data'=>\App\Models\Faq::latest()->where('state',true)->take(8)->get()
        ]);
    }
}
