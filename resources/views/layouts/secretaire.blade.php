@extends('layouts.parentLayout')
@section('sidebar')

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3"> CLINIQUE MEDECAL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    
                    <span>Dashboard Secretaire</span></a>
            </li>

           

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="/dashbord/show_patients" 
                    >
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>renseigner un nouveau patient</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">                   
                    <span>Prendre un rendez-vous</span>
                </a>
               
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
		@endsection







