<?php

use App\Rest\Controllers\ProductosController;
use App\Rest\Controllers\RegistroController;
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

Rest::resource('productos', ProductosController::class);
Rest::resource('usuariostrabajadores', UsuariosTrabajadoresController::class);
Rest::resource('registros', RegistroController::class);
Rest::resource('registrosdetalle', RegistroDetalleController::class);
Rest::resource('roles', RolesController::class);
Rest::resource('usuarios', UsuariosController::class);


//Login
Route::post('/login', [UsuariosController::class, 'login']);

//Ver datos por id de usuario
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);

//Verificar Cedula
Route::get('/cedula/{cedula}', [UsuariosController::class, 'cedula']);

//Restablecer contraseña por cédula
Route::post('/resetpassword', [UsuariosController::class, 'resetPasswordByCedula']);

//Verificar cédula
Route::post('/verifycedula', [UsuariosController::class, 'verifyCedula']);