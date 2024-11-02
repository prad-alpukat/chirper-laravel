<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', "edit", "update", "destroy"])
    ->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
