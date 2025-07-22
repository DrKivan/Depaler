<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BaneoController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\AuthController;

/*Route::get('/',[UsuarioController::class,'index'])->name('usuario.index');
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
Route::post('/registro', [AuthController::class, 'registrarGuardar'])->name('registro.submit');*/


Route::get('/moderador/listarUsuario',[UsuarioController::class,'index'])->name('usuario.index');
Route::get('/moderador/baneos',[BaneoController::class,'baneo'])->name('baneos');
//aprobar y rechazar propiedades y listar solicitudes
Route::get('/moderador/solicitudes', [PropiedadController::class, 'VistaSolicitudesPropiedades'])->name('moderador.solicitudes');
Route::post('/moderador/propiedad/{id}/aprobar', [PropiedadController::class, 'aprobar'])->name('propiedad.aprobar');
Route::post('/moderador/propiedad/{id}/rechazar', [PropiedadController::class, 'rechazar'])->name('propiedad.rechazar');



Route::get('/usuario/propiedades',[PropiedadController::class,'ListarPropiedad'])->name('propiedades.listar');
Route::get('/usuario/propiedades/crear', [PropiedadController::class, 'CrearPropiedad'])->name('propieadades.crear');
Route::post('/usuario/propiedades/store', [PropiedadController::class, 'StorePropiedad'])->name('propiedades.store');
Route::get('/usuario/listarreservas/',[ReservaController::class, 'ListarReserva'])->name('listar.reserva');

Route::get('/propietario/propiedadUsuario',[PropiedadController::class, 'ListarPropiedadDelUsuario'])->name('propiedad.listarPropiedadUsuario');
Route::view('/propietario/dashboard', 'usuario.propietario.dashboard')->name('propietario.dashboard');


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registro', [AuthController::class, 'vistaRegistro'])->name('registro.form');
Route::post('/registro', [AuthController::class, 'registrarGuardar'])->name('registro.submit');



//Route::post('/usuario/reservar/guardar', [ReservaController::class, 'GuardarReserva'])->name('reserva.guardar');
Route::get('/usuario/reservar/{propiedad_id}', [ReservaController::class, 'formularioReserva'])->name('reserva.formulario');

// Pago
Route::get('/usuario/pago/{pago_id}', [PagoController::class, 'formularioPago'])->name('form.pago');
//Route::post('/usuario/reserva/confirmar', [ReservaController::class, 'confirmarReserva'])->name('reserva.confirmar');
//Route::post('/usuario/reserva/guardar', [ReservaController::class, 'GuardarReserva'])->name('reserva.guardar');


Route::post('/reserva/resumen', [ReservaController::class, 'resumen'])->name('reserva.resumen');
Route::post('/reserva/guardar', [ReservaController::class, 'guardar'])->name('reserva.guardar');

