<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'amount',
        'status',
        'merger_id'
    ];
    protected $with=['projects'];

    public function projects() {
        return $this->hasMany(Order::class);
    }
}
