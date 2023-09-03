<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'active',
        'image',
        'image_alt'
    ];
}
