<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patients = Patient::all();

        return view('dashboard',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_patient');

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
            'name' => 'string|required|max:55|min:2',
            'email' => 'string|email|max:55|required|unique:patients,email',
            'address' =>'string|max:55|required',
            'age' =>'date|required',
            'phone' =>'string|max:10|min:10|required',
            'permanent_medications'=>'string',
        ]);



        $dateOfBirth = Carbon::parse($request->age);
        $currentDate = Carbon::now();
        $difference = $currentDate->diff($dateOfBirth);

        Patient::create([
            'name' => $request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'age'=> $difference->y,
            'phone'=>$request->phone,
            'permanent_medications'=>$request->permanent_medications,
        ]);
        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('pages.edit_patient',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string|required|max:55|min:2',
            'email' => 'string|email|max:55|required',
            'address' =>'string|max:55|required',
            'age' =>'string|date|required',
            'phone' =>'string|max:10|min:10|required',
            'permanent_medications'=>'string',
        ]);

        $dateOfBirth = Carbon::parse($request->age);
        $currentDate = Carbon::now();
        $difference = $currentDate->diff($dateOfBirth);



        $patient = Patient::find($request->id);
        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->age = $difference->y;
        $patient->permanent_medications = $request->permanent_medications;
        $patient->save();

        return redirect()->route('dashboard');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Patient::destroy($id);
       return redirect()->route('dashboard');
    }
}
