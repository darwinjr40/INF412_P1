<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Seeder;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            'doctor_id' => 2,
            'specialty_id' => 1, 
            // 'doctorSpecialty_id' => 2,
            'patient_id' => 5, 
        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            'doctor_id' => 3,
            'specialty_id' => 1, 
            // 'doctorSpecialty_id' => 3,
            'patient_id' => 5, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            'doctor_id' => 3,
            'specialty_id' => 1, 
            // 'doctorSpecialty_id' => 4,

            'patient_id' => 6, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            'doctor_id' => 3,
            'specialty_id' => 5, 
            // 'doctorSpecialty_id' => 5,

            'patient_id' => 7, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            'doctor_id' => 3,
            'specialty_id' => 4, 
            // 'doctorSpecialty_id' => 6,

            'patient_id' => 6, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            'doctor_id' => 4,
            'specialty_id' => 7, 
            // 'doctorSpecialty_id' => 6,

            'patient_id' => 6, 

        ]);
    }
}
