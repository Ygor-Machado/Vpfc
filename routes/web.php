<?php

use App\Http\Controllers\DepartureController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlayerStatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/players', PlayerController::class);
    Route::resource('/departures', DepartureController::class);
    Route::get('/finished', [DepartureController::class, 'finished'])->name('departures.finished');
    Route::get('/upcoming', [DepartureController::class, 'upcoming'])->name('departures.upcoming');
    Route::resource('/stats', PlayerStatController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
