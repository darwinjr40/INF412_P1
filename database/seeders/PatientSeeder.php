<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'user_id' => 5,
        ]);

        Patient::create([
            
            'user_id' => 6,
        ]);
        Patient::create([
            
            'user_id' => 7,
           
        ]);
    }
}
