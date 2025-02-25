<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el usuario administrador
        User::create([
            'name' => 'Admin', // Nombre del administrador
            'surname' => 'User', // Apellido del administrador
            'email' => 'admin@admin.com', // Correo del administrador
            'birthday' => '1980-01-01', // Fecha de nacimiento (opcional)
            'password' => Hash::make('administrador'), // Contraseña segura
            'role_id' => 1, // Rol de administrador (asumiendo que 1 es admin)
        ]);

        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => 'User' . $i, // Nombre del usuario
                'surname' => 'Surname' . $i, // Apellido del usuario
                'email' => 'user' . $i . '@example.com', // Correo del usuario
                'birthday' => '1990-01-01', // Fecha de nacimiento (opcional)
                'password' => Hash::make('usuario'), // Contraseña segura
                'role_id' => 2, // Rol de usuario
            ]);
        }
    }
}
