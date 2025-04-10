@extends('base.base')

@section('content')
    <div class="mx-30">
        <div class="justify-between flex text-2xl font-bold">
            <div>Ticket Details for {{ $flight->flight_code }}</div>
            <div class="">{{ $tickets->count() }} Passenger .{{ $boardingTimes->count() }} Boarding</div>
        </div>

        <hr class="border-2">

        <div class="grid grid-cols-3">
            <div>{{ $flight->origin }}->{{ $flight->destination }}</div>
            <div class="text-center">Departure <span class="font-bold">{{ $flight->departure_time ->format('l, d F Y, H:i')}}</span></div>
            <div class="text-right">Arrived <span class="font-bold">{{ $flight->arrival_time ->format('l, d F Y, H:i')}}</span></div>
        </div>


        <div>
            <h1 class="font-bold mt-4">Passengger List</h1>
            <table class="min-w-full text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Passenger Name</th>
                        <th>Passenger Phone</th>
                        <th>Seat Number</th>
                        <th>Boarding</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $index => $ticket)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $ticket->passenger_name }}</td>
                            <td>{{ $ticket->passenger_phone }}</td>
                            <td>{{ $ticket->seat_number }}</td>
                            <td>
                                @if ($ticket->is_boarding == 1)
                                    Bording Tanggal {{ $ticket->boarding_time }}
                                @else
                                    <form action="{{ route('ticket.confirm', $ticket->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="bg-green-400 rounded-xl px-2">
                                            Confirm
                                        </button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('ticket.destroy', $ticket->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @if ($ticket->is_boarding == 0)
                                        <div class="bg-red-500 rounded-xl">
                                            <button type="submit">Delete</button>
                                        </div>
                                    @else
                                        <div class="bg-red-200 rounded-xl">
                                            <button type="submit">Delete</button>
                                        </div>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center my-20">
        <a class='mx-3 bg-gray-400 p-2 rounded-lg hover:bg-gray-100' href="{{ route('flight.index') }}">Back</a>
    </div>
@endsection
