<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
}
