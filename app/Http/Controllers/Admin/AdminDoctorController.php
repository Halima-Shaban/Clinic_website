<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
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
        $doctors = Doctor::with('major')->get();
        return view('admin.pages.doctor.index', compact('doctors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors =Major::all();
        $doctor=new Doctor();
        // dd($majors);
            return view('admin.pages.doctor.create',compact('majors','doctor'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request ,Doctor $doctor )
    {
        //
        // dd("hallo");
        $data = $request->validated();

        if ($request->hasFile('image')) {
         

            $imageName = uploadImage($data['image'], 'doctors');
        

        }

        $data['image'] = $imageName ?? 'default.jpg';
        Doctor::create ($data);
       
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
    public function edit( Doctor $doctor)
    {
    
          $majors=Major::all();
         return view('admin.pages.doctor.edit', compact('doctor','majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request ,Doctor $doctor )
    {
        //  $doctor =Doctor::findOrFail($id);
         $data=$request->validated(); 
         if ($request->hasFile('image')) {
            # code...

            $imageName=uploadImage($data['image'],'doctors');
            $data['image']=$imageName;
         }

         $doctor->update($data);
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
