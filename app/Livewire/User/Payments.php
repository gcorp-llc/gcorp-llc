<?php

namespace App\Livewire\User;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithPagination;

class Payments extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.user.payments')->with([
            'payments'=>Payment::where('user_id', auth()->id())->latest()->paginate(2)
        ]);
    }
}
