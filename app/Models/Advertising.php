<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Advertising extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function senders(): MorphMany
    {
        return $this->morphMany(Sender::class, 'commentable');
    }
}
