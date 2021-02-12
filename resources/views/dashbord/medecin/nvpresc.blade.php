@extends('layouts.medecin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- My Work here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Prescription</h6>
        </div>
        <div class="card-body">
        

            <form action="/newPrescription" method="POST">
                @csrf
                <input type="hidden" name="patid" value="{{$patient->id ?? '13'}}"/>
                <input type="hidden" name="date" value="{{date('d-m-Y')}}"/>
                
                <table class="table table-bordered " id="inft">
<tr class="text-center"><th colspan=2>{{Auth::user()->fname }} {{Auth::user()->lname }} </th></tr>
<tr  class="text-center"><td>Specialité:</td><td>{{Auth::user()->specialite }}</td></tr>
<tr><td colspan="2" class="text-center"><div></div></td></tr>
<tr><td>Date : </td><td>{{date('d-m-Y')}}</td></tr>
<div><tr><td> Nom et prénom : </td> <td>{{$patient->name ?? 'define'}}</td> </tr></div>

</table>
<button type ="submit" class="btn btn-success btn-icon-split float-left">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Confirmer Prescriptions</span>
</a></form>
<button type="submit" onclick="addInput()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right  d-print-none">Ajouter Medicament</button>


<script>var addid = 0;

function addInput(id) {

var addList = document.getElementById('inft');
var docstyle = addList.style.display;
if (docstyle == 'none') addList.style.display = '';

addid++;

var text = document.createElement('tr');
text.id = 'additem_' + addid;
text.innerHTML = '<td><input type="text" name="medic[]" class="form-control bg-light border-0 small" placeholder="Medicament" aria-label="Search" aria-describedby="basic-addon2"></td><td><div class="row"><input type="number" name="dose[]" min="1" max="50"   aria-label="Search" aria-describedby="basic-addon2">/ Par jour </td>';
addList.appendChild(text);
}

addInput(1);
</script>
<style media="print">
.tantano {
border: 1px solid #000000!important;
}
</style> 





</div>
</div>
</div>





<!-- /.container-fluid -->

</div>
@endsection