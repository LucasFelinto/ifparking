<?php

use App\Http\Controllers\AllocationController;
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

Route::post('/allocations', [App\Http\Controllers\AllocationController::class, 'store'])->middleware('auth')->name('allocations');

Route::resource('/parking', ParkingController::class);
Route::get('/select/{vehicle}', [App\Http\Controllers\VehicleController::class, 'select'])->middleware('auth')->name('vehicle.select');

Route::get('/checkout', [App\Http\Controllers\AllocationController::class, 'checkout'])->middleware('auth')->name('vehicle.checkout');


Route::get('/usuario', function () {
    return view('usuario');
})->name('usuario');

