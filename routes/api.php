<?php

use App\Rest\Controllers\AreasController;
use App\Rest\Controllers\ProductosController;
use App\Rest\Controllers\RegistroAreaController;
use App\Rest\Controllers\RegistroController;
use App\Rest\Controllers\RegistroDetalleAreasController;
use App\Rest\Controllers\RegistroDetalleController;
use App\Rest\Controllers\RolesController;
use App\Rest\Controllers\UsuariosController;
use App\Rest\Controllers\UsuariosTrabajadoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lomkit\Rest\Facades\Rest;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Rutas de Laravel Rest API
Rest::resource('productos', ProductosController::class);
Rest::resource('usuariostrabajadores', UsuariosTrabajadoresController::class);
Rest::resource('registros', RegistroController::class);
Rest::resource('registrosdetalle', RegistroDetalleController::class);
Rest::resource('roles', RolesController::class);
Rest::resource('usuarios', UsuariosController::class);
Rest::resource('areas', AreasController::class);
Rest::resource('registroareas', RegistroAreaController::class);
Rest::resource('registrodetalleareas', RegistroDetalleAreasController::class);


//Login
Route::post('/login', [UsuariosController::class, 'login']);

//Ver datos por id de usuario
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);


//Restablecer contraseña por cédula
Route::post('/resetpassword', [UsuariosController::class, 'resetPasswordByCedula']);

//Verificar cédula
Route::post('/verifycedula', [UsuariosController::class, 'verifyCedula']);

//Ultimo id de registro
Route::get('/idlastregistro', [RegistroController::class, 'ultimoIdRegistro']);

//Obtener registros con detalles
Route::get('/obtenerRegistrosConDetalles', [RegistroController::class, 'obtenerRegistrosConDetalles']);