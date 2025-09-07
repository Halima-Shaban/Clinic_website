@extends('admin.layouts.master')

@section('title','Create Doctor')

@section("admin_content")


<div class="container mt-5 content-wrapper">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add Doctor</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data" novalidate >
                @csrf

                <div class="mb-3">
                    <label class="form-label">Doctor Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name',$doctor->name)}}" required>
                    <x-alert key="name"/>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{old('email',$doctor->email)}}" required>
                    <x-alert key="email"/>

                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{old('phone',$doctor->phone)}} " required>
                    <x-alert key="phone"/>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input value="{{old('address',$doctor->address)}}"  name="address" class="form-control" rows="3" required>
                    <x-alert key="address"/>
                </div>

                
                <div class="mb-3">
                    <label class="form-label">Major</label>
                    <select name="major_id" class="form-control" required>
                        @foreach($majors as $major)
                            <option value="{{ $major->id }}">{{ $major->name }}</option>
                        @endforeach
                    </select>
                    <x-alert key="major_id"/>
              
                </div>


                 <div class="mb-3">
                    <label class="form-label">Doctor Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <x-alert key="image"/>
                </div>

               

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.doctor.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>
                  
                    <button type="submit" class="btn btn-success">
                        Add Doctor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
