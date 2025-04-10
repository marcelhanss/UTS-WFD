<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'passenger_name'=>'required|string',
            'passenger_phone'=>'required|string|max:14',
            'seat_number'=>'required|string|max:3',
            'flight_id' => 'required|exists:flights,id',
        ]);

        Ticket::create([
            'passenger_name' => $request->passenger_name,
            'passenger_phone' => $request->passenger_phone,
            'seat_number' => $request->seat_number,
            'flight_id' => $request->flight_id,
        ]);
        return redirect()->route('flight.index')->with('success','Pesanan berhasil dibuat');
    }

    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        if ($ticket->is_boarding == 1) {
            return redirect()->back()->with('failed', 'Tiket sudah boarding, tidak bisa dibatalkan.');
        }
        $ticket->delete();
        return redirect()->back()->with('failed','Berhasil dihapus');
    }

    public function confirm($id)
    {
        DB::table('tickets')
            ->where('id', $id)
            ->update([
                'is_boarding' => 1,
                'boarding_time' => Carbon::now(),
            ]);
        return redirect()->back()->with('success', 'Passenger sudah boarding, Tidak bisa delete lagi.');
    }

}
