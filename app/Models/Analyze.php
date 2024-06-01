<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;

class Analyze extends Model
{
    use HasFactory;
    protected $guarded=[];

    public static function boot()
    {
        static::saving(function ($analyze) {
            if (empty($analyze->id)) {
              $analyze->slug=Str::replace(" ","_",$analyze->title);
            };
        });
        parent::boot();

    }
    public function senders(): MorphMany
    {
        return $this->morphMany(Sender::class, 'commentable');
    }
}
