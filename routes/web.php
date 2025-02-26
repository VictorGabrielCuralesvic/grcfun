<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('user.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create-funcionario', [UserController::class, 'create'])->name('user.create');
    Route::post('/store-funcionario', [UserController::class, 'store'])->name('user.store');
    Route::get('/show-funcionario/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/edit-funcionario/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update-funcionario/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/destroy-funcionario/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});