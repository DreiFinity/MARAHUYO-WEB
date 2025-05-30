<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::get('/', [NavController::class, 'Landing']);
Route::get('/', [NavController::class, 'Landing'])->name('home');
Route::get('/rooms',[NavController::class,'rooms']);
Route::get('/dining',[NavController::class,'dining']);
Route::get('/rooms/available', [RoomController::class, 'available'])->name('rooms.available');
// Route::get('/booking1', [BookingController::class, 'show'])->name('booking1');
Route::get('/booking2', [BookingController::class, 'show'])->name('booking2');
Route::post('/finalize-booking', [BookingController::class, 'finalize'])->name('finalizeBooking');

Route::get('/booking1', [BookingController::class, 'showBooking1'])->name('booking1');

Route::get('/booking3/{booking_id}', [BookingController::class, 'showConfirmation'])->name('booking3');