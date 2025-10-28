@extends('admin.layouts.master')

@section('title', 'Appointments')

@section('admin_content')
    <div class="content-wrapper">
        <!-- Header Section -->
        <div class="appointments-header">
            <h1 class="appointments-title">Appointments</h1>
            <a href="{{ route('admin.appointment.create') }}" class="new-appointment-btn bg-success">
                New Appointment
            </a>
        </div>

        <div class="appointments-table-container">

            @if (session('success'))
                <div class="alert alert-success text-center mt-5">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Search Section -->

            <form action="{{ route('admin.appointment.index') }}" method="GET">
                <div class="search-container">
                    <div class="search-box">
                        <input type="text" name="search" class="form-control" placeholder="Search appointments...">
                        <a href="{{ route('admin.appointment.index') }}" class="bg-danger">Rset</a>
                        <button type="submit" class="bg-success">

                            <i class="fas fa-search search-icon"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Table -->
            <table class="appointments-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="action-column">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($appiontments as $appointment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $appointment->patient_name }}</td>
                            <td>{{ $appointment->patient_email }}</td>
                            <td>{{ $appointment->patient_phone }}</td>
                            <td>DR.{{ $appointment->doctor->name ?? 'N/A' }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                            <td>
                                {{-- <td>{{ $loop->iteration }}</td>
                            <td>{{ $appointment->patient_name }}</td>
                            <td>{{ $appointment->patient_email }}</td>
                            <td>{{ $appointment->patient_phone }}</td>
                            <td>{{ $appointment->doctor->name ?? 'N/A' }}</td>
                            <td>{{ $appointment->appointment_date->format('Y-m-d H:i') }}</td>
                            <td> --}}
                                @if ($appointment->status == $statuses::PENDING->value)
                            <td> <span class="badge bg-warning">Pending</span></td>
                        @elseif($appointment->status == $statuses::CONFIRMED->value)
                            <td> <span class="badge bg-success">Confirmed</span></td>
                        @elseif($appointment->status == $statuses::SHEDULED->value)
                            <td> <span class="badge bg-amber-950">SHEDULED</span></td>
                        @else
                            <td> <span class="badge bg-danger">Canceled</span></td>
                    @endif
                    </td>
                    <td>
                        <div class="action-buttons">
                            <a href="" class="action-btn btn-view" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.appointment.edit', $appointment->id) }}" class="action-btn btn-edit"
                                title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.appointment.destroy', $appointment->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="action-btn btn-delete" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    </tr>

                @empty
                    <tr>
                        <td class="text-center">No Appointment Found</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div class="m-2 p-2 d-flex justify-content-center">
            {{ $appiontments->links() }};
        </div>
    </div>
@endsection
