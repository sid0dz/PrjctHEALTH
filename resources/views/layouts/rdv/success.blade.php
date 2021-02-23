
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
    <!-- moved "vertical-align:middle" style from span to img -->
<div>
    <img class="d-none d-print-block" style="vertical-align:middle" width="120" src="{{asset('/img/logo.png')}}">
    <span class="d-none d-print-block"><font size="10">{{App\Clconfig::first()->sitename}}</font></span>
  </div>

<h3><table class="table">
    <tr><th colspan="2"><div class="text-center">Rendez-vous</th></tr>

    <tr><th>Nom: </th> <td> {{$data["nomp"]}}</td> </tr>
        <tr>­</tr>
    <tr><th>Medecin: </th> <td> {{$data["nomMed"]}}</td> </tr>
    <tr></tr>
    <tr><th>Date: </th> <td> {{$data["date"]}}</td> </tr>
    <tr></tr>
    <tr><th>Heure: </th> <td>
    @php 
    echo $data["heure"][0];
    if(strlen($data["heure"]) <3 )
    echo $data["heure"][1]==1?":00":":30";

    else 
    echo $data["heure"][1].($data["heure"][2]==1?":00":":30");
@endphp
        </td> </tr>
        <tr> <th> Motif </th><td> {{$data["motif"]}}
</table></h3>

<div class="float-right d-none d-print-block">
    <br><br>
<br>
{{App\Clconfig::first()->siteadress}}<br>
{{App\Clconfig::first()->siteemail}}<br>
{{App\Clconfig::first()->sitenumber}}<br>
{{App\Clconfig::first()->siteadress2}}<br>
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