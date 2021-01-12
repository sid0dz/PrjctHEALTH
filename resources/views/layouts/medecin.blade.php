@extends('layouts.parentLayout')
@section('sidebar')

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    </div>
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    
                    <span>Dashboard Medecin</span></a>
            </li>

            

            <!-- Nav Item - Pages Collapse Menu -->
           

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" ata-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                
                    <span>Faire une préscription </span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">                   
                    <span>Faire une lettre d'orientation</span>
                </a>
               
            </li>
             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    
                    <span>Prendre un rendez-vous</span>
                </a>
            </li>  

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
		@endsection
@section('content')

        <!-- Content of Admin dashboard -->

				<h2> Yes, Medecin Dashboard content here!</h2>

        <!-- End of Admin dashboard-->
@endsection







