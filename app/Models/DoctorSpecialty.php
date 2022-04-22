<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorSpecialty extends Model
{
    use HasFactory;

    //relacion de uno a mcuhos
    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }

    static public function getDoctorSpecilityAll()
    {
        $doctors = DB::select('
        select  doctor_specialty.id as "doctorSpecialty_id", doctors.id as "doctor_id", 
        specialties.id as "specialty_id ", specialties.nombre as "specialty_nombre",
        users.nombre as "doctor_nombre", doctors.user_id
        from  users, doctors , specialties, doctor_specialty
        where users.id = doctors.user_id and
        specialties.id = doctor_specialty.specialty_id and 
        doctors.id = doctor_specialty.doctor_id
        ');
        // $doctors = User::all()->where('tipo', User::DOCTOR);
        return $doctors;
    }
}
