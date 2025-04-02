<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class AboutUsPage extends Model
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
        'title',
        'body',
        'active',
        'image',
        'image_alt',
        'mobile_image',
        'mobile_image_alt'
    ];
}
