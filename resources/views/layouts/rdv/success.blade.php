
@extends('layouts.secretaire')
@section('content')
    <center> <h1>Rendez-vous a été pris!</h1></center>
    <a class="btn btn-primary float-right" onclick="printDiv('printableArea')">  <i class="fas fa-print mr-2"></i>Imprimer Rendez-vous</a>

<div id="printableArea"><center>
<img height="200"  src="{{asset('/logo.png')}}" style="display:none;"/>
<h3><table class="table">
    <tr><th>Nom: </th> <td> {{$data["nomp"]}}</td> </tr>
        <tr>­</tr>
    <tr><th>Medecin: </th> <td> {{$data["nomMed"]}}</td> </tr>
    <tr></tr>
    <tr><th>Date: </th> <td> {{$data["date"]}}</td> </tr>
    <tr></tr>
    <tr><th>Heure: </th> <td> {{$data["heure"][0]}}{{($data["heure"][1])==1?":00":":30"}}</td> </tr>
</table></h3>



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