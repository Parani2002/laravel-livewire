<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'student_id',
        'admission_fee',
        'course',
        'status',
        'user_id',
        'deleted_at',
    ];
}
