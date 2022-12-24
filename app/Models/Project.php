<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'name',
        'description',
        'category',
        'budget',
        'expected_by',
        'skills'
    ];

    protected $casts = [
        'skills' => 'array',
        'p_skills'=> 'array'
    ];
}
