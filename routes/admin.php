<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/vezerlopult', [AdminController::class, 'index'])->name('admin.index');
});