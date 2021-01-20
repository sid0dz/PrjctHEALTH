@extends('layouts.secretaire')
@section('content')



<div class="card shadow mb-4">
                                <div class="card-header py-3"> 
                                    <h6 class="m-0 font-weight-bold text-primary">Informations du patients</h6>
								</div>
								
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
								
								
								
								
                                </div>
                            </div>



@endsection