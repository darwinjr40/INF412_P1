<?php

namespace Database\Seeders;

use App\Models\DoctorSpecialty;
use App\Models\Specialty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(SpecialtySeeder::class);
        $this->call(DoctorSpecialtySeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(InquirySeeder::class);


    }
}
