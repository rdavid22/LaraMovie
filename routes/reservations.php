<?php
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;

// Reservation routes
Route::middleware(['auth'])->group(function () {
    Route::get('/foglalasok', [ReservationsController::class, 'index'])->name('reservations.index');
    Route::delete('/foglalasok/{reservation}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');
    Route::post('/foglalasok/hozzaadas', [ReservationsController::class, 'store'])->name('reservations.store');
});