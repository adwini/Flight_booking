<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SearchFlightController;
use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;



/*s
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/init', AccessTokenController::class);

Route::get('/searchflight', SearchFlightController::class);

Route::get('/', function () {
    return view('login');
});
// Route::get('/success',[ RouteController::class, 'Success']);

Route::get('/register', function () {
    return view('signup');
})->name('register');

Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login']);

