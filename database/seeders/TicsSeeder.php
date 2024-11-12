<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar el módulo "Tecnologia de la Informacion"
        $moduloId = DB::table('modulos')->insertGetId([
            'nombre_modulo' => 'Tics',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertar los menús
        $menus = [
            'Opciones' => [
                ['label' => 'Usuarios', 'icon' => 'pi pi-user', 'routerLink' => '/home/usuarios'],
                ['label' => 'Trabajadores', 'icon' => 'pi pi-users', 'routerLink' => '/home/trabajadores'],
                ['label' => 'Permisos', 'icon' => 'pi pi-cog', 'routerLink' => '/home/permisos'],
               
            ],
        ];

        foreach ($menus as $menu => $opciones) {
            // Insertar el menú
            $menuId = DB::table('menus')->insertGetId([
                'nombre_menu' => $menu,
                'modulo_id' => $moduloId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insertar las opciones del menú
            foreach ($opciones as $opcion) {
                DB::table('opciones')->insert([
                    'menu_id' => $menuId,
                    'label' => $opcion['label'],
                    'icon' => $opcion['icon'],
                    'routerLink' => $opcion['routerLink'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

    }
}
