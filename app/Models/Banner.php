<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Banner extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::updated(function ($record) {
            Cache::forget("about_us_page");
        });

        static::deleted(function ($post) {
            Cache::forget("about_us_page");
        });
    }

    protected $fillable = [
        'image',
        'image_alt',
    ];
}
