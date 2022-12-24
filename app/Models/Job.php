<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $casts = [
        'skills' => 'array',
        'p_skills' => 'array',
        'g_skills' => 'array'
    ];
}
