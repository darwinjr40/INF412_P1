<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Database\Seeder;

class DoctorSpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::find(2)->specialties()->attach([1,2,3], ['fecha'=>date('Y/m/d')]);

        Doctor::find(3)->specialties()->attach([1, 4, 5, 6], ['fecha'=>date('Y/m/d')]);

        Specialty::find(7)->doctors()->attach([1], ['fecha'=>date('Y/m/d')]);

        
    }
}
