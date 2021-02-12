@extends('layouts.medecin')
@section('content')


<div class="row d-flex justify-content-center">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body"><a href="/newRDV/{{$patient->id}}/{{Auth::id()}}/">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Prendre Rendez-vous</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
					</div>
				</div></a>
			</div>
		</div>
	</div>
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body"><a href="{{ route('orientation',['id'=>$patient->id])}}">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
							</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">Rediger Lettre d'orientation</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-directions fa-2x text-gray-300"></i>
					</div>
				</div></a>
			</div>
		</div>
	</div>
	<form  id="pressc" action="/newPrescription"  role="form"  method="post" > 
		<input type="hidden" name="patid" value="{{$patient->id}}"/>
		@csrf
	 </form>
	<!-- Earnings (Monthly) Card Example --><div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
									<a  href="javascript:$('#pressc').submit();" >
										<div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rediger Prescriptions</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-pills fa-2x text-gray-300"></i>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                        </div>
	
</div>
<div class="card shadow mb-4">

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
								<br>			
						@endif		
								
								</div>
                                </div>

							</div>
							@if(Auth::user()->role == 2)
							<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#rdvs" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="rdvs">
                                    <h6 class="m-0 font-weight-bold text-primary">Rendez-vous</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="rdvs" style="">
                                    <div class="card-body">
										<table class="table table-hover">
											<tr>
												<th>Date</th><th>Docteur</th> <th>Specialité </th>
											</tr>
												<td>21-12-2012</td>
												<td>Jalma Rachida</td>
											
												<td>General</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Prendre Rendez-vous</a>
										<br>			
									</div>
                                </div>
                            </div>
							@elseif(Auth::user()->role == 1)
							<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#maladie" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="maladie">
                                    <h6 class="m-0 font-weight-bold text-primary">Maladie</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="maladie" style="">
                                    <div class="card-body">
										<table class="table table-hover" id="maladtable">
											<tr>
												<th>Date</th><th>Maladie</th> <th>Medecin</th>
											</tr>
											<tr>	<td>21-12-2020</td>
												<td>Hypertension</td>
												<td>Medrar ouassini</td>
											</tr>
											<tr>	<td>02-04-2018</td>
												<td>Grippe virale</td>
												<td>Souadji wissem</td>
											</tr>
										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newMaladie"> <i class="fas fa-plus mr-2"></i>Ajouter une maladie</a>
										<br>			
									</div>
                                </div>
                            </div>		
					
							<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#allergie" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="allergie">
                                    <h6 class="m-0 font-weight-bold text-primary">Allergie</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="allergie" style="">
                                    <div class="card-body">
										<table class="table table-hover" id="allergieTable">
											<tr>
												<th>Date</th><th>Type d'allergie</th> <th>Medecin</th>
											</tr>
												<td>24-04-2017</td>
												<td>Allergie au Pollen</td>
											
												<td>Harrar hichem</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newAllergie"> <i class="fas fa-plus mr-2"></i>Ajouter Allergie</a>
										<br>			
									</div>
                                </div>
                            </div>			
					
							<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#commentaire" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="commentaire">
                                    <h6 class="m-0 font-weight-bold text-primary">Commentaires</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="commentaire" style="">
                                    <div class="card-body">
										<table class="table table-hover" id="CommentaireTable">
											<tr>
												<th>Date</th><th>Note</th> <th>Medecin</th>
											</tr>
												<td>24-04-2017</td>
												<td>Risque d'essouflement en reaction allergique</td>
											
												<td>Harrar Hichem</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newCommentaire"> <i class="fas fa-plus mr-2"></i>Ajouter Commentaire</a>
										<br>			
									</div>
                                </div>
                            </div>		
							<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#imgr" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="imgr">
                                    <h6 class="m-0 font-weight-bold text-primary">Imagerie</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="imgr" style="">
                                    <div class="card-body">
										<table class="table table-hover">
											<tr>
												<th>Date</th><th>Type</th> <th>Medecin</th>
											</tr>
												<td>21-12-2012</td>
												<td>Thorax avant-gauche</td>
											
												<td>Souadji wissem</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Ajouter une Imagerie</a>
										<br>			
									</div>
                                </div>
							</div>
							<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#orientation" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="orientation">
                                    <h6 class="m-0 font-weight-bold text-primary">Lettre d'Orientation</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="orientation" style="">
                                    <div class="card-body">
										<table class="table table-hover">
											<tr>
												<th>Date</th><th>Type</th> <th>Medecin</th>
											</tr>
												<td>21-12-2012</td>
												<td>Thorax avant-gauche</td>
											
												<td>Souadji wissem</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="{{ route('orientation',['id'=>$patient->id])}}"> 
											<i class="fas fa-plus mr-2"></i>Ajouter Lettre d'Orientation</a>
										<br>			
									</div>
                                </div>
                                
                            </div>
				
							
							

<!-- Maladie Model-->
<div class="modal fade" id="newMaladie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle Maladie : </h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body"><input type="text" class="form-control bg-light border-1 small" placeholder="Maladie..." id="maladText"/> </div>
		<div class="modal-footer">
			<button class="btn btn-secondary" type="button" id="dsm" data-dismiss="modal">Annuler</button>
			<a class="btn btn-primary" onclick="setNew(1)">Ajouter Maladie</a>
		</div>
	</div>
</div>
</div>
<!--End of Maladie model --->

<!-- Allergie Model-->
<div class="modal fade" id="newAllergie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle allergie : </h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body"><input type="text" class="form-control bg-light border-1 small" placeholder="Allergie..." id="allergText"/> </div>
		<div class="modal-footer">
			<button class="btn btn-secondary" type="button" id="dsm2" data-dismiss="modal">Annuler</button>
			<a class="btn btn-primary" onclick="setNew(2)">Ajouter Allergie</a>
		</div>
	</div>
</div>
</div>
<!--End of Allergie model --->

<!-- Commentaire Model-->
<div class="modal fade" id="newCommentaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau commentaire : </h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body"><input type="text" class="form-control bg-light border-1 small" placeholder="Commentaire..." id="commText"/> </div>
		<div class="modal-footer">
			<button class="btn btn-secondary" type="button" id="dsm3" data-dismiss="modal">Annuler</button>
			<a class="btn btn-primary" onclick="setNew(3)">Ajouter Commentaire</a>
		</div>
	</div>
</div>
</div>
<!--End of Commentaire model --->

<script>
	function setNew(op) {
	  var xhttp = new XMLHttpRequest();
var tbl;
var str;
	  if (op==1) {str = document.getElementById("maladText").value;
	  			 tbl = document.getElementById("maladtable");}

	  if (op==2){  str = document.getElementById("allergText").value;
	   tbl = document.getElementById("allergieTable");
	}

	  if (op==3) { str = document.getElementById("commText").value;
	  var tbl = document.getElementById("CommentaireTable");
	  }
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var response= document.createElement('tr');
			response.innerHTML = this.responseText;
		   tbl.appendChild(response);
		   }
	  };
	  if (op==1)	  xhttp.open("GET", "/set/maladie/{{$patient->id}}/{{Auth::user()->id}}/"+str, true);
	  if (op==2)	  xhttp.open("GET", "/set/allergie/{{$patient->id}}/{{Auth::user()->id}}/"+str, true);
	  if (op==3)	  xhttp.open("GET", "/set/commentaire/{{$patient->id}}/{{Auth::user()->id}}/"+str, true);
	  xhttp.send();
	  document.getElementById("dsm").click();
	  document.getElementById("dsm2").click();
	  document.getElementById("dsm3").click();
	
	}
	
	</script>
					
				
							@endif
					
@endsection