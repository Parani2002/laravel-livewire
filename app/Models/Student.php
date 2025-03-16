<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'address',
        'email',
        'phone',
        'course',
        
    ];
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
