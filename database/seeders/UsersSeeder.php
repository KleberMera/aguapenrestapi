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
                'cedula' => '0000000000',
                'telefono' => '1234567890',
                'nombres' => 'User',
                'apellidos' => 'Admin',
                'email' => 'admin@gmail.com',
                'usuario' => 'admin',
                'password' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
