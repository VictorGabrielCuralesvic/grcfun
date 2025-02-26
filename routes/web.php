<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create-funcionario', [UserController::class, 'create'])->name('user.create');
Route::post('/store-funcionario', [UserController::class, 'store'])->name('user.store');
Route::get('/show-funcionario/{user}', [UserController::class, 'show'])->name('user.show');