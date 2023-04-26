<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


// Show homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Show all movie in descending order
Route::get('/filmek', [MovieController::class, 'index'])->name('all_movie');

// Authentication routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Additional routes
require __DIR__ . '/movies.php';
require __DIR__ . '/reservations.php';
require __DIR__ . '/screentimes.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';

// Show a single movie
Route::get('/filmek/{movie}', [MovieController::class, 'show']);