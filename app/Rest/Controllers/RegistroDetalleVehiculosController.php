<?php

namespace App\Rest\Controllers;

use App\Models\RegistroDetalleVehiculos;
use App\Rest\Controller as RestController;

class RegistroDetalleVehiculosController extends RestController
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = RegistroDetalleVehiculos::class;
}
