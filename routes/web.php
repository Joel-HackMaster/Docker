<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LecturaController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('/auth.register');
});

Auth::routes();
Route::prefix('home')->group(function () {
    Route::resource('datos', LecturaController::class);
});
Route::group(['middleware'=>'auth'],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
/*
Route::resource('empleado', EmpleadoController::class);
Route::prefix('empleado')->group(function () {
    Route::resource('ticket', TicketController::class);
});
Auth::routes();

*/


