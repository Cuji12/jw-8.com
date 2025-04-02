<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class UsefulLinksPage extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::created(function ($record) {
            Cache::forget("useful_links_page");
        });

        static::updated(function ($record) {
            Cache::forget("useful_links_page");
        });

        static::deleted(function ($record) {
            Cache::forget("useful_links_page");
        });
    }

    protected $fillable = [
        'title',
        'body',
        'image',
        'image_alt',
        'active',
        'mobile_image',
        'mobile_image_alt'
    ];
}
