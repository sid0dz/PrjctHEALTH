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
                <a class="nav-link" href="dashboard">
                    
                    <span>Dashboard Secretaire</span></a>
            </li>

           

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="/show_patients" 
                    >
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Afficher les patients</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" 
                    >
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Afficher carnet de rendez-vous</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-info"></i>
                    <span>Infos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clinique Chifaa</h6>
                        <a class="collapse-item" >29 Rue Colonel Lotfi</a>
                        <a class="collapse-item" >Quartier de la liberté.</a>
                        <a class="collapse-item">Contact@Chifaa.cl</a>
                        <a class="collapse-item">043-49-50-67</a>
                    </div>
                </div>
            </li>


        </ul>
        <!-- End of Sidebar -->
		@endsection







