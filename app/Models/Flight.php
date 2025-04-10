<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['flight_code', 'origin', 'destination','departure_time','arrival_time'];
    protected $casts = [
        'departure_time'=>'datetime',
        'arrival_time' => 'datetime',
    ];
}
