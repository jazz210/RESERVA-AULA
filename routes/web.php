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
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\AsignarAulaController;
use App\Http\Controllers\SolicitudesAceptadasController;
use App\Http\Controllers\MateriaController;


Route::get('/',function(){
    return view('welcome'); 
});

Route::get('/', function () {
    return view('reserva');
})->middleware('auth')->name('reserva');

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
Route::resource('/gestionar',GestionarController::class);
Route::post('/gestionar', [RegisterController::class, 'store'])
    ->name('gestionar.store');

Route::get('/aulas', [AulasController::class, 'create'])
    ->middleware('guest')
    ->name('aulas.index');
Route::post('/aulas', [RegisterController::class, 'store'])
    ->name('aulas.store');

Route::post('/guardar',[AulasController::class, 'store_reservation'])
    ->name('guardar-aula');

Route::get('/gestionaraulas', [GestionarAulasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('gestionaraulas.index');
Route::post('/gestionaraulas', [RegisterController::class, 'store'])
    ->name('gestionaraulas.store');

Route::get('/informacionreservas', [InformacionReservasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('informacionreservas.index');
Route::post('/informacionreservas', [RegisterController::class, 'store'])
    ->name('informacionreservas.store');

Route::get('/listareservas', [ListaReservasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('listareservas.index');
Route::post('/listareservas', [RegisterController::class, 'store'])
    ->name('listareservas.store');

Route::get('/solicitudes', [SolicitudesController::class, 'create'])
    ->middleware('auth.admin')
    ->name('solicitudes.index');
Route::post('/solicitudes', [SolicitudesController::class, 'store'])
    ->name('solicitudes.store');

Route::get('/asignaraula', [AsignarAulaController::class, 'create'])
    ->middleware('auth.admin')
    ->name('asignaraula.index');
Route::post('/asignaraula', [AsignarAulaController::class, 'store'])
    ->name('asignaraula.store');

Route::get('/solicitudesaceptadas', [SolicitudesAceptadasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('solicitudesaceptadas.index');
Route::post('/solicitudesaceptadas', [SolicitudesAceptadasController::class, 'store'])
    ->name('solicitudesaceptadas.store');

    Route::get('/materia', [MateriaController::class, 'create'])
    ->middleware('auth.admin')
    ->name('materia.index');
Route::post('/materia', [MateriaController::class, 'store'])
    ->name('materia.store');