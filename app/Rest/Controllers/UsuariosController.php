<?php

namespace App\Rest\Controllers;

use App\Models\Usuarios;
use App\Rest\Controller as RestController;
use App\Rest\Resources\UsuariosResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UsuariosController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = UsuariosResource::class;



   //Login
   public function login(Request $request)
   {
       $request->validate([
           'usuario' => 'required|string',
           'password' => 'required|string',
       ]);

       $usuario = Usuarios::where('usuario', $request->usuario)->first();

       if (!$usuario || !Hash::check($request->password, $usuario->password)) {
           throw ValidationException::withMessages([
               'usuario' => ['Las credenciales proporcionadas son incorrectas.'],
           ]);
       }

       // Puedes generar un token de API si es necesario
       $token = $usuario->createToken('auth_token')->plainTextToken;

       return response()->json([
           'message' => 'Login exitoso',
           'usuario' => $usuario,
           'token' => $token,
       ]);
   }
}

