
@extends(Auth::user()->role == 1 ? 'layouts.medecin' : 'layouts.secretaire')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rendez-vous Pris!</h6>
        </div>
        <div class="card-body">
    <a class="btn btn-primary float-right" onclick="printDiv('printableArea')">  <i class="fas fa-print mr-2"></i>Imprimer Rendez-vous</a>
    <a class="btn btn-secondary float-left" href="/show_infos/{{$data['idp']}}">  <i class="fas fa-arrow-left mr-2"></i>Retourner a la pages d'infos</a>

 
<div id="printableArea"><center>
<img height="300"  src="{{asset('/logo.png')}}" class="d-print-flex d-none" 
/>
<h3><table class="table">
    <tr><th>Nom: </th> <td> {{$data["nomp"]}}</td> </tr>
        <tr>­</tr>
    <tr><th>Medecin: </th> <td> {{$data["nomMed"]}}</td> </tr>
    <tr></tr>
    <tr><th>Date: </th> <td> {{$data["date"]}}</td> </tr>
    <tr></tr>
    <tr><th>Heure: </th> <td> {{$data["heure"][0]}}{{($data["heure"][1])==1?":00":":30"}}</td> </tr>
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