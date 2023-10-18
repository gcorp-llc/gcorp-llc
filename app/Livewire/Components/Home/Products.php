<?php

namespace App\Livewire\Components\Home;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.components.home.products')->with([
            'data'=>Product::latest()->take(6)->get()
        ]);
    }
}
