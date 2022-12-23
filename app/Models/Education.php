<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'name',
        'institute',
        'title',
        'date_of_graduation',
        'city',
        'country'
    ];

    protected $casts = [
      
    ];
}
