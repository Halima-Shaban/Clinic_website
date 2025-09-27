@extends('layouts.master')
@section('title', 'Doctors')
@section('front.content')

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="{{ route('front.doctors.index') }}">doctors</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $doctor->name }}
                </li>
            </ol>
        </nav>
        <div class="d-flex flex-column gap-3 details-card doctor-details">
            <div class="details d-flex gap-2 align-items-center">
                <img src="{{ $doctor->imgUrl() }}" alt="doctor" class="img-fluid rounded-circle" height="150"
                    width="150" />
                <div class="details-info d-flex flex-column gap-3">
                    <h4 class="card-title fw-bold">{{ $doctor->name }}</h4>
                    <h6 class="card-title fw-bold">
                        {{ $doctor->address }}
                    </h6>
                </div>
            </div>
            <hr />
            <form class="form" method="post" action="{{ route('front.appointment.store') }}">
                @csrf
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" name="patient_name" class="form-control" id="name" required />
                        <x-alert key="patient_name" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="phone">Phone</label>
                        <input type="tel" name="patient_phone" class="form-control" id="phone" required />
                        <x-alert key="patient_phone" />

                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" name="patient_email" class="form-control" id="email" required />
                        <x-alert key="patient_email" />

                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="appointment_date">Appointment Date</label>
                        <input type="datetime-local" name="appointment_date" class="form-control" id="appointment_date"
                            required />
                        <x-alert key="appointment_date" />

                    </div>
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <x-alert key="doctor_id" />

                </div>
                <button type="submit" class="btn btn-primary">
                    Confirm Booking
                </button>
            </form>
        </div>
    </div>

@endsection
