<?php

namespace Database\Seeders;

use App\Models\Vehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehiculos = [
            ['placa' => 'YEA-0114', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YEA-0113', 'tipo' => 'CAMIONETA C/S', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YEA-1179', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YEA-1180', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YEA-1181', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YEA-1182', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YMA-1063', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YMA-1066', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'GNX-0489', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'YEA-1177', 'tipo' => 'GERENCIA', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'GXG-0400', 'tipo' => 'JEEP', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'GMO-0595', 'tipo' => 'JEEP', 'descripcion' => 'VEHICULO LIVIANO', 'estado' => 1],
            ['placa' => 'OEI-1149', 'tipo' => 'HIDROCLEANER', 'descripcion' => 'EQUIPO PESADO', 'estado' => 1],
            ['placa' => 'YEA-1185', 'tipo' => 'HIDROCLEANER', 'descripcion' => 'EQUIPO PESADO', 'estado' => 1],
            ['placa' => 'YEA-1184', 'tipo' => 'VOLQUETA', 'descripcion' => 'EQUIPO PESADO', 'estado' => 1],
            ['placa' => 'YEI-1084', 'tipo' => 'CAMION HINNO', 'descripcion' => 'EQUIPO PESADO', 'estado' => 1],
            ['placa' => 'YEI-1085', 'tipo' => 'CAMION HINNO', 'descripcion' => 'EQUIPO PESADO', 'estado' => 1],
            ['placa' => 'YEA-1175', 'tipo' => 'CAMIONETA', 'descripcion' => 'PLANTA', 'estado' => 1],
            ['placa' => 'YMA-1065', 'tipo' => 'CAMIONETA', 'descripcion' => 'PLANTA', 'estado' => 1],
            ['placa' => 'YMA-1067', 'tipo' => 'CAMIONETA', 'descripcion' => 'PLANTA', 'estado' => 1],
        ];

        foreach ($vehiculos as $vehiculo) {
            Vehiculos::updateOrCreate(['placa' => $vehiculo['placa']], $vehiculo);
        }
    }
}
