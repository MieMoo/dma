<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pulled extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        'studentNo',
        'studentName',
        'tcourse',
        'course',
        'tlevel',
        'fromDate',
        'toDate',
        'documentCategory',
        'descriptionRequest',
        
    ];

}
