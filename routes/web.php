<?php

use Faker\Provider\ar_EG\Payment;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\AppointmentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

##route Frontsite##
Route::resource('/',LandingController::class);
##end route frontsite##

##route Backsite##
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum',
config('jetstream.authf_session'),
'verified']], function() {

    // appointment page
    Route::resource('appointment',AppointmentController::class);

    // payment page
    Route::resource('payment',PaymentController::class);

});
##end route Backsite##


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.authf_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
