<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BaneoController;
use App\Http\Controllers\PropiedadController;

use App\Http\Controllers\AuthController;

Route::get('/',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/baneos',[BaneoController::class,'baneo'])->name('baneos');

Route::get('/propiedades',[PropiedadController::class,'ListarPropiedad'])->name('propiedades.listar');









Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registro', [AuthController::class, 'vistaRegistro'])->name('registro.form');
Route::post('/registro', [AuthController::class, 'registrarGuardar'])->name('registro.submit');
