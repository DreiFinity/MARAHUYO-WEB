<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;



Route::get('/dashboard', function () {
    return view('pages.landing_page');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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
Route::get('/contacts',[NavController::class,'contact']);
Route::post('/contacts', [App\Http\Controllers\NavController::class, 'contactPost'])->name('contacts.post');
Route::get('/bookings', [BookingController::class, 'myBookings'])->middleware('auth')->name('bookings');