<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use Inertia\Inertia;

// Frontend routes
Route::get('/', function () {
    return Inertia::render('Welcome');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('packages', PackageController::class);
    Route::resource('alerts', AlertController::class);

    Route::get('/calculator', function () {
        return Inertia::render('Calculator');
    })->name('calculator');

    Route::get('/myaddress', function () {
        return Inertia::render('Myaddress');
    })->name('myaddress');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
