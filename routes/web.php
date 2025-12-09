<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('login', [AuthController::class, 'loginView'])->name('login.view')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
