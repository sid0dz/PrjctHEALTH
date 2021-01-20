@extends('layouts.secretaire')
@section('content')

<a class="btn btn-primary float-right" href="{{url('dashbord/addpatient')}}"> <i class="fas fa-plus mr-2"></i> Ajouter</a>

<div class="card-body table-responsive p-0">
    <table id="usrTable" class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th onclick="sortTable(0)">Nom</th>
          <th onclick="sortTable(1)">N° de securité</th>
          <th onclick="sortTable(2)">Date de naissance </th>
          <th onclick="sortTable(3)">Telephone</th>
          <th onclick="sortTable(4)">Email</th>
          
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
              
          <form action="/dashbord/show_infos" method="post">

              {{csrf_field()}}
                <input type="hidden" name="id" value="{{$patient->id}}">
         
              <button  class="btn btn-warning btn-circle ">
                <i class="fas fa-edit"> </i>
              </button> 
                
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