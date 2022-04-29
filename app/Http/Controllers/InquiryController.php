<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Patient;
use App\Models\Recipe;
use App\Models\Specialty;
use App\Models\User;
use App\Models\Vital;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquiries = inquiry::join('users as p', 'inquiries.patient_id', '=', 'p.id')
                            ->join('users as d', 'inquiries.doctor_id', '=', 'd.id')
                            ->join('specialties as s', 'inquiries.specialty_id', '=', 's.id')
                            ->select(
                                'inquiries.*', 'd.nombre as doctor_nombre', 
                                'p.nombre as patient_nombre',
                                's.nombre as specialty_nombre'  
                             )
        ->get();    
        // return inquiry::all();
        return view('inquiry.index', compact('inquiries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $doctor_specialty = DoctorSpecialty::getDoctorSpecilityAll();
        $doctor_specialty = Specialty::all();

        // return $d[0]->doctor_nombre;
        $patients = Patient::getPatientsAll1();
        // return $patients;
        // Doctor::find(3)->specialties()->attach([1, 4, 5, 6], ['fecha'=>date('Y/m/d')]);
        // Specialty::find(7)->doctors()->attach([1], ['fecha'=>date('Y/m/d')]);
        return view('inquiry.create', compact('doctor_specialty','patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([ 
            'fecha' => date('Y/m/d'),
        ]);
        $user = Inquiry::create($request->all());
        return redirect()->route('inquiries.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($inquiry_id)
    {
        $inquiry = Inquiry::find($inquiry_id);
        $specialty = Specialty::find($inquiry->specialty_id);
        $doctor =  User::find($inquiry->doctor_id);
        $patient = collect( User::where('id',$inquiry->patient_id)->first());
        $edad = Carbon::parse($patient['fecha'])->age;
        $patient = $patient->merge(['edad' =>  $edad]);
        $vital = Vital::where('inquiry_id', $inquiry_id)->first();
        $recipes = Recipe::all()->where('inquiry_id', $inquiry_id);
       return  view('inquiry.show', compact('patient', 'inquiry', 'specialty', 'doctor', 'vital', 'recipes'));
    }

    public function show2($inquiry_id)
    {
        $inquiry = Inquiry::find($inquiry_id);
        $specialty = Specialty::find($inquiry->specialty_id);
        $doctor =  User::find($inquiry->doctor_id);
        $patient = collect( User::where('id',$inquiry->patient_id)->first());
        $patient = $patient->merge(['edad' =>  (Carbon::parse($patient['fecha'])->age)]);
        $vital = Vital::where('inquiry_id', $inquiry_id)->first();
        $recipes = Recipe::all()->where('inquiry_id', $inquiry_id);
       return  view('show2', compact('patient', 'inquiry', 'specialty', 'doctor', 'vital', 'recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        inquiry::find($id)->delete();
        return redirect()->route('inquiries.index'); 
    }
}
