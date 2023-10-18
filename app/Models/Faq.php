<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Faq extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['question', 'response','seo_description','seo_keywords'];
}
