<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index($major_id = null)
    {

        if ($major_id) {
            $doctors = Doctor::where("major_id", $major_id)->paginate(12);
        } else {
            $doctors = Doctor::paginate(12);
        }
        return view("front.doctors.index", compact("doctors"));
    }


    public function show(Doctor $doctor)
    {
        return view("front.doctors.doctor_details", compact("doctor"));
    }

}
