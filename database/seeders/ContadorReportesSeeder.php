<?php

namespace Database\Seeders;

use App\Models\ContadorReportes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContadorReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $count = [
            [
                'trabajadores_anulados' => 0,
                'areas_anuladas' => 0,
                'vehiculos_anulados' => 0,
                'trabajadores' => 0,
                'areas' => 0,
                'vehiculos' => 0
            ]
        ];

        foreach ($count as $c) {
            ContadorReportes::updateOrCreate(['id' => 1], $c);
        }
    }
}
