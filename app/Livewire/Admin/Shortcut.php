<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class Shortcut extends Component
{
    function generateUniqueCode($length = 6, $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789')
    {
        // Generate a random string
        $randomCode = Str::random($length, $characters);

        // Check if the code is unique
        while (DB::table('shortcuts')->where('code', $randomCode)->exists()) {
            $randomCode = Str::random($length, $characters);
        }

        // Return the unique code
        return $randomCode;
    }

    public function mount()
    {
        $uniqueCode = $this->generateUniqueCode();
        dd($uniqueCode);
        DB::table('shortcuts')->insert([
            'code' => $uniqueCode,
        ]);

    }

    public function render()
    {
        return view('livewire.admin.shortcut');
    }
}
