<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    use HasFactory;
    const MUJER = 'F';
    const HOMBRE = 'M';
    protected $fillable = ['id'];//los atributos que guardaremos
    // protected $guarded = ['ci','nombre','sexo','telefono','email', 'domicilio'];//los atributos que no guardaremos si es que existiera
    // protected $guarded = []; //en este caso, vacio por que quiero que gurde todos en asignacion masiva

    //relacion de uno a uno inversa
    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    //realacion de muchos a muchos
    public function specialties(){
        return $this->belongsToMany(Specialty::class)->as('relation')->withPivot(['fecha'])->withTimestamps();
        // return "hola";
    }

    public function doctorSpecialty(){
        return doctorSpecialty::where('doctor_id', $this->id)->get();
    }

    static public function getDoctorsAll(){
        $doctors = User::all()->where('tipo', User::DOCTOR);
        return $doctors;
    }
    
}
