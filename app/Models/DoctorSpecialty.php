<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorSpecialty extends Model
{
    use HasFactory;
    protected $table = "doctor_specialty";
    //relacion de uno a mcuhos
    public function inquiries()
    {
        // return $this->hasMany(Inquiry::class, ['doctor_id','specialty_id']);
        return Inquiry::where('doctor_id', $this->doctor_id)->where('specialty_id', $this->specialty_id)->first();
    }

    public function doctor()
    {
        // return $this->hasMany(Inquiry::class, ['doctor_id','specialty_id']);
        return Doctor::where('id', $this->doctor_id)->first();
    }
    

    static public function getDoctorSpecilityAll()
    {
        // $doctors = DB::select('
        // select  doctor_specialty.id as "doctorSpecialty_id", doctors.id as "doctor_id", 
        // specialties.id as "specialty_id ", specialties.nombre as "specialty_nombre",
        // users.nombre as "doctor_nombre", doctors.user_id
        // from  users, doctors , specialties, doctor_specialty
        // where users.id = doctors.user_id and
        // specialties.id = doctor_specialty.specialty_id and 
        // doctors.id = doctor_specialty.doctor_id
        // ');
        $doctor_specialty = DoctorSpecialty::join('users as d', 'd.id', '=', 'doctor_specialty.doctor_id')
                                             ->join('specialties as s', 's.id', '=', 'doctor_specialty.specialty_id' )
                                            ->select(
                                                'd.id as doctor_id',
                                                'd.nombre as doctor_nombre',
                                                's.id as specialty_id',
                                                's.nombre as specialty_nombre'
                                            )
                                            ->get();
        return $doctor_specialty;
    }
}
