 @extends('admin.layouts.master')

@section('title','Doctors')

@section("admin_content")
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Header Section -->
            <div class="doctors-header">
                <h1 class="doctors-title">Doctors</h1>
                <a href="{{route('admin.doctor.create')}}" class="new-doctor-btn">
                    New Doctor
                </a>
            </div>
            
            <!-- Doctors Table Container -->
            <div class="doctors-table-container">

                 @if (session('success'))
            <div class="alert alert-success text-center mt-5">
                {{session('success')}}
            </div>
                
            @endif
                <!-- Search Section -->
                <div class="search-container">
                    <div class="search-box">
                        <input type="text" class="form-control" placeholder="Search">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                </div>
                
                <!-- Table -->
                <table class="doctors-table">
                    <thead>
                        <tr>
                            <th class="id-column">ID</th>
                            <th class="image-column">Image</th>
                            <th class="name-column">Name</th>
                            <th class="major-column">Major</th>
                            <th class="phone-column">Phone</th>
                            <th class="action-column">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor )
                            
                       
                        <tr>
                            <td class="id-column">{{$loop->iteration}}</td>
                            <td class="image-column">
                                <img src="{{$doctor->image}}" alt="Mr. Malachi Denesik" class="doctor-image">
                            </td>
                            <td class="name-column">
                                <div class="doctor-name">{{$doctor->name}}</div>
                            </td>
                            <td class="major-column">
                                <div class="doctor-major">{{$doctor->major->title}}</div>
                            </td>
                            <td class="phone-column">
                                <div class="doctor-phone">{{$doctor->phone ?? 'N/A'}}</div>
                            </td>
                            <td class="action-column">
                                <div class="action-buttons">
                                    <a href="" class="action-btn btn-view" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('admin.doctor.edit', $doctor->id)}}" class="action-btn btn-edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('admin.doctor.destroy',$doctor->id)}}" method="POST">
                                          @method('DELETE')
                                        @csrf
                                        <button class="action-btn btn-delete" title="Delete">
<i class="fa-solid fa-pen-to-square"></i>                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                         @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

        @endsection