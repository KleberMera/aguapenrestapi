<?php

namespace App\Rest\Controllers;

use App\Rest\Controller as RestController;
use App\Rest\Resources\UsuariosTrabajadoresResource;
use Illuminate\Support\Facades\DB;

class UsuariosTrabajadoresController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = UsuariosTrabajadoresResource::class;


    //Funcio para saber cuantos usuarios trabajadores hay en la base de datos
    public function countusersdata(){
        $countusers = DB::table('usuarios_trabajadores')->count();
        return response()->json(        
            ['data' => $countusers],
        );
    }
}
