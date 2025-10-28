<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $majors = Major::limit(8)->get();
        $doctors = Doctor::with('major')->get();
        return view("front.home", compact("majors", "doctors"));
    }
}
