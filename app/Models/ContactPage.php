<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ContactPage extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::updated(function ($record) {
            Cache::forget("contact_page");
        });

        static::updated(function ($record) {
            Cache::forget("contact_page");
        });

        static::deleted(function ($record) {
            Cache::forget("contact_page");
        });
    }
    protected $fillable = [
        'title',
        'body',
        'active',
    ];
}
