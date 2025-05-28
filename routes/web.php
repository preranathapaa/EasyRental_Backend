<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BikeController;
use App\Http\Controllers\backend\ScooterController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\VehicleController;
use App\Http\Controllers\backend\BookingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');

Route::resource("/bikes", BikeController::class);

Route::resource("/scooter", ScooterController::class);

Route::resource("/vehicles", VehicleController::class);

Route::resource("/bookings", BookingController::class);

Route::get('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');
