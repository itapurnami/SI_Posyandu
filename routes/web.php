<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BalitaController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('home', [HomeController::class,'index'])->middleware(['auth'])->name('home');
Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::resource('balita', BalitaController::class);
});

require __DIR__.'/auth.php';
