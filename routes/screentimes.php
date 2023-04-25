<?php
use App\Http\Controllers\ScreenTimesController;
use Illuminate\Support\Facades\Route;

// ScreenTime routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/idopontok/hozzaadas', [ScreenTimesController::class, 'create'])->name('screentimes.create');
    Route::post('/idopontok/hozzaadas', [ScreenTimesController::class, 'store'])->name('screentimes.store');
});