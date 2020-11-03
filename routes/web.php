<?php

use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\customersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\VehicleController::class, 'index'])->middleware('auth');

Route::resource('/vehicles', VehicleController::class)->middleware('auth');

Route::resource('/customers', customersController::class)->middleware('auth');

Route::resource('/parking', ParkingController::class);

Route::get('/usuario', function () {
    return view('usuario');
})->name('usuario');

