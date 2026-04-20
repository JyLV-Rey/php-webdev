<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('/aboutme', [AboutMeController::class, 'index'])->name('aboutme');

Route::get('calculate/{num1}/{num2}', [CalculateController::class, 'index'])->name('calculate');

Route::group(['prefix' => 'user'], function () {

    Route::get('get/{id}/{name}', [UserController::class, 'userInputParam'])->name('userDisplay');

    Route::get('delete', [UserController::class, 'index'])->name('userDelete');

    Route::get('edit/{id}/{name}', [UserController::class, 'userEditParam'])->name('userEdit');
});

Route::post('/register/submit', [UserController::class, 'register'])->name('register.submit');

Route::fallback([FallbackController::class, 'index']);
