<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Patient;
use App\Models\User;
use App\Models\Vital;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::getPatientsAll();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required ',
            'sexo' => 'required',
            'name' => 'required',
            'email' => ' required | unique:users',
            'password' => ' required'
        ]);
        $request->merge([ 'password' => Hash::make($request->password), 'tipo' => User::PACIENTE]);
        $user = User::create($request->all());
        Patient::create(['id' => $user->id]);
        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($patient_id)
    {
        // $inquiry = Inquiry::find($inquiry_id);
        // $specialty = Specialty::find($inquiry->specialty_id);
        // $doctor =  User::find($inquiry->doctor_id);
        
        // $recipes = Recipe::all()->where('inquiry_id', $inquiry_id);

        $inquiries = Inquiry::join('users as p', 'inquiries.patient_id', '=', 'p.id')
        ->join('specialties as s', 'inquiries.specialty_id', '=', 's.id')
        ->join('users as d', 'inquiries.doctor_id', '=', 'd.id')
        ->where('patient_id', $patient_id)
        ->select(
            'inquiries.*', 'd.nombre as doctor_nombre',
            'p.nombre as patient_nombre',
            's.nombre as specialty_nombre'  
         )
        ->get();    

        $patient = collect( User::where('id',$patient_id)->first());
        $edad = Carbon::parse($patient['fecha'])->age;
        $patient = $patient->merge(['edad' =>  $edad]);
        // $vital = Vital::where('inquiry_id', $inquiry_id)->first();
        // return $inquiries;
       
        return view('patient.show', compact('inquiries', 'patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(  $id)
    {
        // return $id_user;
        // $patient= Patient::where('user_id', $id_user)->first();
        $patient = User::find($id);
        $patient->delete();
        // $user->delete();
        return redirect()->route('patients.index'); 
    }
}
