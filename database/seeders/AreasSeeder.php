<?php

namespace Database\Seeders;

use App\Models\Areas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['nombre_area' => 'RESERVORIO CHANDUY', 'estado' => 1],
            ['nombre_area' => 'EBASS POZO GRUESO', 'estado' => 1],
            ['nombre_area' => 'EBASS ANCONCITO', 'estado' => 1],
            ['nombre_area' => 'RESERVORIO DE ANCONCITO', 'estado' => 1],
            ['nombre_area' => 'PLANTA ZAPOTAL', 'estado' => 1],
            ['nombre_area' => 'AGUA CRUDA', 'estado' => 1],
            ['nombre_area' => 'RESERVORIO CENTRAL', 'estado' => 1],
            ['nombre_area' => 'AALL SALINAS', 'estado' => 1],
            ['nombre_area' => 'AA SALINAS', 'estado' => 1],
            ['nombre_area' => 'PLANTA EL AZUCAR', 'estado' => 1],
            ['nombre_area' => 'PLANTA JULIO MORENO', 'estado' => 1],
            ['nombre_area' => 'PLANTA SUBE Y BAJA', 'estado' => 1],
            ['nombre_area' => 'EL TABLAZO', 'estado' => 1],
            ['nombre_area' => 'EBASS SANTA ROSA', 'estado' => 1],
            ['nombre_area' => 'EBASS SAN PABLO', 'estado' => 1],
            ['nombre_area' => 'PLANTA COLONCHE', 'estado' => 1],
            ['nombre_area' => 'RESERVORIO BARBOSA', 'estado' => 1],
            ['nombre_area' => 'MATRIZ', 'estado' => 1],
            ['nombre_area' => 'EBASS LA CALETA', 'estado' => 1],
            ['nombre_area' => 'EBASS ATAHUALPA', 'estado' => 1],
            ['nombre_area' => 'ARCHIVO', 'estado' => 1],
            ['nombre_area' => 'BODEGA', 'estado' => 1],
            ['nombre_area' => 'PLANTA', 'estado' => 1],
            ['nombre_area' => 'TALLER', 'estado' => 1],
            ['nombre_area' => 'AGENCIA SANTA ELENA', 'estado' => 1],
            ['nombre_area' => 'AGENCIA JORGE CEPEDA', 'estado' => 1],
            ['nombre_area' => 'AGENCIA BUENA VENTURA', 'estado' => 1],
            ['nombre_area' => 'EBASS SANTA ELENA', 'estado' => 1],
            ['nombre_area' => 'EBASS BALLENITA', 'estado' => 1],
            ['nombre_area' => 'AGENCIA ANCONCITO', 'estado' => 1],
            ['nombre_area' => 'CENTRO DE ATENCION CIUDADANA', 'estado' => 1],
            ['nombre_area' => 'EBASS ANCONCITO CENTRAL', 'estado' => 1],
            ['nombre_area' => 'EBASS LUIS CELLERI LASCANO', 'estado' => 1],
            ['nombre_area' => 'EBASS RESERVORIO ANCONCITO', 'estado' => 1],
            ['nombre_area' => 'PLANTA ATAHUALPA', 'estado' => 1],
            ['nombre_area' => 'EBASS SANTA ELENA CENTRAL', 'estado' => 1],
            ['nombre_area' => 'RESERVORIO SANTA ELENA', 'estado' => 1],
            ['nombre_area' => 'AGENCIA BUENAVENTURA MORENO', 'estado' => 1],
            ['nombre_area' => 'AGENCIA MERCADO JORGE CEPEDA JACOME', 'estado' => 1],
            ['nombre_area' => 'EBASS PUNTA CARNERO', 'estado' => 1],
            ['nombre_area' => 'EBASS CORDILLERA DEL CONDOR', 'estado' => 1],
            ['nombre_area' => 'EBASS 6 DE ENERO', 'estado' => 1],
            ['nombre_area' => 'EBASS MARAÑON', 'estado' => 1],
            ['nombre_area' => 'EBASS CAUTIVO', 'estado' => 1],
            ['nombre_area' => 'EBASS PETROINDUSTRIAL', 'estado' => 1],
            ['nombre_area' => 'EBASS PUERTA DEL SOL ', 'estado' => 1],
            ['nombre_area' => 'MATRIZ AGUAPEN EP', 'estado' => 1],
            ['nombre_area' => 'EBALL (AGUAS LLUVIAS)', 'estado' => 1],
            ['nombre_area' => 'EBASS SALINAS 1', 'estado' => 1],
            ['nombre_area' => 'EBASS LAS DUNAS', 'estado' => 1],
        ];

        foreach ($areas as $area) {
            Areas::updateOrCreate(['nombre_area' => $area['nombre_area']], $area);
        }
    }
}
