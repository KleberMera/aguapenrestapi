<?php

namespace App\Rest\Controllers;

use App\Rest\Controller as RestController;
use App\Rest\Resources\ProductosResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = ProductosResource::class;


    // Obtener todos los productos
    public function  getAllProductos(Request $request)
    {
         $products = DB::table('productos')->get();
 
         return response()->json([
             'message' => 'Datos obtenidos exitosamente',
             'data' => $products,
         ]);
     }
}
