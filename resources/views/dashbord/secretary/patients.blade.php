@extends('layouts.secretaire')
@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Liste des patients</h6>

      <a class="btn btn-primary float-right" href="{{url('dashbord/addpatient')}}"> <i class="fas fa-plus mr-2"></i> Nouveau Patient</a>
    </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>Nom</th>
                      <th>Date de naissance</th>
                      <th>Numero de telephone</th>
                      <th>Email</th>
                      <th>Numero Sécurité Sociale</th>
                      <th>Plus d'info</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Numero de telephone</th>
                    <th>Email</th>
                    <th>Numero Sécurité Sociale</th>
                    <th>Plus d'info</th>

                  </tr>
              </tfoot>
       
              <tbody>
                @foreach ($mes  as $patient)
                  <tr>
                    <td>{{$patient->name}}</td>
                <td>{{$patient->patient_birth_date}}</td> 
                <td>{{$patient->phone}}</td>
                    <td>{{$patient->email}}</td>
                    <td>{{$patient->npatient}}</td>
                    <td>
                        
                    <form action="/show_infos" method="post">
          
                        {{csrf_field()}}
                                 <input type="hidden" name="id" value="{{$patient->id}}">

                   
                        <button class="btn btn-warning btn-circle ">
                          <i class="fas fa-edit"> </i>
                        </button> 
                          
                        </form>
                    </td>
                  </tr>
                  @endforeach   
                    </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
          
                          </div>
            
              <!-- Page level plugins -->
            
          
            </div>
            @endsection
            