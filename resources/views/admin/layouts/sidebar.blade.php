 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="#" class="brand-link">
         <img src="{{ asset('front/admin/img/AdminLTELogo.png') }}" alt="Clinic Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Clinic Dashboard</span>
     </a>
     <div class="sidebar">
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="{{ route('admin.dashbourd') }}" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.appointment.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-calendar-check"></i>
                         <p>Appointments</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.major.index') }}" class="nav-link">
                         <i class=" nav-icon fas fa-solid fa-list"></i>
                         <p>Majors</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.doctor.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-user-md"></i>
                         <p>Doctors</p>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>
