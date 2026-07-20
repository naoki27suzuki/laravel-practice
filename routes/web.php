<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HelloController2;

Route::get('/hello', [HelloController::class, 'list']);
Route::get('/hello/show', [HelloController2::class, 'view']);
Route::get('/hello/conf', [HelloController::class, 'conf']);
Route::inertia('/', 'welcome')->name('home');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
