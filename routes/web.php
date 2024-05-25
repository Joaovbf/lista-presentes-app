<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\Admin\GiftController as AdminGiftController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'index']);
Route::get('/item/{giftId}', [GiftController::class, 'get'])->name('item.description');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/item/{gift}', [AdminGiftController::class, 'get'])->name('item.show');
    Route::get('/item', [AdminGiftController::class, 'create']);
    Route::post('/item', [AdminGiftController::class, 'store'])->name('item.create');
    Route::get('/item/{gift}/edit', [AdminGiftController::class, 'edit'])->name('item.edit');
    Route::post('/item/{gift}', [AdminGiftController::class, 'update'])->name('item.update');
    Route::delete('/item/{gift}', [AdminGiftController::class, 'destroy'])->name('item.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
