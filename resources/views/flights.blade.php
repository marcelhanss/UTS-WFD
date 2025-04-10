@extends('base.base')

@section('content')
    <div class="grid grid-cols-3 gap-4 m-10">
@foreach ($flights as $flight)
<div class="bg-gray-300 rounded-lg p-2">
    <div class="grid grid-cols-2">
        <div>
            <h1>{{ $flight->flight_code }}</h1>
        </div>
        <div class="text-right">
            <h4>{{ $flight->origin }} -> {{ $flight->destination }} </h4>
        </div>
    </div>
    <h1>Departure</h1>
    <h2 class="font-bold">{{ $flight->departure_time->format('l, d F Y, H:i')}} </h2>

    <h1>Arrival</h1>
    <h2 class="font-bold">{{ $flight->arrival_time ->format('l, d F Y, H:i')}} </h2>

    <div class="grid grid-cols-2 gap-3 m-4">
        <div>
            <a href="{{ route('flight.book', $flight->id) }}">
                <h1 class="text-center bg-gray-500 rounded-xl hover:bg-gray-400 font-bold">Book Ticket</h1>
            </a>
        </div>
        <div class="text-right">
            <a href="{{ route('ticket.view', $flight->id) }}">
                <h1 class="text-center bg-gray-500 hover:bg-gray-400 rounded-xl font-bold">View Details</h1>
            </a>
        </div>
    </div>
</div>

@endforeach
</div>
@endsection
