<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Reports route
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
    
    // Settings routes - ADD BOTH OF THESE
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update'); // ← This one was missing!
});
// Auth routes (login, register, etc.)
require __DIR__ . '/auth.php';
