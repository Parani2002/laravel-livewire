<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'address',
        'email',
        'phone',
        'course',
        
    ];
}
