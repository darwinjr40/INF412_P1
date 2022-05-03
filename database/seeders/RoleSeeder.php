<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run()
    {

        $a = Role::create(['name' => 'admin']);
        $b = Role::create(['name' => 'doctor']);
        $c = Role::create(['name' => 'paciente']);

        Permission::create([
            'name' => 'home',
            'descripcion' => 'Ver el Inicio'
        ])->syncRoles($a, $b);

        //USUARIOS-------------------------------------------------------------------------------                    
        Permission::create([
            'name' => 'users.index',
            'descripcion' => 'Ver lista de Usuarios'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'users.create',
            'descripcion' => 'Crear Usuarios'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'users.edit',
            'descripcion' => 'Editar Usuarios'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'users.destroy',
            'descripcion' => 'Eliminar Usuarios'
        ])->syncRoles($a);

        //Pacientes-------------------------------------------------------------------------------
        Permission::create([
            'name' => 'patients.index',
            'descripcion' => 'Ver lista de pacientes'
        ])->syncRoles($a, $b);

        Permission::create([
            'name' => 'patients.create',
            'descripcion' => 'Crear pacientes'
        ])->syncRoles($a, $b);

        Permission::create([
            'name' => 'patients.edit',
            'descripcion' => 'Editar pacientes'
        ])->syncRoles($a, $b);

        Permission::create([
            'name' => 'patients.show',
            'descripcion' => 'Informacion de pacientes'
        ])->syncRoles($a, $b);

        Permission::create([
            'name' => 'patients.destroy',
            'descripcion' => 'Eliminar pacientes'
        ])->syncRoles($a);

        //Doctores-------------------------------------------------------------------------------
        Permission::create([
            'name' => 'doctors.index',
            'descripcion' => 'Ver lista de doctores'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'doctors.create',
            'descripcion' => 'Crear doctores'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'doctors.edit',
            'descripcion' => 'Editar doctores'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'doctors.show',
            'descripcion' => 'Informacion de doctores'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'doctors.destroy',
            'descripcion' => 'Eliminar doctores'
        ])->syncRoles($a);

        //Consultas-------------------------------------------------------------------------------
        Permission::create([
            'name' => 'inquiries.index',
            'descripcion' => 'Ver lista de consultas'
        ])->syncRoles($a, $b);

        Permission::create([
            'name' => 'inquiries.create',
            'descripcion' => 'Crear consultas'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'inquiries.edit',
            'descripcion' => 'Editar consultas'
        ])->syncRoles($a);

        Permission::create([
            'name' => 'inquiries.show',
            'descripcion' => 'Informacion de consultas'
        ])->syncRoles($a, $b);

        Permission::create([
            'name' => 'inquiries.destroy',
            'descripcion' => 'Eliminar consultas'
        ])->syncRoles($a);
    }
}
