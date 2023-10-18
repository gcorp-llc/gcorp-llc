<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Sample extends Model
{
    use Translatable;
    protected $translatable = ['title', 'info','description','seo_description','seo_keywords'];
    use HasFactory;
}
