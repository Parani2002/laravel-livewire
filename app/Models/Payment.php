<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_method',
        'StudentAdmission_id',
        'status',
        'deleted_at',
        'user_id',
        'deleted_at',
    ];
}
