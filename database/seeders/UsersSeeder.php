<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'cedula' => '0923827604',
                'telefono' => '',
                'nombres' => 'Angel Orlin',
                'apellidos' => 'Tomala Mendoza',
                'email' => 'atomala@aguapen.gob.ec',
                'usuario' => 'atomala',
                'password' => '0923827604',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
