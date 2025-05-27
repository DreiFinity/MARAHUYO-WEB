<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

Route::get('/', [NavController::class, 'Landing']);
Route::get('/rooms',[NavController::class,'rooms']);
Route::get('/dining',[NavController::class,'dining']);