<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\TicketsController;
use App\Models\Ticket;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flight', [FlightsController::class, 'index'])->name('flight.index');
Route::get('/flight/book/{flight:id}', [FlightsController::class, 'book'])->name('flight.book');
Route::get('/flight/ticket/{flight:id}', [FlightsController::class, 'detail'])->name('ticket.view');

Route::put('/ticket/board/{ticket:id}', [TicketsController::class, 'confirm'])->name('ticket.confirm');
Route::post('/ticket/submit', [TicketsController::class, 'store'])->name('ticket.submit');
Route::delete('/ticket/delete/{ticket:id}', [TicketsController::class, 'destroy'])->name('ticket.destroy');




