<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::resource('people', PersonController::class);
Route::get('/', [PersonController::class, 'index'])->name('people.index');
Route::post('/', [PersonController::class, 'store'])->name('people.store');
Route::delete('/{id}', [PersonController::class, 'destroy'])->name('people.destroy');
Route::get('/{id}/edit', [PersonController::class, 'edit'])->name('people.edit');
Route::put('/{id}', [PersonController::class, 'update'])->name('people.update');

