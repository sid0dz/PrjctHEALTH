@extends('layouts.parentLayout')
@section('sidebar')

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion  d-print-none" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    </div>
                <div class="sidebar-brand-text mx-3">Project Health</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    
                    <span>Accueil</span></a>
            </li>

            

            <!-- Nav Item - Pages Collapse Menu -->
           

            <li class="nav-item">
                <a class="nav-link collapsed" href="/show_patients" ata-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                
                    <span>Afficher les patients</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            
             <!-- Nav Item - Pages Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
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
@section('content')
    @yield('content')
        <!-- Contentof Admin dashboard -->

        <div class="card shadow mb-4 mr-2 ml-2">
            <div class="card-header">
                <font class="m-0 font-weight-bold text-primary">Bonjour {{Auth::User()->lname}}, Voici votre carnet de Rendez-vous d'aujord'hui</font>

            </div>
            <div class="card-body">
                <div class="table-responsive">
				<h2 class="ml-2"> </h2>
                <div class="card-body">
                    <div class="table" id="tabledata">
                       

                    </div>
                </div>
<script>

    function loadTable(){

        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('tabledata').innerHTML=this.responseText;
        
    }
  };
  xhttp.open("GET", "{{ url('tabledata', [ 0,Auth::User()->id,date('Y-m-d')]) }}", true);
  xhttp.send();


    }
    loadTable();


    
    
    </script>


        <!-- End of Admin dashboard-->
@endsection







