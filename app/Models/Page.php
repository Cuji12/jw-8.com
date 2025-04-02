<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Page extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::created(function ($record) {
            Cache::forget("pages");
        });

        static::updated(function ($record) {
            Cache::forget("pages");
        });

        static::deleted(function ($record) {
            Cache::forget("pages");
        });
    }
    protected $fillable = [
        'title',
        'body',
        'active',
        'slug'
    ];
}
