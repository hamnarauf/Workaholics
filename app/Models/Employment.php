<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'title',
        'company',
        'description',
        'date_of_joining',
        'date_of_leaving',
        'city',
        'country'
    ];

    protected $casts = [
      
    ];
}
