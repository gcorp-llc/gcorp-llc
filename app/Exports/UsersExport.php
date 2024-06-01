<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return User::query()->where('role_id',2)->where('phone','!=',null)->latest()->take(600)->get(['name','phone']);
    }
}
