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
            // 'doctor_id' => 2,
            // 'speciality_id' => 1, 
            'doctorSpecialty_id' => 2,
            'patient_id' => 1, 
        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            // 'doctor_id' => 3,
            // 'speciality_id' => 1, 
            'doctorSpecialty_id' => 3,
            'patient_id' => 1, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            // 'doctor_id' => 1,
            // 'speciality_id' => 7, 
            'doctorSpecialty_id' => 4,

            'patient_id' => 2, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            // 'doctor_id' => 3,
            // 'speciality_id' => 5, 
            'doctorSpecialty_id' => 5,

            'patient_id' => 3, 

        ]);

        Inquiry::create([
            'fecha'   => date('Y/m/d'),
            // 'doctor_id' => 3,
            // 'speciality_id' => 4, 
            'doctorSpecialty_id' => 6,

            'patient_id' => 2, 

        ]);
    }
}
