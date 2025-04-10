<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['flight_id','passenger_name','passenger_phone','seat_number','is_boarding','boarding_time'];

    public function flight()
{
    return $this->belongsTo(Flight::class);
}

}
