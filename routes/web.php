<?php

use Illuminate\Support\Facades\Route;







Auth::routes();



Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
