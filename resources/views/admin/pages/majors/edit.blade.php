@extends('admin.layouts.master')

@section('title', 'Edit Major')

@section('admin_content')


    <div class="container mt-5 content-wrapper">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Major</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.major.update', $major->slug) }}" method="POST" enctype="multipart/form-data"
                    novalidate>
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Major Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $major->name) }}"
                            required>
                        <x-alert key="name" />
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Major Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        <x-alert key="image" />
                    </div>

                    <div class="mb-3">
                        <img src="{{ $major->imgUrl() }}" alt="{{ $major->image }}">

                    </div>



                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.major.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>

                        <button type="submit" class="btn btn-success">
                            Update Major
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
