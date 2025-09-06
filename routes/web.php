<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/magazine/{pdf}', [HomeController::class, 'magazine'])->name('magazine');
