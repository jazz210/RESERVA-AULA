<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('home');
});


Route::get('/register', [RegisterController::class, 'create'] )
    -> name('register.index');

Route::post('/register', [RegisterController::class, 'store'] )
    -> name('register.store');

Route::get('/login', [LoginController::class, 'create'] )
    -> name('login.index');