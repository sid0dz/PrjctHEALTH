

@extends('layouts.Admin.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Utilisateur creé!</h6>
        </div>
        <div class="card-body">
    <a class="btn btn-primary float-right" onclick="printDiv('printableArea')">  <i class="fas fa-print mr-2"></i>Imprimer Attestation</a>
    <a class="btn btn-secondary float-left" href="/show_users">  <i class="fas fa-arrow-left mr-2"></i>Retourner au utilisateur</a>

 
<div id="printableArea"><center>
<img height="300"  src="{{asset('/logo.png')}}" class="d-print-flex d-none" 
/>
<h3><table class="table">
    <tr><th colspan="2"><div class="text-center">Attestation d'enregistrement</th></tr>
    <tr><th>Nom: </th> <td> {{$data->input('lname')}} {{$data->input('fname')}}</td> </tr>
        <tr>­</tr>
    <tr><th>Role: </th> <td> 
    @if ($data->input('role')==1) Medecin
    @elseif ($data->input('role')==2) Secretaire
    @else   Administrateur
    @endif 
    </td> </tr>
    <tr></tr>
    <tr><th>Specialité: </th> <td> {{$data->input('specialite')}}</td> </tr>
    <tr></tr>
    <tr><td colspan="2"><div class="text-center">Informations d'accés</tr></tr>
        <tr><th>Email: </th> <td>{{$data->input('email')}} </td> </tr>
        <tr><th>Mot de passe : </th> <td> {{$data->input('password')}}</td> </tr>
    
</table></h3>

<div class="float-right d-none d-print-block">
    <br><br>
CLINIQUE CHIFAA<br>
29 Rue Colonel Lotfi<br>
Quartier de la liberté.<br>
Contact@Chifaa.cl<br>
043-49-50-67<br>
</div>

</center>



<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endsection