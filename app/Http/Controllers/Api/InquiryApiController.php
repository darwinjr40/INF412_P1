<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryApiController extends Controller
{
    public function getConsultas($patient_id)
    {
        $consultas = collect(Inquiry::join('users as p', 'inquiries.patient_id', '=', 'p.id')
                            ->join('users as d', 'inquiries.doctor_id', '=', 'd.id')
                            ->join('specialties as s', 'inquiries.specialty_id', '=', 's.id')
                            ->where('inquiries.patient_id', $patient_id)
                            ->select(
                                'inquiries.*', 
                                'd.nombre as doctor_nombre', 
                                'p.nombre as patient_nombre',
                                's.nombre as specialty_nombre'  
                             )
        ->get());    
        return $consultas;
    }
}
