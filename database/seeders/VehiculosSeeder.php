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
            ['placa' => 'YEA-0114', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YEA-0113', 'tipo' => 'CAMIONETA C/S', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YEA-1179', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YEA-1180', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YEA-1181', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YEA-1182', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YMA-1063', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YMA-1066', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'GNX-0489', 'tipo' => 'CAMIONETA D/C', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'YEA-1177', 'tipo' => 'GERENCIA', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'GXG-0400', 'tipo' => 'JEEP', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'GMO-0595', 'tipo' => 'JEEP', 'descripcion' => 'VEHICULO LIVIANO'],
            ['placa' => 'OEI-1149', 'tipo' => 'HIDROCLEANER', 'descripcion' => 'EQUIPO PESADO'],
            ['placa' => 'YEA-1185', 'tipo' => 'HIDROCLEANER', 'descripcion' => 'EQUIPO PESADO'],
            ['placa' => 'YEA-1184', 'tipo' => 'VOLQUETA', 'descripcion' => 'EQUIPO PESADO'],
            ['placa' => 'YEI-1084', 'tipo' => 'CAMION HINNO', 'descripcion' => 'EQUIPO PESADO'],
            ['placa' => 'YEI-1085', 'tipo' => 'CAMION HINNO', 'descripcion' => 'EQUIPO PESADO'],
            ['placa' => 'YEA-1175', 'tipo' => 'CAMIONETA', 'descripcion' => 'PLANTA'],
            ['placa' => 'YMA-1065', 'tipo' => 'CAMIONETA', 'descripcion' => 'PLANTA'],
            ['placa' => 'YMA-1067', 'tipo' => 'CAMIONETA', 'descripcion' => 'PLANTA'],
        ];

        foreach ($vehiculos as $vehiculo) {
            Vehiculos::updateOrCreate(['placa' => $vehiculo['placa']], $vehiculo);
        }
    }
}
