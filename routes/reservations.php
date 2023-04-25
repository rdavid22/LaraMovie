<?php
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;

// Reservation routes
Route::middleware(['auth'])->group(function () {

    Route::get('/foglalasok', [ReservationsController::class, 'index'])->name('reservations.index');
    Route::post('/foglalasok/hozzaadas', [ReservationsController::class, 'create'])->name('reservations.create');
});