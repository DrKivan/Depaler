<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BaneoController;

Route::get('/',[UsuarioController::class,'index']);
Route::get('/baneos',[BaneoController::class,'baneo']);

