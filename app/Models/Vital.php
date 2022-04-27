<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    protected $fillable = [
        'presion',
        'pulso',
        'peso',
        'estatura',
        'temperatura',
        'fre_cardiaca',
        'fre_respiratoria',
        'imc',
        'saturacion',
        'estado',
        'inquiry_id'
    ];


    //relacion de uno a uno inversa
    public function inquiry(){
        return $this->belongsTo(Inquiry::class);
    }
}
