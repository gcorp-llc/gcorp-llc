<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use Translatable;
    protected $translatable = ['title', 'slug','info','description','seo_description','seo_keywords'];
    use HasFactory;
    protected $with=['products'];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
