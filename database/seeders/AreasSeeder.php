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
            ['nombre_area' => 'RESERVORIO CHANDUY'],
            ['nombre_area' => 'EBASS POZO GRUESO'],
            ['nombre_area' => 'EBASS ANCONCITO'],
            ['nombre_area' => 'RESERVORIO DE ANCONCITO'],
            ['nombre_area' => 'PLANTA ZAPOTAL'],
            ['nombre_area' => 'AGUA CRUDA'],
            ['nombre_area' => 'RESERVORIO CENTRAL'],
            ['nombre_area' => 'AALL SALINAS'],
            ['nombre_area' => 'AA SALINAS'],
            ['nombre_area' => 'PLANTA EL AZUCAR'],
            ['nombre_area' => 'PLANTA JULIO MORENO'],
            ['nombre_area' => 'PLANTA SUBE Y BAJA'],
            ['nombre_area' => 'EL TABLAZO'],
            ['nombre_area' => 'EBASS SANTA ROSA'],
            ['nombre_area' => 'EBASS SAN PABLO'],
            ['nombre_area' => 'PLANTA COLONCHE'],
            ['nombre_area' => 'RESERVORIO BARBOSA'],
            ['nombre_area' => 'MATRIZ'],
            ['nombre_area' => 'EBASS LA CALETA'],
            ['nombre_area' => 'EBASS ATAHUALPA'],
            ['nombre_area' => 'ARCHIVO'],
            ['nombre_area' => 'BODEGA'],
            ['nombre_area' => 'PLANTA'],
            ['nombre_area' => 'TALLER'],
            ['nombre_area' => 'AGENCIA SANTA ELENA'],
            ['nombre_area' => 'AGENCIA JORGE CEPEDA'],
            ['nombre_area' => 'AGENCIA BUENA VENTURA'],
            ['nombre_area' => 'EBASS SANTA ELENA'],
            ['nombre_area' => 'EBASS BALLENITA'],
            ['nombre_area' => 'AGENCIA ANCONCITO'],
            ['nombre_area' => 'CENTRO DE ATENCION CIUDADANA'],
            ['nombre_area' => 'EBASS ANCONCITO CENTRAL'],
            ['nombre_area' => 'EBASS LUIS CELLERI LASCANO'],
            ['nombre_area' => 'EBASS RESERVORIO ANCONCITO'],
            ['nombre_area' => 'PLANTA ATAHUALPA'],
            ['nombre_area' => 'EBASS SANTA ELENA CENTRAL'],
            ['nombre_area' => 'RESERVORIO SANTA ELENA'],
            ['nombre_area' => 'AGENCIA BUENAVENTURA MORENO'],
            ['nombre_area' => 'AGENCIA MERCADO JORGE CEPEDA JACOME'],
            ['nombre_area' => 'EBASS PUNTA CARNERO'],
            ['nombre_area' => 'EBASS CORDILLERA DEL CONDOR'],
            ['nombre_area' => 'EBASS 6 DE ENERO'],
            ['nombre_area' => 'EBASS MARAÑON'],
            ['nombre_area' => 'EBASS CAUTIVO'],
            ['nombre_area' => 'EBASS PETROINDUSTRIAL'],
            ['nombre_area' => 'EBASS PUERTA DEL SOL'],
            ['nombre_area' => 'MATRIZ AGUAPEN EP'],
            ['nombre_area' => 'EBALL (AGUAS LLUVIAS)'],
            ['nombre_area' => 'EBASS SALINAS 1'],
            ['nombre_area' => 'EBASS LAS DUNAS'],
        ];

        foreach ($areas as $area) {
            Areas::updateOrCreate(['nombre_area' => $area['nombre_area']], $area);
        }
    }
}
