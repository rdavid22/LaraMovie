<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ScreenTimesController;
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

// Movie routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/filmek/hozzaadas', [MovieController::class, 'create'])->name('movie.create');
    Route::post('/filmek/hozzaadas', [MovieController::class, 'store'])->name('movie.store');
    Route::get('/filmek/{movie}/szerkesztes', [MovieController::class, 'edit'])->name('movie.edit');
    Route::put('/filmek/{movie}', [MovieController::class, 'update']);
    Route::delete('/filmek/{movie}', [MovieController::class, 'destroy']);
});
Route::get('/filmek/{movie}', [MovieController::class, 'show']);

// Reservation routes
Route::middleware(['auth'])->group(function () {
    Route::get('/foglalasok', [ReservationsController::class, 'index'])->name('reservations.index');
    Route::post('/foglalasok/hozzaadas', [ReservationsController::class, 'store'])->name('reservations.store');
    Route::delete('/foglalasok/{reservation:id}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');
});

// ScreenTime routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/vetitesek/hozzaadas', [ScreenTimesController::class, 'create'])->name('screentimes.create');
    Route::post('/vetitesek/hozzaadas', [ScreenTimesController::class, 'store'])->name('screentimes.store');
    Route::get('/vetitesek/szerkesztes', [ScreenTimesController::class, 'edit'])->name('screentimes.edit');
    Route::put('/vetitesek/szerkesztes', [ScreenTimesController::class, 'update'])->name('screentimes.update');
    Route::delete('/vetitesek/torles', [ScreenTimesController::class, 'destroy'])->name('screentimes.destroy');
});

// Admin routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/vezerlopult', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/vezerlopult/penzugyek', [AdminController::class, 'finances'])->name('admin.finances');
    Route::get('/vezerlopult/felhasznalok', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/vezerlopult/filmek', [AdminController::class, 'movies'])->name('admin.movies');
    Route::get('/vezerlopult/vetitesek', [AdminController::class, 'screentimes'])->name('admin.screentimes');
    Route::delete('/vezerlopult/penzugyek', [AdminController::class, 'destroy_finance']);
    Route::delete('/vezerlopult/felhasznalok', [AdminController::class, 'destroy_user']);
    Route::delete('/vezerlopult/filmek', [AdminController::class, 'destroy_movie']);
});

require __DIR__ . '/auth.php';
