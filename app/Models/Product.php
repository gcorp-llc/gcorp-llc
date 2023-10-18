<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'slug','info', 'description','seo_description','seo_keywords'];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
