<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class AdminDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors =Doctor::all();
        return view('admin.pages.doctor.index', compact('doctors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Major $major)
    {
        $majors =Major::all();
        // dd($majors);
            return view('admin.pages.doctor.create',compact('majors'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request ,Doctor $doctor )
    {
        //
        // dd("hallo");
        Doctor::create ($request->validated());
        return redirect()->route('admin.doctor.index')->with('success','Doctor Added Successfully');


    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
          $doctor =Doctor::findOrFail($id);
          $majors=Major::all();
         return view('admin.pages.doctor.edit', compact('doctor','majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request ,Doctor $doctor )
    {
        //  $doctor =Doctor::findOrFail($id);
         $doctor->update($request->validated());
        return redirect()->route('admin.doctor.index')->with('success','Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctor.index')->with('success','Doctor Deleted Successfully');
    }
}
