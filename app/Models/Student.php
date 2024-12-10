<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'first_name',
        'last_name',
        'middle_name',
        'course',
        'year_enrolled',
        'current_year_level',
        'email',
        'phone_number',
        'address',
        'guardian_name',
        'guardian_phone',
        'status',
        'remarks'
    ];
}
