<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('demo', 'demo')
    ->middleware(['auth', 'verified'])
    ->name('demo');

require __DIR__.'/settings.php';
