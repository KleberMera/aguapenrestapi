<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nombre_rol' => 'Administrador'],
            ['nombre_rol' => 'Cliente'],
            ['nombre_rol' => 'Visualizador'],
            // Puedes agregar más roles aquí si es necesario
        ];

        foreach ($roles as $role) {
            Roles::create($role);
        }

        
    }
}
