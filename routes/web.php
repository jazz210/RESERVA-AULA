<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GestionarController;
use App\Http\Controllers\AulasController;
use App\Http\Controllers\GestionarAulasController;
use App\Http\Controllers\InformacionReservasController;
use App\Http\Controllers\ListaReservasController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('auth.admin')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

/*Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');*/

Route::put('/login', [LoginController::class, 'logout']);


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/usua', [UsuController::class, 'index'])
    ->middleware('auth.usua')
    ->name('usua.index');

Route::get('/gestionar', [GestionarController::class, 'create'])
    ->middleware('auth.admin')
    ->name('gestionar.index'); 
Route::post('/gestionar', [GestionarController::class, 'store'])
    ->name('gestionar.store'); 

Route::get('/aulas', [AulasController::class, 'create'])
    ->middleware('guest')
    ->name('aulas.index');

Route::get('/gestionaraulas', [GestionarAulasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('gestionaraulas.index');

Route::get('/informacionreservas', [InformacionReservasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('informacionreservas.index');

Route::get('/listareservas', [ListaReservasController::class, 'create'])
    ->middleware('guest')
    ->name('listareservas.index');