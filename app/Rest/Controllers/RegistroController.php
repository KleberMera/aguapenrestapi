<?php

namespace App\Rest\Controllers;

use App\Models\Registro;
use App\Rest\Controller as RestController;
use App\Rest\Resources\RegistroResource;
use Illuminate\Support\Facades\DB;

class RegistroController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = RegistroResource::class;


    //Funcion para obtener el ultimo id de registro
    public function ultimoIdRegistro(){
        $ultimoRegistro = Registro::orderBy('id', 'desc')->first();
        
        return response()->json(        
            ['id_registro' => $ultimoRegistro->id],
        );
    }


    
     // Función para obtener los registros con detalles
     public function obtenerRegistrosConDetalles()
     {
         $registrosConDetalles = DB::table('registros as r')
             ->join('usuarios_trabajadores as u', 'r.id_usuario', '=', 'u.id')
             ->join('registro_detalles as rd', 'r.id', '=', 'rd.id_registro')
             ->join('productos as p', 'rd.id_producto', '=', 'p.id')
             ->select(
                 'r.id as id_tbl_registros',
                 'rd.id as id_tbl_registro_detalles',
                 'u.tx_nombre as nombre',
                 'u.tx_cedula as cedula',
                 'r.fecha_registro',
                 'p.id as id_tbl_productos',
                 'p.nombre_producto',
                 'p.codigo_producto',
                 'p.stock_producto',
                 'rd.cantidad',
                 'r.observacion',
                 DB::raw('SUM(rd.cantidad) OVER (PARTITION BY r.id) AS total_cantidades')
             )
             ->orderBy('r.id')
             ->orderBy('p.nombre_producto')
             ->get();
 
         return response()->json(
             ['data' => $registrosConDetalles],
         );
     }
}
