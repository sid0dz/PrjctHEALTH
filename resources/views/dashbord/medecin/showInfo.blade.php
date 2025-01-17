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
<div class="card shadow mb-4 mr-2 ml-2">

	<a href="#persinf" class="d-block card-header py-3 p-10 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="persinf">
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
												<td id="birth">{{$patient->patient_birth_date}}</td>
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
								
					
						<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-fw fa-wrench"></i> Editer informations</a>
                      
								<br>			
					
								
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

										</table>

			
										<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Prendre Rendez-vous</a>
										<br>			
									</div>
                                </div>
                            </div>
							@elseif(Auth::user()->role == 1)
							<div class="card shadow mb-4  mr-2 ml-2" >
                                <!-- Card Header - Accordion -->
                                <a href="#maladie" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="maladie">
                                    <h6 class="m-0 font-weight-bold text-primary">Maladie</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" style="" id="maladie">
                                    <div class="card-body">
										<table class="table table-hover" id="maladtable">
											<tr>
												<th>Date</th><th>Maladie</th> <th>Medecin</th>
											</tr>

										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newMaladie"> <i class="fas fa-plus mr-2"></i>Ajouter une maladie</a>
										<br>			
									</div>
                                </div>
                            </div>		
					
							<div class="card shadow mb-4  mr-2 ml-2">
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

											
										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newAllergie"> <i class="fas fa-plus mr-2"></i>Ajouter Allergie</a>
										<br>			
									</div>
                                </div>
                            </div>			
					
							<div class="card shadow mb-4  mr-2 ml-2">
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

										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newCommentaire"> <i class="fas fa-plus mr-2"></i>Ajouter Commentaire</a>
										<br>			
									</div>
                                </div>
                            </div>		
							<div class="card shadow mb-4 mr-2 ml-2">
                                <!-- Card Header - Accordion -->
                                <a href="#imgr" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="imgr">
                                    <h6 class="m-0 font-weight-bold text-primary">Documents</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="imgr" style="">
                                    <div class="card-body">
										<table class="table table-hover" id="imgTable">
											<tr>
												<th>Date</th><th>Medecin</th><th>Description</th> <th>Action</th> 
											</tr>
	
										</table>

			
										<a class="btn btn-primary float-right" href="#" data-toggle="modal" data-target="#newImag"> <i class="fas fa-plus mr-2"></i>Ajouter Documents</a>
										<br>			
									</div>
                                </div>
							</div>
                                <!-- Card Header - Accordion -->
															<div class="card shadow mb-4 mr-2 ml-2">

                                <a href="#orientation" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="orientation">
                                    <h6 class="m-0 font-weight-bold text-primary">Lettre d'Orientation</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="orientation" style="">
                                    <div class="card-body">
										<table id="orTable" class="table table-hover">
											<tr>
												<th>Date</th><th>info</th> <th>Medecin</th> <th>Actions</th>
											</tr>
				  
										
													   
											 
											 
											 
							 
										</table>

			
										<a class="btn btn-primary float-right" href="{{ route('orientation',['id'=>$patient->id])}}"> 
											<i class="fas fa-plus mr-2"></i>Ajouter Lettre d'Orientation</a>
										<br>			
									</div>
                                </div>
                                
                            </div>
						
							<div class="card shadow mb-4 mr-2 ml-2">
                                <!-- Card Header - Accordion -->
                                <a href="#prsc" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="imgr">
                                    <h6 class="m-0 font-weight-bold text-primary">Prescriptions</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="prsc" style="">
                                    <div class="card-body">
										<table  id="presc" class="table table-hover">
											<tr>
												<th>Date</th><th>Type</th> <th>Medecin</th>
											</tr>

										</table>

			<a class="btn btn-primary float-right" href="javascript:$('#pressc').submit();"> 
											<i class="fas fa-plus mr-2"></i>Ajouter Prescription</a>
										<br>			
									</div>
                                </div>
							</div>
							<div class="card shadow mb-4  mr-2 ml-2" >

								<a href="#rdv" class="d-block card-header py-3 " data-toggle="collapse" role="button" aria-expanded="true" aria-controls="rdv">
									<h6 class="m-0 font-weight-bold text-primary">Rendez-vous</h6>
								</a>
							   <div class="collapse collapsed" style="" id="rdv">
								<div class="card-body">
									<table class="table table-hover" id="rdv">
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
													<a class="dropdown-item" href="#" data-toggle="modal" onclick="deleteRdv({{$rdv->id}})" data-target="#confirmDeleteModel" >Supprimer</a>
												</div>
											</div>
										</td>
										
										</tr>	@endforeach
									</table>

		
									<a class="btn btn-primary float-right" href="/newRDV/{{$patient->id}}/{{Auth::id()}}/"> 
										<i class="fas fa-plus mr-2"></i>Prendre rendez-vous</a>
									<br>			
								</div>
							</div>
						</div>		<!-- Card Header - Accordion -->
							
							

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

