<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Shortcut extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function generateUniqueCode($length = 6, $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789')
    {
        // Generate a random string
        $randomCode = Str::random($length, $characters);

        // Check if the code is unique
        while (DB::table('shortcuts')->where('code', $randomCode)->exists()) {
            $randomCode = Str::random($length, $characters);
        }

        // Return the unique code
        return $randomCode;
    }

    public static function boot()
    {
        static::saving(function ($shortcut) {
            if (empty($shortcut->id)) {
                $uniqueCode = self::generateUniqueCode(6);
                $shortcut->code=$uniqueCode;

            };
        });
        parent::boot();

    }
}
