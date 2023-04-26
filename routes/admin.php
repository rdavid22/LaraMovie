<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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