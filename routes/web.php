<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');

Route::view('/login','front.auth.login')->name('login');
Route::view('/registration','front.auth.register')->name('register');
