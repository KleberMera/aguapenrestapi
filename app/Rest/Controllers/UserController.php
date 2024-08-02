<?php

namespace App\Rest\Controllers;

use App\Models\User;
use App\Rest\Controller as RestController;
use App\Rest\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = UserResource::class;


    public function login(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);


        $user = User::where('usuario', $request->usuario)->first();


        if (!$user) {
            return response()->json([
                'message' => 'El usuario no existe.',
            ], 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Contraseña incorrecta.',
            ], 401);
        }

        return response()->json([
            'usuario' => [
                'id' => $user->id,
                'role_id' => $user->rol_id,
                'nombres' => $user->nombres,
                'apellidos' => $user->apellidos,
            ],
            'token' => $user->createToken('auth_token')->plainTextToken,
        ]);
    }




    public function  AllUsers(Request $request)
    {
        $users = User::all();

        return response()->json([
            'message' => 'Datos obtenidos exitosamente',
            'data' => $users,
        ]);
    }


    //Ver datos por id de usuario
    public function show($id)
    {
        $users = User::findOrFail($id);

        return response()->json([
            'message' => 'Datos obtenidos exitosamente',
            'data' => $users,
        ]);
    }

     // Logout
     public function logout(Request $request)
     {
         $request->user()->currentAccessToken()->delete();
 
         return response()->json([
             'message' => 'Sesión cerrada exitosamente',
         ]);
     }
}
