<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inquiry extends Model
{
    use HasFactory;
    const F = 'Finalizado';
    const P = 'Pendiente';
    protected $fillable = ['descripcion', 'fecha', 'doctorSpecialty_id', 'patient_id'];
    //relacion de uno a muchos inversa
    public function doctorSpeciality()
    {
        return $this->belongsTo(DoctorSpecialty::class);
    }

    //relacion de uno a muchos inversa
    public function patient()
    {
        return $this->belongsTo(patient::class);
    }





    //retorna todas consultas con doctor y paciente
    static public function getDoctorSpecilityInquiryAll(){
        $doctors = DB::select('
        select inquiries.*, specialties.nombre as "specialties_nombre", 
	    users.nombre as "doctors_nombre", p.nombre as "patients_nombre"
        from users , doctors , specialties, doctor_specialty, inquiries, patients, users p 
        where users.id = doctors.user_id and 
        doctors.id = doctor_specialty.doctor_id and
		specialties.id = doctor_specialty.specialty_id and 
        doctor_specialty.id = inquiries."doctorSpecialty_id" and
        inquiries.patient_id = patients.id and
        patients.user_id = p.id
        ');
        // $doctors = User::all()->where('tipo', User::DOCTOR);
        return $doctors;
    }
}
