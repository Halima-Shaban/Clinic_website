<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $statuses = \App\Enums\AppointmentEnums::class;

        $appiontments = Appointment::query();

        if ($request->filled('search')) {
            $appiontments->where('patient_name', 'like', '%' . $request->search . '%')
            ->orwhere('patient_phone', 'like', '%' . $request->search . '%');
        }


        $appiontments = $appiontments->with('doctor')->paginate(15)->withQueryString();


        // $appiontments = Appointment::with('doctor')->paginate(15);

        return view('admin.pages.appointment.index', compact('appiontments', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
        $statuses = \App\Enums\AppointmentEnums::class;
        $doctors = Doctor::all();

        return view('admin.pages.appointment.edit', compact("appointment", "doctors", "statuses"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $appointment = Appointment::findOrFail($id);

        $validated = $request->validate([
        'appointment_date' => 'required|date',
        'doctor_id' => 'required|exists:doctors,id',
        'status' => 'required|string',
        ]);

        $appointment->update([
        'appointment_date' => \Carbon\Carbon::parse($validated['appointment_date']),
        'doctor_id' => $validated['doctor_id'],
        'status' => $validated['status'],
        ]);
        return to_route('admin.appointment.index')->with('success', "Appointment updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
        $appointment->delete();
        return to_route("admin.appointment.index")->with('success', "Appointment Deleted Successfully");
    }
}
