
@extends(Auth::user()->role == 1 ? 'layouts.medecin' : 'layouts.secretaire')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Prescriptions terminé!</h6>
        </div>
        <div class="card-body">
    <a class="btn btn-primary float-right" onclick="printDiv('printableArea')">  <i class="fas fa-print mr-2"></i>Imprimer Prescription</a>
    <a class="btn btn-secondary float-left" href="/show_infos/{{$data['idp']}}">  <i class="fas fa-arrow-left mr-2"></i>Retourner a la pages d'infos</a>

 
<div id="printableArea"><center>   
    <div>

    <img class="d-none d-print-block" style="vertical-align:middle" width="120" src="{{asset('/img/logo.png')}}">
    <span class="d-none d-print-block"><font size="10">{{App\Clconfig::first()->sitename}}</font></span>
  </div>

<h3><table class="table">    
    <tr><th colspan="2" class="text-center">Ordonance </th> </tr>

    <tr><th>Nom: </th> <td> {{$data["nomp"]}}</td> </tr>
        <tr>­</tr>
    <tr><th>Medecin: </th> <td> {{$data["nomMed"]}}</td> </tr>
    <tr></tr>
    <tr><th>Date: </th> <td> {{date('Y-m-d')}}</td> </tr>
    <tr></tr>
    <tr><th colspan="2"><div class="text-center"> Medicaments  </div></th> </tr> 
         
    @for($x=0;$x<count($data['medics']);$x++)
    @if($data['medics'][$x]!="")
    <tr> <th>
        {{($data['medics'][$x])}} </th>
        
        <td><table class="table-borderless"> <tr> <td>Dose:  
            {{$data['doses'][$x]}} </td> 
        <td>{{$data['prises'][$x]}} Par jour </td>
        <td>Pour {{$data['durees'][$x]}} jour </td>
        </tr>
        </table>
  
        </td>
    </tr>
@endif
    
        
    @endfor   
    
    </td> </tr>
</table></h3>

<div class="float-right d-none d-print-block">
    <br><br>
    {{App\Clconfig::first()->sitename}}<br>
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