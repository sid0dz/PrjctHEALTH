
@extends('layouts.Admin.admin')
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
												<th scope="row">Avatar</th>
												<td><img src=
												@if($user->avatar!='' )
												 {{asset('uploads/avatar/'.$user->avatar)}}
												@else {{asset('img/undraw_profile.svg')}} 
												@endif 
												height="100"></td>
											</tr>
											
											<tr>
												<th scope="row">Nom</th>
												<td>{{$user->fname}}</td>
											</tr>
											
											<tr>
												<th scope="row">Prenom</th>
												<td>{{$user->lname}}</td>
											</tr>
											
											<tr>
												<th scope="row">Email</th>
												<td>{{$user->email}}</td>
											</tr>
											<tr>
												<th scope="row">Role</th>
												<td>{{($user->role==0)?"Admin":(($user->role==1)?"Medecin":"Secretary")}}</td>
											</tr>
											<tr>
												<th scope="row">Specialité</th>
												<td>{{$user->specialite}}</td>
											</tr>
										</table>
                        </div>
								
				
								
								
								</div>
                                </div>

							</div>
                                <!-- Card Header - Accordion -->
							@if($user->role==1)
								<div class="card shadow mb-4  mr-2 ml-2" >

									<a href="#maladie" class="d-block card-header py-3 " data-toggle="collapse" role="button" aria-expanded="true" aria-controls="maladie">
										<h6 class="m-0 font-weight-bold text-primary">Rendez-vous</h6>
									</a>
								<div class="collapse collapsed" style="" id="maladie">
									<div class="card-body">
										<table class="table table-hover" id="maladtable">
											<tr>
												<th>Date</th><th>Heure</th><th>Patient</th> <th>Motif</th> 
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
											
											
											</tr>	@endforeach
										</table>
	
			
										
									</div>
								</div>
							</div>
							@endif
				
@endsection