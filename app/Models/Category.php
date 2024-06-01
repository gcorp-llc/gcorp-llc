<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'slug', 'description'];
    public function posts():BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public static function boot()
    {
        static::saving(function ($category) {
            if (empty($category->id)) {
                $category->slug=Str::replace(" ","_",$category->title);
            };
        });
        parent::boot();

    }
}
