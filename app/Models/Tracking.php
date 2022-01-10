<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{

    protected $fillable = [
        'name',
        'codetracking',
        'image',
        'status',
    ];
}
