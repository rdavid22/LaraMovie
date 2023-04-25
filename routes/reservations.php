<?php
use Illuminate\Support\Facades\Route;

// Reservation routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {

});