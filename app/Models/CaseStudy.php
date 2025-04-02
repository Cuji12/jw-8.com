<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CaseStudy extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::created(function ($record) {
            Cache::forget("case_studies_page");
        });

        static::updated(function ($record) {
            Cache::forget("case_studies_page");
        });

        static::deleted(function ($record) {
            Cache::forget("case_studies_page");
        });
    }
    protected $fillable = [
        'title',
        'body',
        'active'
    ];
}
