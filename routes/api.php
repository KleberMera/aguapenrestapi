<?php

use App\Rest\Controllers\ProductosController;
use App\Rest\Controllers\UsuariosTrabajadoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lomkit\Rest\Facades\Rest;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Rest::resource('productos', ProductosController::class);
Rest::resource('usuariostrabajadores', UsuariosTrabajadoresController::class);