<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $fillable = [
        'management_number', 
        'name', 
        'location', 
        'calibration_cycle', 
        'next_calibration_date', 
        'maker', 
        'registered_at'
    ];

    
}
