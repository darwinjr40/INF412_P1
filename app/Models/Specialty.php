<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;
    //relacion de muchos a muchos
    public function doctors(){
        return $this->belongsToMany(Doctor::class)->as('relacion')->withPivot(['fecha'])->withTimestamps();
    }
}
