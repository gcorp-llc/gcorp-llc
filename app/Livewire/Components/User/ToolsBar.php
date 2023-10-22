<?php

namespace App\Livewire\Components\User;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ToolsBar extends Component
{
    public $payments, $tikets, $projects;

    public function mount()
    {
        $this->payments=Payment::where('user_id',\auth()->id())->count();
        $this->projects=Order::where('user_id',\auth()->id())->count();
        $this->tikets=Ticket::where('user_id',\auth()->id())->count();

    }

    public function singOut()
    {
        return redirect('/')->with(Auth::logout());
    }

    public function render()
    {
        return view('livewire.components.user.tools-bar');
    }
}
