<?php

use Illuminate\Support\Facades\Route;







Auth::routes();



Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
