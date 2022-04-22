<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            'user_id' => 2,
        ]);

        Doctor::create([            
            'user_id' => 3,
        ]);
        
        Doctor::create([            
            'user_id' => 4,           
        ]);
    }
}
