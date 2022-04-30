<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    public $specialties = array(
        "Ginecologia",
        "Medicina General",
        "Urología",
        "pediatria",
        "Cardiología",
        "cardiovascular",
        "Traumatologia",
        "Neurología",

    );

    public $descripciones = array(
        "Dedicada al cuidado del sistema reproductor femenino, su formación y cualificación tanto medica como quirúrgica, tiene por objeto el tratamiento de los aspectos relacionados con la función reproductora y sexual de la mujer",
        "Capacitado para el diagnóstico y tratamientos de los enfermos, la prevención de las enfermedades.",
        "Especialidad que se encarga del aparato urinario de la mujer y del aparato urinario y reproductor masculino",
        "specialidad que se encarga de todas las patologías presentadas en los niños, desde su nacimiento hasta los 13 años de edad",
        "El especialista se encarga de ver el perfecto funcionamiento del corazón, a través de estudios detecta enfermedades cardiovasculares, y da tratamientos relacionados con la presión arterial entre otros.",
        "Atiende todo lo que tiene que ver con: Arterias y venas, Mecanismos reguladores, Colocado de fistulas",
        "Especialidad que se ocupa de las lesiones traumáticas de columna y extremidades que afectan a: sus huesos (fracturas, epifisíolosis); ligamentos y articulaciones (esquinces, luxaciones, artritis traumáticas); músculos y tendones (roturas fibrilares, hematomas, contusiones, tensiones, tendinitis); y piel (herida)",
        "Trata los trastornos del sistema nervioso.​ Específicamente se ocupa de la prevención, diagnóstico, tratamiento y rehabilitación de todas las enfermedades que involucran al sistema nervioso central, sistema nervioso periférico y el sistema nervioso autónomo. ",
    );

    public function run()
    {
        $n = sizeof($this->specialties) ;
        for ($i=0; $i < $n; $i++) { 
            Specialty::create([
                'nombre'=> $this->specialties[$i],
                'descripcion'=> $this->descripciones[$i],
            ]); 
        }
    }
}
