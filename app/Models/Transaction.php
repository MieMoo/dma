<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_no',
        'student_name',
        'course',
        'year_level',
        'purpose',
        'amount',
        'invoice_number',
        'document_type',
        'prioritization',
    ];
}
