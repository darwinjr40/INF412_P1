<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSpecialty;
use App\Models\inquiry;
use App\Models\Patient;
use App\Models\Specialty;
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
        $inquiries = inquiry::getDoctorSpecilityInquiryAll();
        // return $inquiries;
        return view('inquiry.index', compact('inquiries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctorsSpecialties = DoctorSpecialty::getDoctorSpecilityAll();
        // return $d[0]->doctor_nombre;
        $patients = Patient::getPatientsAll1();
        // return $patients;
        // Doctor::find(3)->specialties()->attach([1, 4, 5, 6], ['fecha'=>date('Y/m/d')]);

        // Specialty::find(7)->doctors()->attach([1], ['fecha'=>date('Y/m/d')]);

        return view('inquiry.create', compact('doctorsSpecialties','patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Inquiry::create([
        //     'fecha'   => date('Y/m/d'),
        //     'doctorSpeciality_id' => $request->doctorSpeciality_id,
        //     'patient_id' => $request->patient_id,
        //     'descripcion' => $request->descripcion
        // ]);
        // return$request;
        $request->merge([ 'fecha' => date('Y/m/d')]);
        $user = Inquiry::create($request->all());
        return redirect()->route('inquiries.index');          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        inquiry::find($id)->delete();
        return redirect()->route('inquiries.index');  
    }
}
