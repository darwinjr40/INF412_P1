<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                             ->orderBy('id', 'desc')->get());  
        return $consultas;
    }

    public function getRecipe($inquiry_id)
    {
        // $inquiries = collect(Inquiry::where('id', $inquiry_id)->get());        
        $inquiries = DB::table('inquiries')->where('id', $inquiry_id)->orderBy('created_at', 'desc')->get();
        $i = 0;
        $n = sizeof($inquiries);
        while (($i < $n) &&($inquiries[$i]->path))  { $i++; }
        return ($i < $n) ? (collect()) : ($inquiries);
    }


    public function getUrl($inquiry_id)
    {
        $inquiry = Inquiry::find($inquiry_id);
        return asset($inquiry->path);
    }
}
