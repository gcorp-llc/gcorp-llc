<?php

namespace App\Livewire\Components\Home;

use App\Models\User;
use Livewire\Component;

class DrSlider extends Component
{

    public function render()
    {
        return view('livewire.components.home.dr-slider')->with([
            'sliders'=>User::where('role_id',2)->inRandomOrder()->take(7)->get()
        ]);
    }
}
