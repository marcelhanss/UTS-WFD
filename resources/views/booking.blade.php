@extends('base.base')
@section('content')
    <div class="mx-30">
        <div class="justify-between flex font-bold text-2xl">
            <div>Ticket Booking For </div>
            <div class="text-4xl">{{ $flight->flight_code }}</div>
        </div>

        <hr class="border-2">

        <div class="grid grid-cols-3">
            <div>{{ $flight->origin }}->{{ $flight->destination }}</div>
            <div class="text-center">Departure <span class="font-bold">{{ $flight->departure_time ->format('l, d F Y, H:i')}}</span></div>
            <div class="text-right">Arrived <span class="font-bold">{{ $flight->arrival_time->format('l, d F Y, H:i') }}</span></div>
        </div>

        <form action="{{ route('ticket.submit') }}" method="POST">
            @csrf
            <div class="flex m-2">
                <h1>Passenger Name</h1>
                <input type='text'name="passenger_name" class="border ml-2">
            </div>

            <div class="flex m-2 my-5">
                <h1>Passenger Phone</h1>
                <input type="text" name="passenger_phone" class="border ml-2 ">
            </div>

            <div class="flex m-2">
                <h1>Seat Number</h1>
                <input type="text" name="seat_number" class="border ml-2">
            </div>

            <input type="hidden" name="flight_id" value="{{ $flight->id }}">

            <div class="text-right my-20">
                <a  class='mx-3 bg-gray-400 p-2 rounded-lg hover:bg-gray-100' href="{{ route('flight.index') }}" >Cancel</a>
                <button type="submit" class="bg-gray-500 p-2 rounded-lg hover:bg-gray-100"> Book Ticket</button>
            </div>
        </form>
    </div>
@endsection
