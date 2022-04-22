<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    public $specialties = array(
        "Médicina Interna",
        "Pediatría",
        "Gineco obstetricia",
        "Cirugía",
        "Psiquiatría",
        "Cardiología",
        "Dermatología",
        "Endocrinología",
        "Gastroenterología",
        "Infectología",
        "Nefrología",
        "Oftalmología",
        "Otorrinolaringología",
        "Neumología",
        "Neurología",
        "Radiología",
        "Anestesiología",
        "Oncología",
        "Patología",
        "Urología",
        "Medicina física y rehabilitación",
        "Medicina Intensiva",
        "Medicina Familiar"
    );


    public function run()
    {
        $n = sizeof($this->specialties) ;
        for ($i=0; $i < $n; $i++) { 
            Specialty::create([
                'nombre'=> $this->specialties[$i],
            ]); 
        }
    }
}
