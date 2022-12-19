<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'name',
        'description',
        'category',
        'budget',
        'required_days',
        'skills'
    ];

    protected $casts = [
        'skills' => 'array',
    ];
}
