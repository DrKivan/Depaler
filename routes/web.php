<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BaneoController;
use App\Http\Controllers\PropiedadController;

Route::get('/',[UsuarioController::class,'index']);
Route::get('/baneos',[BaneoController::class,'baneo']);

Route::get('/propiedades',[PropiedadController::class,'ListarPropiedad'])->name('propiedades.listar');


