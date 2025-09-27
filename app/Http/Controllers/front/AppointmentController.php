<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function storeAppointment(CreateAppointmentRequest $request)
    {
        $data = $request->validated();
        Appointment::create($data);
        return redirect()->back()->with('success', 'Appointment Bocked Successfuly');
    }
}
