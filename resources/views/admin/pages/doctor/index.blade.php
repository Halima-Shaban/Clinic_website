 @extends('admin.layouts.master')

@section('title','Doctors')

@section("admin_content")
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Header Section -->
            <div class="doctors-header">
                <h1 class="doctors-title">Doctors</h1>
                <button class="new-doctor-btn">
                    New Doctor
                </button>
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
                                        <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                         @endforeach
                        <tr>
                            <td class="id-column">2</td>
                            <td class="image-column">
                                <img src="img/jose.jpg" alt="Jose King" class="doctor-image">
                            </td>
                            <td class="name-column">
                                <div class="doctor-name">Jose King</div>
                            </td>
                            <td class="major-column">
                                <div class="doctor-major">Surgical Technology</div>
                            </td>
                            <td class="phone-column">
                                <div class="doctor-phone">1-678-616-4455</div>
                            </td>
                            <td class="action-column">
                                <div class="action-buttons">
                                    <button class="action-btn btn-view" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn btn-edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn btn-delete" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td class="id-column">9</td>
                            <td class="image-column">
                                <img src="img/luther.jpg" alt="Luther Schmidt" class="doctor-image">
                            </td>
                            <td class="name-column">
                                <div class="doctor-name">Luther Schmidt</div>
                            </td>
                            <td class="major-column">
                                <div class="doctor-major">Nursing</div>
                            </td>
                            <td class="phone-column">
                                <div class="doctor-phone">847-669-3197</div>
                            </td>
                            <td class="action-column">
                                <div class="action-buttons">
                                    <button class="action-btn btn-view" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn btn-edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn btn-delete" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @endsection