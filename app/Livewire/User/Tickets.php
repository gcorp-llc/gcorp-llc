<?php

namespace App\Livewire\User;

use App\Models\Ticket;
use Livewire\Component;

class Tickets extends Component
{
    public $tecket,$responce,$ticket_content,$ticket_title,$responce_ticket;

    public function sendTicket()
    {
        Ticket::create([
            'title'=>$this->ticket_title,
            'content'=>$this->ticket_content,
            'user_id'=>auth()->id()
        ]);
        return back();
    }
    public function render()
    {
        return view('livewire.user.tickets')->with([
            'tikets'=>Ticket::where('user_id', auth()->id())->latest()->paginate(12)
        ]);
    }
}
