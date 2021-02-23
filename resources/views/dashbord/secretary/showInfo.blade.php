@extends('layouts.secretaire')
@section('content')



<div class="card shadow mb-4 ml-2 mr-2">

	<a href="#persinf" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="persinf">
		<h6 class="m-0 font-weight-bold text-primary">Informations Personelle</h6>
	</a>
	<div class="collapse" id="persinf" style="">
                                 
								<div class="card-body">
									<div class="row">
										<table class="table table-hover">
											
											<tr>
												<th scope="row">Numero de securité social</th>
												<td>{{$patient->npatient}}</td>
											</tr>
											<tr>
												<th scope="row">Nom</th>
												<td>{{$patient->name}}</td>
											</tr>
											
											<tr>
												<th scope="row">Date de naissance</th>
												<td>{{$patient->patient_birth_date}}</td>
											</tr>
											<tr>
												<th scope="row">Email</th>
												<td>{{$patient->email}}</td>
											</tr>
											<tr>
												<th scope="row">Telephone</th>
												<td>{{$patient->phone}}</td>
											</tr>
										</table>
                        </div>
								
					@if(Auth::user()->role == 2)
						<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-fw fa-wrench"></i> Editer informations</a>
                         <form action="{{route('patients.destroy',['patient'=>$patient->id])}}" method="post">
                         	{{csrf_field()}}
                         	{{method_field('DELETE')}}
                         	<button type="submit" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Archiver</span>
                                    </button>
                         </form>
						
								<br>			
						@endif		
								
								
								</div>
                                </div>

							</div>
                                <!-- Card Header - Accordion -->
								<div class="card shadow mb-4  mr-2 ml-2" >

									<a href="#maladie" class="d-block card-header py-3 " data-toggle="collapse" role="button" aria-expanded="true" aria-controls="maladie">
										<h6 class="m-0 font-weight-bold text-primary">Rendez-vous</h6>
									</a>
								<div class="collapse collapsed" style="" id="maladie">
									<div class="card-body">
										<table class="table table-hover" id="maladtable">
											<tr>
												<th>Date</th><th>Heure</th><th>Medecin</th> <th>Motif</th> <th> action </th>
											</tr>
										@foreach ($rdvs as $rdv)
											
									
											<tr>
												<td>{{$rdv->date}}</td>
												<td> 
													@if (strlen($rdv->heure) < 3) {{//this is love
													substr($rdv->heure,0,1)}}
													{{	(substr($rdv->heure,1,2)=='1')?":00":":30"
												}}
												@else
												{{substr($rdv->heure,0,2)}}
												{{(substr($rdv->heure,2,3)=='1')?":00":":30"
											}} 
												@endif
												


												</td>
												<td>{{$rdv->medecin??''}}</td>
												<td>{{$rdv->motif}}</td>
											<td>
												<div class="dropdown no-arrow ">
													<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Gerer <i class="fas fa-edit "></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
														<div class="dropdown-header">Voulez vous :</div>
														<a class="dropdown-item" href="#">Modifer</a>
														
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#" data-toggle="modal" onclick="changemodel({{$rdv->id}})" data-target="#confirmDeleteModel" >Supprimer</a>
													</div>
												</div>
											</td>
											
											</tr>	@endforeach
										</table>
	
			
										<a class="btn btn-primary float-right" href="{{url('/newRDV')}}/{{$patient->id}} "> 
											<i class="fas fa-plus mr-2"></i>Prendre rendez-vous</a>
										<br>			
									</div>
								</div>
							</div>		<!-- Card Header - Accordion -->
							<div class="card shadow mb-4  mr-2 ml-2" >

							<a href="#or" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="maladie">
								<h6 class="m-0 font-weight-bold text-primary">Lettres d'orientation</h6>
							</a>
						<div class="collapse" style="" id="or">
							<div class="card-body">
								<table class="table table-hover" id="or">
									<tr>
										<th>Date</th><th>Maladie</th> <th>Medecin</th>
									</tr>

								</table>

	
								<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newMaladie"> <i class="fas fa-plus mr-2"></i>Ajouter une maladie</a>
								<br>			
							</div>
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
					
					<div class="modal fade" id="confirmDeleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

}
};
xhttp.open("GET", "/deleteRdv/"+rdvid, true);
xhttp.send();
document.getElementById("dsm").click();


}

					</script>

@endsection