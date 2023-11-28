<?php
use App\Http\Controllers\Web\SuccessPaymentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\GetPriceController;
use App\Http\Controllers\OrderFlightController;
use App\Http\Controllers\RouteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/init', AccessTokenController::class);

Route::post('/search', FlightSearchController::class);
Route::post('/price', GetPriceController::class);
Route::post('/order', OrderFlightController::class);



Route::get('/success',[SuccessPaymentController::class, 'success'])->name('success');
Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('/done', function () {
    return view('search');
});

