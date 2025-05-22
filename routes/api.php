<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\api\Book\BookApiController;
use App\Http\Controllers\api\VehicleApiConroller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::get('allvehicles', [VehicleApiConroller::class, 'index']);
    Route::get('singlevehicle/{vehicleid}', [VehicleApiConroller::class, 'single']);
    Route::post('rentvehicle',[BookApiController::class,'Book'])->middleware('auth:sanctum');
    Route::get('mybooking',[BookApiController::class,'index'])->middleware('auth:sanctum');
});


// Route for signup
Route::post('signup', [AuthController::class, 'signup']);

// Route for sigun
Route::post('signin', [AuthController::class, 'signin']);

// Route for logout
Route::post('signout', [AuthController::class, 'signout'])->middleware('auth:sanctum');
