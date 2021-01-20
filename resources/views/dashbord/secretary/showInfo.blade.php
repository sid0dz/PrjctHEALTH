@extends('layouts.secretaire')
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
								
						<a class="btn btn-primary float-right" href="{{ route ('patients.edit',['patient'=>$patient->id])}}"> <i class="fas fa-fw fa-wrench"></i> Editer informations</a>
								<br>			
								
								
								</div>
                                </div>

							</div>
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


@endsection