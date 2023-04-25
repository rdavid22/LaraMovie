<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Movie routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    // Show create movie page
    Route::get('/filmek/hozzaadas', [MovieController::class, 'create'])->name('movie.create');

    // Store movie in database
    Route::post('/filmek/hozzaadas', [MovieController::class, 'store'])->name('movie.store');

    // Show edit movie page
    Route::get('/filmek/{movie}/szerkesztes', [MovieController::class, 'edit'])->name('movie.edit');

    // Update existing movie
    Route::put('/filmek/{movie}', [MovieController::class, 'update']);

    // Delete existing movie
    Route::delete('/filmek/{movie}', [MovieController::class, 'destroy']);
});