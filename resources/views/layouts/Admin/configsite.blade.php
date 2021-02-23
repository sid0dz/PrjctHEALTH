
@extends('layouts.Admin.admin')
@section('content')





<div class="container-fluid">

    <!-- Page Heading -->
    <!-- My Work here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Configuration du site</h6>
        </div>
        <div class="card-body">
        
@if($data ?? ''!=null) <div class="text-success text-center"><b>Changements effectué</b></div>
@endif
            <form action="#" method="POST">
                @csrf
                <table class="table  " id="inft">
<tr ><td>Nom du site:</td>
    
    <td>
        <input type="text" name="sitename" id="sitename" class="form-control bg-light border-1 small" placeholder="Nom du site" value="{{App\Clconfig::first()->sitename}}"></td>
    
    </td></tr>
<tr><td colspan="2" class="text-center"><div></div></td></tr>
<tr><td> Adresse : </td><td>
    <input type="text" name="siteadress" id="siteadress" class="form-control bg-light border-1 small" placeholder="Adress" value="{{App\Clconfig::first()->siteadress}}"></td>
</td></tr>
<tr><td> Email de contact: </td> <td>
    <input type="text" name="siteemail" id="siteemail" class="form-control bg-light border-1 small" placeholder="Adress" value="{{App\Clconfig::first()->siteemail}}"></td>
</td> </tr>
<tr><td> Numero de telephone: </td> <td>
    <input type="text" name="sitenumber" id="sitenumber" class="form-control bg-light border-1 small" placeholder="Adress" value="{{App\Clconfig::first()->sitenumber}}"></td>
</td> </tr>
<tr><td> Site: </td> <td>
    <input type="text" name="siteadress2" id="siteadress2" class="form-control bg-light border-1 small" placeholder="Adress" value="{{App\Clconfig::first()->siteadress2}}"></td>
    
</td> </tr>
<tr><td> Colorisation :</td> <td> 
    <table class="table-borderless">
        <tr>
            <td>Debut degradé <input type="color" name="degDeb" id="degDeb" onchange="prview();" value="{{App\Clconfig::first()->debDegr}}"></td>
            <td> Fin degradé <input type="color" name="degFin" id="degFin" onchange="prview();" value="{{App\Clconfig::first()->finDegr}}"></td> 
            <td> <input type="checkbox" id="prv" onchange="prview();"> Apercu
        </tr>
        </table> 
    </td>
    </tr>
</table>
<button type ="submit"  class="btn btn-success btn-icon-split float-right">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Confirmer Changements</span>
</a></form>


<script>
    function prview(){
if(document.getElementById('prv').checked=true)
{   var sidebarr=document.getElementById('sidbr');
var grdeb = document.getElementById('degDeb').value;
var grfin = document.getElementById('degFin').value;
  sidebarr.setAttribute('style',"background-image: linear-gradient(180deg, "+grdeb+" 10%,"+grfin+" 100%);");




}
    }
   function sbtcon(){
var data = new FormData();
data.append('sitename', document.getElementById('sitename').innerText);
data.append('siteadress',  document.getElementById('siteadress').innerText);
data.append('siteadress2',  document.getElementById('siteadress2').innerText);
data.append('siteemail', document.getElementById('siteemail').innerText);
data.append('sitenumber',  document.getElementById('sitenumber').innerText);

var xhr = new XMLHttpRequest();
xhr.open('POST', '/admconfig', true);
xhr.onload = function () {
    // do something to response
//    console.log(this.responseText);
};
xhr.send(data);
}

</script>
 





</div>
</div>
</div>





<!-- /.container-fluid -->

</div>
@endsection