<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class OurSolutionsPage extends Model
{
    use HasFactory;

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
