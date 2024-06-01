<?php

namespace App\Livewire\User;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.user.projects')->with([
            "projects"=>Order::where('user_id', auth()->id())->latest()->paginate(12)
        ]);
    }
}
