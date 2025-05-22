<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AuthController;
Route::resource('people', PersonController::class);
Route::get('/', [PersonController::class, 'index'])->name('people.index');
Route::post('/', [PersonController::class, 'store'])->name('people.store');
Route::delete('/{id}', [PersonController::class, 'destroy'])->name('people.destroy');
Route::get('/{id}/edit', [PersonController::class, 'edit'])->name('people.edit');
Route::put('/{id}', [PersonController::class, 'update'])->name('people.update');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/home', [AuthController::class, 'home'])->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/product', function () {
    return view('product');
});


