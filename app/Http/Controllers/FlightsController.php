<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = Flight::all(); 
        return view('flights', compact('flights'));
    }
    public function book(string $id)
    {
        $flight = Flight::findOrFail($id);
        return view('booking', compact('flight'));
    }

    public function detail(string $id)
    {
        $flight = Flight::findOrFail($id);
        $tickets = Ticket::where('flight_id', $flight->id)->get(); 
        $boardingTimes = $tickets->where('is_boarding', 1)->pluck('boarding_time');
        return view('ticketDetail', compact('tickets','flight','boardingTimes'));
    }

   
}
