<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create-funcionario', [UserController::class, 'create'])->name('user.create');
Route::post('/store-funcionario', [UserController::class, 'store'])->name('user.store');
Route::get('/show-funcionario/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/edit-funcionario/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update-funcionario/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/destroy-funcionario/{user}', [UserController::class, 'destroy'])->name('user.destroy');