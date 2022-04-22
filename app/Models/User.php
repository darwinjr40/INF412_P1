<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const DOCTOR = 'D';
    const ADMIN = 'A';
    const PACIENTE = 'P';

    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo',
        
        'nombre',
        'sexo',
        'fecha',
    ];

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //doctor tiene 1 usuario
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    //doctor tiene 1 usuario
    public function patient()
    {
        return $this->hasOne(Patient::class);
    }
}
