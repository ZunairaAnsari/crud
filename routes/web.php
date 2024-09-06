<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/', [studentController::class, 'index'])->name('index');
Route::get('/register', [studentController::class, 'create'])->name('register');
Route::post('/store', [studentController::class, 'store'])->name('store');
Route::get('/show', [studentController::class, 'show'])->name('show');
Route::get('/{id}/edit', [studentController::class, 'edit'])->name('edit');
Route::put('/{id}/update', [studentController::class, 'update'])->name('update');
Route::get('/{id}/delete', [studentController::class, 'destroy'])->name('destroy');
