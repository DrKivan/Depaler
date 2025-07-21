<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BaneoController;
use App\Http\Controllers\PropiedadController;

use App\Http\Controllers\AuthController;

Route::get('/',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/baneos',[BaneoController::class,'baneo'])->name('baneos');

Route::get('/propiedades',[PropiedadController::class,'ListarPropiedad'])->name('propiedades.listar');


Route::get('/propiedades/crear', [PropiedadController::class, 'CrearPropiedad'])->name('propieadades.crear');
Route::post('/propiedades/store', [PropiedadController::class, 'StorePropiedad'])->name('propiedades.store');

//aprobar y rechazar propiedades y listar solicitudes
Route::get('/moderador/solicitudes', [PropiedadController::class, 'VistaSolicitudesPropiedades'])->name('moderador.solicitudes');
Route::post('/propiedad/{id}/aprobar', [PropiedadController::class, 'aprobar'])->name('propiedad.aprobar');
Route::post('/propiedad/{id}/rechazar', [PropiedadController::class, 'rechazar'])->name('propiedad.rechazar');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registro', [AuthController::class, 'vistaRegistro'])->name('registro.form');
Route::post('/registro', [AuthController::class, 'registrarGuardar'])->name('registro.submit');
