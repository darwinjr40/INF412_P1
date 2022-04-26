<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSpecialty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function getDoctors($id)
    {
         $user_id = DoctorSpecialty::join('users as d', 'd.id', '=', 'doctor_specialty.doctor_id')
         ->where('specialty_id', $id )
        ->select(
            'd.id as doctor_id',
            'd.nombre as doctor_nombre',
        )
        ->get();;

        return $user_id;
    }

    public function index()
    {
        $doctors = Doctor::getDoctorsAll();
        // $doctors = User::all();

        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
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
        $request->merge([
             'password' => Hash::make($request->password),
              'tipo' => User::DOCTOR
        ]);
        $user = User::create($request->all());
        Doctor::create(['id' => $user->id]);
        return redirect()->route('doctors.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user =User::find($user); 
        $user->delete();
        return redirect()->route('doctors.index'); 
    }
}
