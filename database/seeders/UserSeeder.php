<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'=> 'administrador',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::ADMIN,
        ]);

        User::create([
            'name'=> 'max',
            'email'=> 'max@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::DOCTOR,
            'nombre'=> 'Max Coimbra Herrera',
            'sexo'=> Doctor::HOMBRE,
            'fecha'=> '1974-07-02',
        ]);

        User::create([
            'name'=> 'maite',
            'email'=> 'maite@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::DOCTOR,
            'nombre'=> 'Maite Herrera Lima',
            'sexo'=> Doctor::MUJER,
            'fecha'=> '1970-07-02',
        ]);

        User::create([
            'name'=> 'susibeth',
            'email'=> 'susibeth@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::DOCTOR,
            'nombre'=> 'Susibeth Lopez Garcia',
            // 'fecha'=> '1974-07-02',
            'sexo'=> Doctor::MUJER,
            'fecha'=> date('d-m-y',strtotime('1980-05-10')),
             // 'hora' => date('H:i:s'),
            // 'fecha' => date('Y/m/d'),
        ]);


        //pacientes
        User::create([
            'name'=> 'Maximo',
            'email'=> 'maximo@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::PACIENTE,
            'nombre'=> 'Maximo Hugo Ondarza',
            'sexo'=> Doctor::HOMBRE,
            'fecha'=> '1990-04-24',
        ]);

        User::create([
            'name'=> 'Emi',
            'email'=> 'emiliana@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::PACIENTE,
            'nombre'=> 'Emiliana Ortiz Perez',
            'sexo'=> Doctor::MUJER,
            'fecha'=> '2000-02-20',
        ]);

        User::create([
            'name'=> 'Emerson',
            'email'=> 'emerson@gmail.com',
            'password'=> Hash::make('0000'),
            'tipo'=> User::PACIENTE,
            'nombre'=> 'Emerson Boris Arteaga',
            'sexo'=> Doctor::HOMBRE,
            'fecha'=> '2002-08-29',
        ]);
    }
}
