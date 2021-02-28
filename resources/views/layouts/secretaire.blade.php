@extends('layouts.parentLayout')
@section('sidebar')

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion"
         style="background-image: linear-gradient(180deg, {{App\Clconfig::first()->debDegr}} 10%, {{App\Clconfig::first()->finDegr}} 100%);
        " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            @php $url = url()->current(); @endphp
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

           

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="/show_patients" 
                    >
                    <i class="fas fa-fw fa-hospital-user"></i>
                    <span>Gerer les patients</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/newRDV/0" 
                    >
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Carnet de rendez-vous</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div>

            </li>            <li class="nav-item">
                <a class="nav-link collapsed" href="/dmrdv" 
                    >
                    <i class="fas fa-fw fa-user-clock"></i>
                    <span>Rendez-vous en attente</span>
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
            <!-- Contentof Secretaire dashboard -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Bonjour {{Auth::user()->lname}}</h1>
                    
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Medecin disponible</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('users')->where('role', '=',"1")
                                            ->get())}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Patient enregistré</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('patients')
                                            ->get())}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                           Rendez-vous aujourd'hui</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('rdvs')->where('date','=',date('Y-m-d'))
                                            ->get())}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Rendez-vous en attente</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('dmrdvs')->get())}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Rapport de la semaine</h6>
                            <div class="dropdown no-arrow">
                               
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Patient par departement</h6>
                            <div class="dropdown no-arrow">
                               
                               
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="tab">
                            <button class="tablinks" id="char1" onclick="openCity(event, 'London')">Par jour</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Par mois</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Par année</button>
                          </div>
                          
                          <!-- Tab content -->
                          <div id="London" class="tabcontent">
                            <canvas id="myChart2" width="610" height="520" style="display: block; width: 305px; height: 245px;"></canvas>
                        </div>
                          
                          <div id="Paris" class="tabcontent">       
                        <canvas id="myChart3" width="610" height="520" style="display: block; width: 305px; height: 245px;"></canvas>

                          </div>
                          
                          <div id="Tokyo" class="tabcontent">

                            <canvas id="myChart4" width="610" height="520" style="display: block; width: 305px; height: 245px;"></canvas>

                          </div>
                            <div class="mt-4 mb-2 text-center small">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['{{date('d',strtotime("-6 days"))}}', '{{date('d',strtotime("-5 days"))}}', '{{date('d',strtotime("-4 days"))}}', '{{date('d',strtotime("-3 days"))}}', '{{date('d',strtotime("-2 days"))}}', '{{date('d',strtotime("-1 days"))}}', '{{date('d')}}'],
        datasets: [{
            label: 'Rendez-vous cette journée ',
            borderColor: '{{App\Clconfig::first()->debDegr}}',
            data: [5, 10, 5, 0, 20, 30, 10]
        }]
    },

    // Configuration options go here
    options: {}
});

ctx = document.getElementById('myChart2').getContext('2d');
 new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["General", "Dermathologie", "Cardiologie", "Dentiste", "Gynecologie"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [12,1,5,10,5]
      }]
    },
    options: {

    }
});

ctx = document.getElementById('myChart3').getContext('2d');
 new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["General", "Dermathologie", "Cardiologie", "Dentiste", "Gynecologie"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [120,38,57,43,69]
      }]
    },
    options: {

    }
});

ctx = document.getElementById('myChart4').getContext('2d');
 new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["General", "Dermathologie", "Cardiologie", "Dentiste", "Gynecologie"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [1340,470,680,1000,680]
      }]
    },
    options: {

    }
});












function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("char1").click();

            </script>
            <!-- Page level custom scripts -->
    
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <script src="vendor/chart.js/Chart.min.js"></script>
        
    
            <!-- End of Admin dashboard-->
    @endsection
    
    
    
    
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>

    
    
    
    






