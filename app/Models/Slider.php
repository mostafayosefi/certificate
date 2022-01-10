<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    protected $fillable = [
        'name',
        'title',
        'text',
        'image_desktop',
        'image_mobile',
        'link',
        'status',
    ];
}
