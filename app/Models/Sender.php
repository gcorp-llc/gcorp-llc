<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Sender extends Model
{
    use HasFactory;
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
