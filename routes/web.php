<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\RoomController;

Route::get('/', [NavController::class, 'Landing']);
Route::get('/rooms',[NavController::class,'rooms']);
Route::get('/dining',[NavController::class,'dining']);
Route::get('/rooms/available', [RoomController::class, 'available'])->name('rooms.available');
 