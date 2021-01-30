@extends('layouts.medecin')
@section('content')



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
										<table class="table table-hover">
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

			
										<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Ajouter une maladie</a>
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
										<table class="table table-hover">
											<tr>
												<th>Date</th><th>Type d'allergie</th> <th>Medecin</th>
											</tr>
												<td>24-04-2017</td>
												<td>Allergie au Pollen</td>
											
												<td>Harrar hichem</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Ajouter Allergie</a>
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
										<table class="table table-hover">
											<tr>
												<th>Date</th><th>Note</th> <th>Medecin</th>
											</tr>
												<td>24-04-2017</td>
												<td>Risque d'essouflement en reaction allergique</td>
											
												<td>Harrar Hichem</td>
											
										</table>

			
										<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Ajouter Commentaire</a>
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

			
										<a class="btn btn-primary float-right" href="{{ route('orientation',['id'=>$patient->id])}}"> <i class="fas fa-plus mr-2"></i>Ajouter Lettre d'Orientation</a>
										<br>			
									</div>
                                </div>
                                
                            </div>
                   
					          @endif
					       
                                                                
				
							
					
@endsection