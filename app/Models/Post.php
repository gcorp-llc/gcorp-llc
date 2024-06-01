<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;

//use TCG\Voyager\Traits\Translatable;


class Post extends Model
{
    use Translatable;
    protected $perPage = 500;
    protected $translatable = ['title', 'slug', 'info', 'tags','description','seo_description','seo_keywords'];
    use HasFactory;
    protected $with=['authors','categories'];
    protected $guarded=[];
//    Use Translatable;
//    protected $translatable = ['title', 'body'];

    public static function boot()
    {
        static::saving(function ($post) {
            if (empty($post->id)) {
                $post->slug=Str::replace(" ","_",$post->title);
            };
        });
        parent::boot();

    }
    public function postTags():HasMany
    {
        return $this->hasMany(PostTag::class);
    }

    public function categoryPosts():HasMany
    {
        return $this->hasMany(CategoryPost::class);
    }

    public function authorPosts():HasMany
    {
        return $this->hasMany(AuthorPost::class);
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function authors():BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }
}
