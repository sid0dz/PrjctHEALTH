@extends('layouts.parentLayout')
@section('sidebar')

        <!-- Sidebar -->
        <ul  id="sidbr"
        class="navbar-nav sidebar sidebar-dark accordion  d-print-none"
        style="background-image: linear-gradient(180deg, {{App\Clconfig::first()->debDegr}} 10%, {{App\Clconfig::first()->finDegr}} 100%);"

        id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
                <div class="sidebar-brand-icon ml-2">
				<img src="{{asset('logoAlt.png')}}" width="60">	
				
					</div>
                <div class="sidebar-brand-text mx-2 mr-1">{{App\Clconfig::first()->sitename}}
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('dashboard')}}">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Accueil</span></a>
            </li>

            

            <!-- Nav Item - Pages Collapse Menu -->
           

            <li class="nav-item">
                <a class="nav-link collapsed" href="/show_users" ata-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>
                    <span>Afficher les utilisateur</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/admconfig" ata-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-wrench"></i>
                    <span>Configurer site</span>
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
                        <h6 class="collapse-header">{{App\Clconfig::first()->sitename}}</h6>
                        <a class="collapse-item" >{{App\Clconfig::first()->siteadress}}</a>
                        <a class="collapse-item">{{App\Clconfig::first()->siteemail}}</a>
                        <a class="collapse-item">{{App\Clconfig::first()->sitenumber}}</a>    
                        <a class="collapse-item" >{{App\Clconfig::first()->siteadress2}}</a>

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
                <font class="m-0 font-weight-bold text-primary">Bonjour {{Auth::User()->lname}}</font>
       </div>
            <div class="card-body">
                <div class="table-responsive">
				<h2 class="ml-2"> </h2>
                <div class="card-body">
                    <div class="table" id="tabledata">
                       

                    </div>
                </div>





        <!-- End of Admin dashboard-->
@endsection







