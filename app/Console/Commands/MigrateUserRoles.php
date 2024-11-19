<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Role;

class MigrateUserRoles extends Command
{
    protected $signature = 'migrate:user-roles';
    protected $description = 'Asignar roles a los usuarios en la columna role_id';

    public function handle()
    {
        // Recorrer todos los usuarios
        User::chunk(100, function ($users) {
            foreach ($users as $user) {
                // Asignar rol USER (2) por defecto
                $user->role_id = Role::USER;

                // Lógica personalizada: si es necesario, asigna ADMIN (1) a ciertos usuarios
                if ($user->email === 'admin@admin.com') {
                    $user->role_id = Role::ADMIN;
                }

                $user->save();
            }
        });

        $this->info('Roles asignados exitosamente.');
    }
}
