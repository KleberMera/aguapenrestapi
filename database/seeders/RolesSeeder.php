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
        $roles  = new Roles();

        $roles->nombre_rol = 'Administrador';
        $roles->save();

        $roles  = new Roles();
        $roles->nombre_rol = 'Cliente';
        $roles->save();

        
    }
}
