@extends('layouts.parentLayout')
@section('sidebar')

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion  d-print-none" 
        style="background-image: linear-gradient(180deg, {{App\Clconfig::first()->debDegr}} 10%, {{App\Clconfig::first()->finDegr}} 100%);

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
                <a class="nav-link collapsed" href="/show_patients" ata-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                     <i class="fas fa-fw fa-hospital-user"></i>
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
                <font class="m-0 font-weight-bold text-primary">Bonjour {{Auth::User()->lname}}, Voici votre carnet de Rendez-vous d'aujord'hui</font>

            </div>
            <div class="card-body">
                <div class="table-responsive">
				<h2 class="ml-2"> </h2>
                <div class="card-body">
                    <div class="table" id="tabledata">
                       

                    </div>
                </div>


                <div class="toast" role="alert" style="position: absolute; top: 0; right: 0;" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header" style="background-color:rgb(219, 255, 190)">
                        
                
                      <strong class="mr-auto">Confirmé</strong>
                      <small class="text-muted"></small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="toast-body">
                      Rendez-vous a été supprimé
                    </div>
                  </div>
                  <div class="modal fade" id="confirmDeleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Veuillez confirmer : </h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                          </div>
                          <div class="modal-body">Voulez vous vraiment supprimer ce rendez-vous ? </div>
                          <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" id="dsm" data-dismiss="modal">Annuler</button>
                              <a class="btn btn-danger" id="confirmdeletebutton" onclick="confirm(1)">Supprimer</a>
                          </div>
                      </div>
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
    function changemodel (rdvid){
var confr = document.getElementById("confirmdeletebutton");
confr.setAttribute('onclick',"confirmdelete("+rdvid+")");        

}
function confirmdelete(rdvid){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
$('.toast').toast({
'autohide': true,
'delay':  5000
});

$('.toast').toast('show');
loadTable();
}
};
xhttp.open("GET", "/deleteRdv/"+rdvid, true);
xhttp.send();
document.getElementById("dsm").click();


}
    
    
    </script>


        <!-- End of Admin dashboard-->
@endsection







