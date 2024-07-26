<?php

namespace App\Rest\Controllers;

use App\Models\RegistroArea;
use App\Rest\Controller as RestController;
use App\Rest\Resources\RegistroAreaResource;
use Illuminate\Support\Facades\DB;

class RegistroAreaController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = RegistroAreaResource::class;


     //Funcion para obtner el ultimo id de registro
     public function lastIdRegistroArea(){
        $ultimoRegistro = RegistroArea::orderBy('id', 'desc')->first();
        
        return response()->json(        
            ['id_registro_area' => $ultimoRegistro->id],
        );
    }

      // Función para obtener registros con detalles
      public function obtenerRegistrosConDetallesArea()
      {
          $registrosConDetalles = DB::table('registro_areas as r')
              ->join('registro_detalle_areas as rd', 'r.id', '=', 'rd.id_registro_area')
              ->join('productos as p', 'rd.id_producto', '=', 'p.id')
              ->join('areas as a', 'r.id_area', '=', 'a.id')
              ->select(
                  'r.id',
                  'r.fecha_registro',
                  'r.hora_registro',
                  'a.nombre_area',
                  'p.nombre_producto',
                  'rd.cantidad',
                  'r.observacion',
                  DB::raw('SUM(rd.cantidad) OVER (PARTITION BY r.id) AS total_cantidades')
              )
              ->orderBy('r.id')
              ->orderBy('p.nombre_producto')
              ->get();
  
          return response()->json($registrosConDetalles);
      }
   
}
