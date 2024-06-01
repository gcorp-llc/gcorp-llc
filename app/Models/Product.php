<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
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
    public static function boot()
    {
        static::saving(function ($product) {
            if (empty($product->id)) {
                $product->slug=Str::replace(" ","_",$product->title);
            };
        });
        parent::boot();

    }
}
