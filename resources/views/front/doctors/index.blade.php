@extends ('layouts.master')
@section('title', 'Doctor')
@section('front.content')
    <div class="container my-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
            </ol>
        </nav>
        <h2 class="h1 fw-bold text-center mb-4"> Doctors</h2>
        <div class="row g-4 justify-content-center">

            @forelse ($doctors as $doctor)
                <div class="col-md-4 col-sm-6">

                    <div class="card h-100 text-center shadow-sm border-0">
                        <img src="{{ $doctor->imgUrl() }}" class="card-img-top rounded-circle mx-auto mt-3" alt="#"
                            style="width:120px;height:120px;object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $doctor->name }}</h5>
                            <p class="text-muted">{{ $doctor->major->name }}</p>
                            <a href="{{ route('front.doctors.show', $doctor->id) }}"
                                class="btn btn-outline-primary card-button">Book an
                                appointment</a>

                        </div>
                    </div>


                </div>
            @empty
                <p class="tex_-center">No Doctors In This Major</p>
            @endforelse
        </div>
        <nav class="mt-5" aria-label="navigation">
            <div class="pagination justify-content-center"> {{ $doctors->links() }} </div>



            {{-- <ul class="pagination justify-content-center"> --}}
            {{-- <li class="page-item">
                    <a class="page-link page-prev" href="#" aria-label="Previous">
                        <span aria-hidden="true">
                            < </span>
                    </a>
                </li> --}}
            {{-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
            {{-- <li class="page-item">
                    <a class="page-link page-next" href="#" aria-label="Next">
                        <span aria-hidden="true"> > </span>
                    </a>
                </li> --}}
            {{-- </ul> --}}
        </nav>
    </div>
@endsection
