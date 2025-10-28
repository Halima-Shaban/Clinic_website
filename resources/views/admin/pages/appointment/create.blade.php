@extends('admin.layouts.master')

@section('title', 'Create Appointment')

@section('admin_content')

    <div class="container mt-5 content-wrapper">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Add Appointment</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.appointment.store') }}" method="POST" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Patient Name</label>
                        <input type="text" name="patient_name" class="form-control" value="{{ old('patient_name') }}"
                            required>
                        <x-alert key="patient_name" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Patient Email</label>
                        <input type="email" name="patient_email" class="form-control" value="{{ old('patient_email') }}"
                            required>
                        <x-alert key="patient_email" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Patient Phone</label>
                        <input type="text" name="patient_phone" class="form-control" value="{{ old('patient_phone') }}"
                            required>
                        <x-alert key="patient_phone" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Doctor</label>
                        <select name="doctor_id" class="form-control" required>
                            <option value="">Select Doctor</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                        <x-alert key="doctor_id" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Appointment Date & Time</label>
                        <input type="datetime-local" name="appointment_date" class="form-control"
                            value="{{ old('appointment_date') }}" required>
                        <x-alert key="appointment_date" />
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.appointment.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success">Add Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
