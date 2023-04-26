<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::middleware(['auth', 'EnsureUserIsAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});