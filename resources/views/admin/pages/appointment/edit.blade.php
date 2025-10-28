@extends('admin.layouts.master')

@section('title', 'Edit Appointment')

@section('admin_content')

    <div class="container mt-5 content-wrapper">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Appointment</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.appointment.update', $appointment->id) }}" method="POST" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Patient Name</label>
                        <input type="text" name="patient_name" class="form-control"
                            value="{{ old('patient_name', $appointment->patient_name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Patient Email</label>
                        <input type="email" name="patient_email" class="form-control"
                            value="{{ old('patient_email', $appointment->patient_email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Patient Phone</label>
                        <input type="text" name="patient_phone" class="form-control"
                            value="{{ old('patient_phone', $appointment->patient_phone) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Doctor</label>
                        <select name="doctor_id" class="form-control" required>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}"
                                    {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                                    {{ $doctor->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Appointment Date & Time</label>
                        <input type="datetime-local" name="appointment_date" class="form-control"
                            value="{{ old('appointment_date', $appointment->appointment_date) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="{{ $statuses::PENDING }}"
                                {{ $appointment->status == $statuses::PENDING ? 'selected' : '' }}>Pending
                            </option>
                            <option value="{{ $statuses::CONFIRMED }}"
                                {{ $appointment->status == $statuses::CONFIRMED ? 'selected' : '' }}>
                                Confirmed</option>
                            <option value="{{ $statuses::CANCELED }}"
                                {{ $appointment->status == $statuses::CANCELED ? 'selected' : '' }}>
                                Canceled</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.appointment.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success">Update Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
