<?php

use App\Rest\Controllers\AreasController;
use App\Rest\Controllers\ProductosController;
use App\Rest\Controllers\RegistroAreaController;
use App\Rest\Controllers\RegistroController;
use App\Rest\Controllers\RegistroDetalleAreasController;
use App\Rest\Controllers\RegistroDetalleController;
use App\Rest\Controllers\RegistroDetalleVehiculosController;
use App\Rest\Controllers\RegistroVehiculosController;
use App\Rest\Controllers\RolesController;
use App\Rest\Controllers\UserController;
use App\Rest\Controllers\UsuariosTrabajadoresController;
use App\Rest\Controllers\VehiculosController;
use Illuminate\Support\Facades\Route;
use Lomkit\Rest\Facades\Rest;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

//Rutas de Laravel Rest API CRUD Create, Read, Update, Delete
Rest::resource('productos', ProductosController::class);
Rest::resource('usuariostrabajadores', UsuariosTrabajadoresController::class);
Rest::resource('registros', RegistroController::class);
Rest::resource('registrosdetalle', RegistroDetalleController::class);
Rest::resource('roles', RolesController::class);
Rest::resource('areas', AreasController::class);
Rest::resource('registroareas', RegistroAreaController::class);
Rest::resource('registrodetalleareas', RegistroDetalleAreasController::class);
Rest::resource('vehiculos', VehiculosController::class);
Rest::resource('registrovehiculos', RegistroVehiculosController::class);
Rest::resource('registrodetallevehiculos', RegistroDetalleVehiculosController::class);
Rest::resource('users', UserController::class);


Route::post('login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [UserController::class, 'logout']);
Route::middleware('auth:sanctum')->get('allusers', [UserController::class, 'AllUsers']);
Route::middleware('auth:sanctum')->get('users/{id}', [UserController::class, 'show']);
Route::middleware('auth:sanctum')->get('allusersworkers', [UsuariosTrabajadoresController::class, 'getAllUsuariosTrabajadores']);
//Obtener todos los datos

Route::get('/allproducts', [ProductosController::class, 'getAllProductos']);
Route::get('/allareas', [AreasController::class, 'getAllAreas']);

Route::get('/allvehiculos', [VehiculosController::class, 'getAllVehiculos']);

//Obtener cantidad de datos
Route::get('/countusersworkers', [UsuariosTrabajadoresController::class, 'countUsersWorkers']);
Route::get('/countproducts', [ProductosController::class, 'countProducts']);
Route::get('/countareas', [AreasController::class, 'countAreas']);



//Ultimo id de registro
Route::get('/idlastregistro', [RegistroController::class, 'ultimoIdRegistro']);

//Ultimo id de registro de area
Route::get('/idlastregistroarea', [RegistroAreaController::class, 'lastIdRegistroArea']);

//Ultimo id de registro de vehiculo 
Route::get('/idlastregistrovehiculos', [RegistroVehiculosController::class, 'lastIdRegistroVehiculos']);


//Obtener registros con detalles
Route::get('/obtenerRegistrosConDetalles', [RegistroController::class, 'obtenerRegistrosConDetalles']);

//Obtener registros con detalles de area
Route::get('/obtenerRegistrosConDetallesArea', [RegistroAreaController::class, 'obtenerRegistrosConDetallesArea']);

//Obtener registros con detalles de vehiculo
Route::get('/obtenerRegistrosConDetallesVehiculos', [RegistroVehiculosController::class, 'obtenerRegistrosConDetallesVehiculos']);

Route::post('/login', [UserController::class, 'login']);
/*Route::post('/verify-token', [UsuariosController::class, 'verifyToken']);
//Login


//Restablecer contraseña por cédula
Route::post('/resetpassword', [UsuariosController::class, 'resetPasswordByCedula']);

//Verificar cédula
Route::post('/verifycedula', [UsuariosController::class, 'verifyCedula']);*/
