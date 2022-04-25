<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
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
        Patient::create(['user_id' => $user->id]);
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
        $user_id = Patient::find($patient_id)->user_id;//->get('id');
        // $patient = User::where('id', $user_id)->get()[0];
        $patient = DB::table('users')->where('id',$user_id)->first();
        $patient->add([ 
            // 'edad' => Carbon::parse($patient->fecha)->age,
            'edad' => 'dasd',
            
        ]);
        return $patient;
        // return $patient->fecha->diff(date('Y-m-d'));
        // return $patient->fecha.$edad;
        return view('patient.show', compact('patient'));
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
    public function destroy( $id_user)
    {
        $patient= Patient::where('user_id', $id_user)->first();
        $user = User::find($id_user);
        $patient->delete();
        $user->delete();
        return redirect()->route('patients.index'); 
    }
}
