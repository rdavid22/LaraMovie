<?php
use App\Http\Controllers\ScreenTimesController;
use Illuminate\Support\Facades\Route;

// ScreenTime routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/vetitesek/hozzaadas', [ScreenTimesController::class, 'create'])->name('screentimes.create');
    Route::post('/vetitesek/hozzaadas', [ScreenTimesController::class, 'store'])->name('screentimes.store');

    Route::get('/vetitesek/szerkesztes', [ScreenTimesController::class, 'edit'])->name('screentimes.edit');
    Route::put('/vetitesek/szerkesztes', [ScreenTimesController::class, 'update'])->name('screentimes.update');
    Route::delete('/vetitesek/torles', [ScreenTimesController::class, 'destroy'])->name('screentimes.destroy');
});