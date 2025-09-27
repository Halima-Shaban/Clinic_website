 @extends('admin.layouts.master')

 @section('title', 'Majors')

 @section('admin_content')
     <!-- Content Wrapper -->
     <div class="content-wrapper">
         <!-- Header Section -->
         <div class="doctors-header">
             <h1 class="doctors-title">Majors</h1>
             <a href="{{ route('admin.major.create') }}" class="new-doctor-btn">
                 New Major
             </a>
         </div>

         <!-- Doctors Table Container -->
         <div class="doctors-table-container">

             @if (session('success'))
                 <div class="alert alert-success text-center mt-5">
                     {{ session('success') }}
                 </div>
             @endif
             <!-- Search Section -->
             <div class="search-container">
                 <form method="GET" action="{{ route('admin.major.index') }}">
                     <div class="search-box">
                         <input type="text" name="search" class="form-control" placeholder="Search by name"
                             value="{{ request('search') }}">
                         <i class="fas fa-search search-icon"></i>
                     </div>
                 </form>
             </div>

             <!-- Table -->
             <table class="doctors-table">
                 <thead>
                     <tr>
                         <th class="id-column">ID</th>
                         <th class="image-column">Image</th>
                         <th class="name-column">Name</th>
                         <th class="major-column">Doctor Count</th>
                         <th class="phone-column">Created_at</th>
                         <th class="action-column">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @forelse ($majors as $major)
                         <tr>
                             <td class="id-column">{{ $loop->iteration }}</td>
                             <td class="image-column">
                                 <img src="{{ $major->imgUrl() }}" alt="Mr. Malachi Denesik" class="doctor-image">
                             </td>
                             <td class="name-column">
                                 <div class="doctor-name">{{ $major->name }}</div>
                             </td>

                             <td class="phone-column">
                                 <div class="doctor-phone">{{ rand(1, 10) }}</div>
                             </td>
                             <td class="phone-column">
                                 <div class="doctor-phone">{{ $major->created_at }}</div>
                             </td>
                             <td class="action-column">
                                 <div class="action-buttons">
                                     <a href="{{ route('admin.major.show', $major->id) }}" class="action-btn btn-view"
                                         title="View">
                                         <i class="fas fa-eye"></i>
                                     </a>
                                     <a href="{{ route('admin.major.edit', $major->slug) }}" class="action-btn btn-edit"
                                         title="Edit">
                                         <i class="fas fa-edit"></i>
                                     </a>
                                     <form action="{{ route('admin.major.destroy', $major->id) }}" method="POST">
                                         @method('DELETE')
                                         @csrf
                                         <button class="action-btn btn-delete" title="Delete">
                                             <i class="fas fa-trash"></i>
                                         </button>
                                     </form>
                                 </div>
                             </td>
                         </tr>
                     @empty
                     @endforelse


                 </tbody>
             </table>
         </div>
     </div>

     <!-- Pagination -->
     <div class="mt-3">
         {{ $majors->appends(['search' => request('search')])->links() }}
     </div>
     </div>
     </div>


 @endsection
