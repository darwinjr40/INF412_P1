<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];


    //relacion de uno a uno inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    static public function getPatientsAll()
    {
        $patients = User::all()->where('tipo', User::PACIENTE);
        return $patients;
    }

    //relacion de uno a muchos
    public function inquiries(){
        return $this->belongsTo(inquiries::class);
    }
    static public function getPatientsAll1()
    {
        $patients = DB::select('
            select  patients.user_id, patients.id as "patient_id", 
            users.nombre as "patient_nombre" 
            from  users, patients 
            where users.id = patients.user_id 
        ');
        // $doctors = User::all()->where('tipo', User::DOCTOR);
        return $patients;
    }
}
