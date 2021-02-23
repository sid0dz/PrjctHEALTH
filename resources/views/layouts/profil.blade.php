

@extends(Auth::user()->role == 0? 'layouts.Admin.admin': (Auth::user()->role == 1 ? 'layouts.medecin' : 'layouts.secretaire'))


@section('content')





<div class="container-fluid">

    <!-- Page Heading -->
    <!-- My Work here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Gerer mon profil</h6>
        </div>
        <div class="card-body">
       @if($data ?? '0') 
@if($data =="success") <div class="text-success text-center"><b>Changements effectué</b></div>
@else  <div class="text-danger text-center"><b>{{$data ?? ''}}</b></div>


@endif
@endif
            <form action="#" enctype="multipart/form-data" method="POST">

                @csrf
                
                <input type="hidden"  name="medid" value="{{Auth::user()->id}}">
                <table class="table table-borderless" id="inft">
<tr ><td>Photo de profil :</td>
    
    <td>
    <table>
        <tr><td><img src="{{asset('uploads/avatar/'.Auth::user()->avatar)}}" height="50" alt=""></td><td>    <input type="file" name="avatar" class="form-control bg-light border-1 small"
         placeholder="Nom du site" value="#"></td></tr>
    </table>
    </td></tr>
<tr><td colspan="2" class="text-center"><div></div></td></tr>
<tr><td> Nom : </td><td>
    <input type="text" name="fname" class="form-control bg-light border-1 small"
     placeholder="{{Auth::user()->fname }}" value="{{Auth::user()->fname }}"></td>
</td></tr>
<tr><td> Prenom: </td> <td>
    <input type="text" name="lname" id="siteemail" class="form-control bg-light border-1 small"
     placeholder="{{Auth::user()->lname }}" value="{{Auth::user()->lname }}"></td>
</td> </tr>
<tr><td> Email: </td> <td>
    <input type="text" name="email" class="form-control bg-light border-1 small"
     placeholder="{{Auth::user()->email }}" value="{{Auth::user()->email }}"></td>
</td> </tr>
<tr><td colspan="2"> <div class="text-center"> Changer mot de passe </div></td></tr>
<tr><td> Ancien Mot de passe: </td> <td>
    <input type="password" name="oldPassword"  class="form-control bg-light border-1 small"
     placeholder="Entrez ancien mot de passe " value=""></td>
    
</td> </tr><tr><td>Nouveau mot de passe: </td> <td>
    <input type="password" name="newPassword" class="form-control bg-light border-1 small"
     placeholder="Entrez nouveau mot de passe" value=""></td>
    
</td> </tr></tr><tr><td>Rentrez nouveau mot de passe: </td> <td>
    <input type="password" name="newPassword2" class="form-control bg-light border-1 small"
     placeholder="Verifier nouveau mot de passe" value=""></td>
    
</td> </tr>

</table>
<button type ="submit"  class="btn btn-success btn-icon-split float-right">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Confirmer Changements</span>
</a></form>


<script>
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