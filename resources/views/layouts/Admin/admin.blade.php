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
            <!-- Contentof Secretaire dashboard -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Bonjour {{Auth::user()->lname}}</h1>
                    <a href="/genrap" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generer rapport</a>
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
                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Prescriptions</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart7"></canvas>
                        </div>
                        <hr>
                        Styling for the bar chart can be found in the
                        
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Rendez-vous</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart8"></canvas>
                        </div>
                        <hr>
                        Styling for the bar chart can be found in the
                        
                    </div>
                </div>
            </div>

           


            <script>

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['{{date('d',strtotime("-6 days"))}}', '{{date('d',strtotime("-5 days"))}}', '{{date('d',strtotime("-4 days"))}}', '{{date('d',strtotime("-3 days"))}}', '{{date('d',strtotime("-2 days"))}}', '{{date('d',strtotime("-1 days"))}}', '{{date('d')}}'],
        datasets: [{
          backgroundColor: "#4e73df",

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


var ctx = document.getElementById("myBarChart7");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin" , "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"],
    datasets: [{
      label: "nbr",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [{{App\Prescription::whereBetween('date',['2021-01-01','2021-01-31'])->count()}}, {{App\Prescription::whereBetween('date',['2021-02-01','2021-02-29'])->count()}}, {{App\Prescription::whereBetween('date',['2021-03-01','2021-03-31'])->count()}}, {{App\Prescription::whereBetween('date',['2021-04-01','2021-04-31'])->count()}}, {{App\Prescription::whereBetween('date',['2021-05-01','2021-05-31'])->count()}}, {{App\Prescription::whereBetween('date',['2021-06-01','2021-06-31'])->count()}}, {{App\Prescription::whereBetween('date',['2021-07-01','2021-07-31'])->count()}} , {{App\Prescription::whereBetween('date',['2021-08-01','2021-08-31'])->count()}} , {{App\Prescription::whereBetween('date',['2021-09-01','2021-09-31'])->count()}} , {{App\Prescription::whereBetween('date',['2021-10-01','2021-10-31'])->count()}}, {{App\Prescription::whereBetween('date',['2021-11-01','2021-11-31'])->count()}} , {{App\Prescription::whereBetween('date',['2021-12-01','2021-12-31'])->count()}}],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 50,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'prescriptions' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel  + number_format(tooltipItem.yLabel) + ': Prescriptions';
        }
      }
    },
  }
});

var ctx = document.getElementById("myBarChart8");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin" , "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"],
    datasets: [{
      label: "nbr",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [{{App\Rdv::whereBetween('date',['2021-01-01','2021-01-31'])->count()}}, {{App\Rdv::whereBetween('date',['2021-02-01','2021-02-29'])->count()}}, {{App\Rdv::whereBetween('date',['2021-03-01','2021-03-31'])->count()}}, {{App\Rdv::whereBetween('date',['2021-04-01','2021-04-31'])->count()}}, {{App\Rdv::whereBetween('date',['2021-05-01','2021-05-31'])->count()}}, {{App\Rdv::whereBetween('date',['2021-06-01','2021-06-31'])->count()}}, {{App\Rdv::whereBetween('date',['2021-07-01','2021-07-31'])->count()}} , {{App\Rdv::whereBetween('date',['2021-08-01','2021-08-31'])->count()}} , {{App\Rdv::whereBetween('date',['2021-09-01','2021-09-31'])->count()}} , {{App\Rdv::whereBetween('date',['2021-10-01','2021-10-31'])->count()}}, {{App\Rdv::whereBetween('date',['2021-11-01','2021-11-31'])->count()}} , {{App\Rdv::whereBetween('date',['2021-12-01','2021-12-31'])->count()}}],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 50,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'RDV' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel  + number_format(tooltipItem.yLabel) + ': RDV';
        }
      }
    },
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

    
    
    
    






