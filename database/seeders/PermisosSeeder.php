<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $userId = 1; // ID del usuario al que se le asignarán los permisos
    
        // Obtener todas las opciones de todos los módulos
        $opciones = DB::table('opciones')
            ->join('menus', 'opciones.menu_id', '=', 'menus.id')
            ->join('modulos', 'menus.modulo_id', '=', 'modulos.id')
            ->select('opciones.id')
            ->get();
    
        // Asignar permisos de lectura y escritura para cada opción
        foreach ($opciones as $opcion) {
            DB::table('permisos')->insert([
                'user_id' => $userId,
                'opcion_id' => $opcion->id,
                'per_editar' => true,
                'per_ver' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    
}
