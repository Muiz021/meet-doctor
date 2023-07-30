<?php

use Illuminate\Support\Facades\Route;

// Frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\AppointmentController;

// Backsite
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\TypeUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

##route Frontsite##

// landing page
Route::resource('/', LandingController::class);

Route::group(['middleware' => [
    'auth:sanctum',
    'verified'
]], function () {

    // appointment page
    Route::resource('appointment', AppointmentController::class);

    // payment page
    Route::resource('payment', PaymentController::class);
});
##end route frontsite##


##route Backsite##
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => [
    'auth:sanctum',
    'verified'
]], function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard.index');
    Route::resource('type_user',TypeUserController::class);
    Route::resource('specialist',SpecialistController::class);
});
##end route Backsite##
