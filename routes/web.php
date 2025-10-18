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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});
// Auth routes (login, register, etc.)
require __DIR__ . '/auth.php';
