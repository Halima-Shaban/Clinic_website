@extends('admin.layouts.master')

@section('title','Edit Doctor')

@section("admin_content")


<div class="container mt-5 content-wrapper">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Doctor</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.doctor.update', $doctor->id) }}" method="POST"  enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Doctor Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name',$doctor->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{old('email',$doctor->email)  }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone',$doctor->phone)  }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3" required>{{ old('address',$doctor->address)  }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Major</label>
                    <select name="major_id" class="form-control" required>
                        @foreach($majors as $major)
                            <option value="{{ $major->id }}" {{ $doctor->major_id == $major->id ? 'selected' : '' }}>
                                {{ $major->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Doctor Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <x-alert key="image"/>
                </div>

                  <div class="mb-3">
                    <img src="{{$doctor->imgUrl() }}" alt="{{$doctor->image }}">

                  </div>


                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.doctor.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>

                        
                        <button type="submit" class="btn btn-success">
                            Update Doctor
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
