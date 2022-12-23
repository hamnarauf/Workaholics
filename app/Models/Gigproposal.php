<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gigproposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_by',
        'gig_id',
        'proposal',
        'expected_by',
        'bid',
    ];
    protected $table = 'gig_proposal';
}
