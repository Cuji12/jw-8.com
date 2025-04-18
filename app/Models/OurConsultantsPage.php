<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class OurConsultantsPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'active'
    ];
}
