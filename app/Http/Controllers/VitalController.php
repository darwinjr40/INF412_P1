<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\User;
use App\Models\Vital;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VitalController extends Controller
{
    public function create2($inquiry_id)
    {
        $inquiry = Inquiry::find($inquiry_id);
        $patient = collect(User::where('id', $inquiry->patient_id)->first());
        $patient = $patient->merge(['edad' => (Carbon::parse($patient['fecha'])->age)]);
        $doctor =  User::find($inquiry->doctor_id);
        // return $patient;
        return view('vital.create2', compact('inquiry', 'patient', 'doctor'));
    }

    public function store2(Request $request, $inquiry_id)
    {
        $vital = Vital::where('inquiry_id', $inquiry_id)->first();
        if ($vital) {
            $vital->update($request->all());
        } else {
            $request->merge(['inquiry_id' => $inquiry_id]);
            Vital::create($request->all());
        }
         
        
        // return "todo bien2";
        return redirect()->route('inquiries.show', $inquiry_id);
    }

    public function index()
    {
        return "index";
        // $vital = Vital::all();
        // return view('vital.index');
    }

    public function create()
    {
        return "create";
        // return view('vital.create');
    }

    public function store(Request $request)
    {
        //  return $request;
        //  Vital::create($request->all());
        return "todo bien";
        return redirect()->route('inquiries.show', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function show(Vital $vital)
    {
        return "show";
    }


    public function edit(Vital $vital)
    {
        return "edit";
    }


    public function update(Request $request, Vital $vital)
    {
        return "udpate";
    }


    public function destroy(Vital $vital)
    {
        return "destroy";
    }
}
