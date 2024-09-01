<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeguridadIndustrialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insertar el módulo "Seguridad Industrial"
        $moduloId = DB::table('modulos')->insertGetId([
            'nombre_modulo' => 'Seguridad Industrial',
        ]);

        // Insertar los menús
        $menus = [
            'Opciones' => [
                ['label' => 'Areas', 'icon' => 'pi pi-map-marker', 'routerLink' => '/home/areas'],
                ['label' => 'Productos', 'icon' => 'pi pi-shop', 'routerLink' => '/home/productos'],
                ['label' => 'Vehiculos', 'icon' => 'pi pi-car', 'routerLink' => '/home/vehiculos'],                
               
            ],
            'Asignaciones' => [
                ['label' => 'A. Productos', 'icon' => 'pi pi-list-check', 'routerLink' => '/home/registros'],
                ['label' => 'A. Areas', 'icon' => 'pi pi-list-check', 'routerLink' => '/home/registros-areas'],
                ['label' => 'A. Vehiculos', 'icon' => 'pi pi-list-check', 'routerLink' => '/home/registros-vehiculos'],
                ['label' => 'Anular Registros', 'icon' => 'pi pi-pencil', 'routerLink' => '/home/editar-eliminar'],
            ],
            'Reportes' => [
                ['label' => 'R. Areas', 'icon' => 'pi pi-map-marker', 'routerLink' => '/home/reportes-areas'],
                ['label' => 'R. Vehiculos', 'icon' => 'pi pi-car', 'routerLink' => '/home/reportes-vehiculos'],
                ['label' => 'R. General', 'icon' => 'pi pi-th-large', 'routerLink' => '/home/reportes'],
                ['label' => 'R. Detalles', 'icon' => 'pi pi-id-card', 'routerLink' => '/home/reportes-usuarios'],
                ['label' => 'R. Anulados', 'icon' => 'pi pi-exclamation-triangle', 'routerLink' => '/home/anulados'],
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
