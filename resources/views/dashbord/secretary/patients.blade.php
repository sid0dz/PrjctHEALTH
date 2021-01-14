@extends('layouts.secretaire')
@section('content')

<a class="btn btn-primary float-right" href="{{url('dashbord/addpatient')}}"> <i class="fas fa-plus mr-2"></i> Ajouter</a>

<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>Nom</th>
          <th>N° de securité</th>
          <th>Date de naissance </th>
          <th>Telephone</th>
          <th>Email</th>
          
        </tr>
      </thead>
      <tbody>
      @foreach ($mes  as $patient)
        <tr>
          <td>{{$patient->name}}</td>
          <td>{{$patient->npatient}}</td>
          <td>{{$patient->patient_birth_date}}</td>
          <td>{{$patient->phone}}</td>
          <td>{{$patient->email}}</td>

          <td class="">
              
          <form action="#" method="post">

              {{csrf_field()}}
              {{method_field('DELETE')}}
                
         
              <a href="#Define"  class="btn btn-warning btn-circle ">
                <i class="fas fa-edit"> </i>
              </a> 
                
               <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?') "class="btn btn-danger btn-circle">
                <i class="fas fa-trash"> </i>
              </a>
              </form>
          </td>
        </tr>
        @endforeach   
       
      </tbody>
    </table>
  </div>


@endsection