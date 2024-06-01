<?php

namespace App\Livewire\User;

use App\Models\Order;
use App\Models\Payment;
use Livewire\Component;

class Profile extends Component
{
    public $projects, $payments, $activites;

    public function mount()
    {
        $this->projects = Order::where('user_id', auth()->id())->latest()->limit(5)->get();
        $this->payments = Payment::where('user_id', auth()->id())->latest()->limit(5)->get();
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
