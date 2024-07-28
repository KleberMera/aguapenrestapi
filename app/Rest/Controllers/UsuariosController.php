<?php

namespace App\Rest\Controllers;

use App\Models\Usuarios;
use App\Rest\Controller as RestController;
use App\Rest\Resources\UsuariosResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

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
        $message = "";
        $http_res = Response::HTTP_OK;
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        $usuario = Usuarios::where('usuario', $request->usuario)->first();


        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            $message = "Las credenciales proporcionadas son incorrectas.";
            $http_res = Response::HTTP_UNAUTHORIZED;
        } else {
            // Puedes generar un token de API si es necesario
            $token = $usuario->createToken('auth_token')->plainTextToken;

            $message = "Login exitoso";
        }



        return response( $http_res )->json([
            'message' => $message,
            'usuario' => [
                'id' => $usuario->id,
                'nombres' => $usuario->nombres,
                'apellidos' => $usuario->apellidos,
            ],
            'token' => $token,
        ]);
    }

    //Ver datos por id de usuario
    public function show(Request $request)
    {


        $usuario = Usuarios::where('id', $request->id)->first();

        if (!$usuario) {
            throw ValidationException::withMessages([
                'id' => ['El usuario no existe.'],
            ]);
        }

        return response()->json([
            'message' => 'Datos exitoso',
            'usuario' =>  $usuario,
        ]);
    }


    // Verificar cédula
    public function verifyCedula(Request $request)
    {
        $message = "";
        $status = "";
        $request->validate([
            'cedula' => 'required|string',
        ]);

        $usuario = Usuarios::where('cedula', $request->cedula)->first();

        if (!$usuario) {
            $message = "La cédula proporcionada no existe.";
            $status = "0";
        } else {
            $message = "Verificación de cédula exitosa";
            $status = "1";
        }

        return response()->json([
            'message' => $message,
            'status' => $status,
        ]);
    }

    // Restablecer contraseña por cédula
    public function resetPasswordByCedula(Request $request)
    {
        $message = "";
        $status = "";
        $request->validate([
            'cedula' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $usuario = Usuarios::where('cedula', $request->cedula)->first();

        if (!$usuario) {
            $message = "La cédula proporcionada no existe.";
            $status = "0";
        } else {
            $usuario->password = Hash::make($request->new_password);
            $usuario->save();
            $message = "Contraseña restablecida exitosamente";
            $status = "1";
        }

        return response()->json([
            'message' => $message,
            'status' => $status,
        ]);
    }
}
