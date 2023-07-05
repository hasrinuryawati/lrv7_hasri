<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnualLeave extends Model
{
    // use HasFactory;
    protected $table = 'annual_leaves';
    protected $fillable = [
        'user_id',
        'from_date',
        'to_date',
        'description',
        'status',
    ];
}