<div class="toast" role="alert" style="position: absolute; top: 0; right: 0;" aria-live="assertive" aria-atomic="true">
	<div class="toast-header" style="background-color:rgb(219, 255, 190)">
		

	  <strong class="mr-auto">Confirmé</strong>
	  <small class="text-muted"></small>
	  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
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
		  <div class="modal-body">Voulez vous vraiment supprimer ? </div>
		  <div class="modal-footer">
			  <button class="btn btn-secondary" type="button" id="dssm" data-dismiss="modal">Annuler</button>
			  <a class="btn btn-danger" id="confirmdeletebutton" onclick="confirm(1)">Supprimer</a>
		  </div>
	  </div>
  </div>
  </div>    

<div class="modal fade" id="newImag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Ajouter un document : </h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="text">Format accepté sont tout type d'image ou documents PDF </div>
			<input type="text" class="form-control bg-light border-1 small" placeholder="Description..." id="descImg"/> 
			<input type="file" accept=".pdf ,image/*" class="form-control mt-3 bg-light border-1 small" placeholder="Commentaire..." name="file" id="file"/> 

		</div>
			<div class="modal-footer">
			<button class="btn btn-secondary" type="button" id="dsmimg" data-dismiss="modal">Annuler</button>
			<a class="btn btn-primary" onclick="upl()">Ajouter Document</a>
		</div>
	</div>
</div>
</div>



<script> 
    function upl(){
		var url = "/set/imagerie";
		const files = document.querySelector('[name=file]').files;
		const formData = new FormData();
		formData.append('file', files[0]);
	    formData.append('desc',document.getElementById('descImg').value);
		formData.append('user',{{Auth::user()->id}});
		formData.append('patient',{{ $patient->id}});
		
// post form data
const xhr = new XMLHttpRequest();
// log response
xhr.onload = () => {getInf(5);

	document.getElementById("dsmimg").click();

};

// create and send the reqeust
xhr.open('POST', url);
xhr.send(formData);
}

function deleteor(id){

var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdelete("'+id+'")');


}

function deleteMal(id){

var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdeletemal("'+id+'","1")');

}

function deleteAlr(id){

var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdeletemal("'+id+'","2")');

}


function deleteCom(id){

var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdeletemal("'+id+'","3")');

}
function deleteImg(id){

var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdeletemal("'+id+'","4")');

}
function deletePr(id){

var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdeletemal("'+id+'","5")');

}
function deleteRdv(id){
var btn = 	document.getElementById('confirmdeletebutton');
btn.setAttribute('onclick','confirmdeleterdv("'+id+'")');

}
function confirmdeleterdv(rdvid){
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
document.getElementById("dssm").click();
}

function confirmdelete(id){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
	
				document.getElementById("dssm").click();
			$('.toast').toast({
				'autohide': true,
				'delay':  5000});
			$('.toast').toast('show');
			getInf(6);

				}		
		}
	xhttp.open("GET", "/unset/orientation/"+id, true);
	xhttp.send();
		
	}
function confirmdeletemal(id,op){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
	
				document.getElementById("dssm").click();
			$('.toast').toast({
				'autohide': true,
				'delay':  5000});
			$('.toast').toast('show');
			getInf(op);getInf(5);	getInf(4);

				}		
		}
	xhttp.open("GET", "/unset/"+op+"/"+id, true);
	xhttp.send();
		
	}


	function setNew(op) {
	var xhttp = new XMLHttpRequest();

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

				getInf(op);
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


	function getInf(op){
		var xhttp = new XMLHttpRequest();
	
	  if (op==1) var tbl = document.getElementById("maladtable");
	  if (op==2)  var tbl = document.getElementById("allergieTable");
	  if (op==3)   var tbl = document.getElementById("CommentaireTable");
	  if (op==4)	var tbl = document.getElementById("presc");
	  if (op==5)	var tbl = document.getElementById("imgTable");
	  if (op==6)	var tbl = document.getElementById("orTable");
	  
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
console.log(this.responseText);
			tbl.innerHTML = this.responseText;
		   }
	  };
	  if (op==1)	  xhttp.open("GET", "/ajax/getInf/0/{{$patient->id}}", true);
	  if (op==2)	  xhttp.open("GET", "/ajax/getInf/1/{{$patient->id}}", true);
	  if (op==3)	  xhttp.open("GET", "/ajax/getInf/2/{{$patient->id}}", true);
	  if (op==4)	  xhttp.open("GET", "/ajax/getInf/3/{{$patient->id}}", true);
	  if (op==5)	  xhttp.open("GET", "/ajax/getImg/{{$patient->id}}", true);
	  if (op==6)	  xhttp.open("GET", "/ajax/getInf/4/{{$patient->id}}", true);

	  xhttp.send();
	}
	getInf(1);
	getInf(2);
	getInf(3);
	getInf(4);
	getInf(5);
	getInf(6);

	var birth = document.getElementById('birth');
	var diff_ms = Date.now() - Date.parse(birth.innerText);
	var age_dt = new Date(diff_ms); 

	birth.innerText = birth.innerText +"  ("+ Math.abs(age_dt.getUTCFullYear() - 1970)+" ans)";

	</script>
					
				
							@endif
					
@endsection
