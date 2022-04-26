<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['id'];


    //relacion de uno a uno inversa
    public function user(){
        // return User::where('id',  $this->id)->first();
        return $this->belongsTo(User::class, 'id');
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
         $patients = User::all()->where('tipo', User::PACIENTE);
        return $patients;
    }
}
