<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('pages.doctors',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_doctor');
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
            'email' => 'string|email|max:55|required',
            'address' =>'string|max:55|required',
            'phone' =>'string|max:10|min:10|required',
            'specialization'=>'string',
        ]);




        Doctor::create([
            'name' => $request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'phone'=>$request->phone,
            'specialization'=>$request->specialization,
        ]);
        return redirect()->route('doctors');
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
    public function edit($id)
    {
       $doctor = Doctor::find($id);
        return view('pages.edit_doctor',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string|required|max:55|min:2',
            'email' => 'string|email|max:55|required',
            'address' =>'string|max:55|required',
            'phone' =>'string|max:10|min:10|required',
            'specialization'=>'string',
        ]);

        $doctor = Doctor::find($request->id);

        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;
        $doctor->specialization = $request->specialization;
        $doctor->save();

        return redirect()->route('doctors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
        return redirect()->route('doctors');
    }
}
