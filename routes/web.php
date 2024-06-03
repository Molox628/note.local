<?php

use Illuminate\Support\Facades\Route;







Auth::routes();



Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update_info'])->name('profile.update_info');

    Route::get('/createnote', [App\Http\Controllers\NotebookController::class, 'index'])->name('profile');
});
