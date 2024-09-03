<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DigitizingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtherServiceController;
use App\Http\Controllers\PatchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/my-preference', [ProfileController::class, 'preference'])->name('profile.preference');
    Route::patch('/my-preference', [ProfileController::class, 'preferenceUpdate'])->name('profile.preference.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('user', UserController::class);

    Route::resource('digitizing', DigitizingController::class);
    Route::resource('other-service', OtherServiceController::class);
    Route::resource('patch', PatchController::class);
    Route::resource('vector', VectorController::class);
    Route::resource('order', OrderController::class);
});

require __DIR__.'/auth.php';
