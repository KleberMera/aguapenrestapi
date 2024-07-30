<?php

namespace App\Rest\Controllers;

use App\Models\Registro;
use App\Models\RegistroVehiculos;
use App\Rest\Controller as RestController;
use App\Rest\Resources\RegistroVehiculosResource;

class RegistroVehiculosController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = RegistroVehiculosResource::class;


         //Funcion para obtner el ultimo id de registro
         public function lastIdRegistroVehiculos(){
            $ultimoRegistro = RegistroVehiculos::orderBy('id', 'desc')->first();
            
            return response()->json(        
                ['id_registro_vehiculo' => $ultimoRegistro->id],
            );
        }
}
