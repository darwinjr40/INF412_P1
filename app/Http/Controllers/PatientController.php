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

    public function create()
    {
        return view('patient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required ',
            'sexo' => 'required',
            'name' => 'required',
            'email' => ' required | unique:users',
            'password' => ' required'
        ]);
        $request->merge([ 'password' => Hash::make($request->password), 'tipo' => User::PACIENTE, 'fecha' => '1970-07-02']);
        $user = User::create($request->all())->assignRole('paciente');
        Patient::create(['id' => $user->id]);
        return redirect()->route('patients.index');
    }


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
        ->orderBy('id', 'desc')
        ->get();    
        $patient = collect( User::where('id',$patient_id)->first());
        $edad = Carbon::parse($patient['fecha'])->age;
        $patient = $patient->merge(['edad' =>  $edad]);
        // $vital = Vital::where('inquiry_id', $inquiry_id)->first();
        // return $inquiries;
        
        return view('patient.show', compact('inquiries', 'patient'));
    }


    public function edit(Patient $patient)
    {
        //
    }

    public function update(Request $request, Patient $patient)
    {
        //
    }


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
