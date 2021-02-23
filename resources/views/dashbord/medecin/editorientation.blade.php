@extends('layouts.medecin')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('cal-table/vendors/styles/core.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/vendors/styles/icon-font.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/src/plugins/jquery-steps/jquery.steps.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/vendors/styles/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/src/plugins/dropzone/src/dropzone.css')}}">

   

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- My Work here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lettre d'Orientation</h6>
        </div>
        <div class="card-body">
        

            <form action="{{ route('orientationupdate',['id'=>$orientation->id])}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
        
                @csrf
                <input type="hidden" name="patient_id" value="{{$patient->id ?? '13'}}"/>
                <input type="hidden" name="date" value="{{date('d-m-Y')}}"/>
                
                <table class="table table-bordered " id="inft">
<tr class="text-center"><th colspan=2>{{Auth::user()->fname }} {{Auth::user()->lname }} </th></tr>
<tr  class="text-center"><td>Specialité:</td><td>{{Auth::user()->specialite }}</td></tr>
<tr><td colspan="2" class="text-center"><div></div></td></tr>
<tr><td>Date : </td><td>{{date('d-m-Y')}}</td></tr>
<div><tr><td> Nom et prénom : </td> <td>{{$patient->name ?? 'define'}}</td> </tr></div>

 <div class="col-12">
              <div class="form-group">
                <label for="exampleInputTitre">Lettre</label>
                <div >
                    
                    <textarea id="description"   class="form-control @error('description') is-invalid @enderror" name="contenu"  required>{{$orientation->contenu}}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
                </div>

</table>
<button type ="submit" class="btn btn-success btn-icon-split float-left">
    <span class="icon text-white-50">
        <i class="fas fa-check"></i>
    </span>
    <span class="text">Editer Orientation</span>
</a></form>









</div>
</div>
</div>


               
             


              
               

              
              
            
             
 

   <script src="{{asset('cal-table/vendors/scripts/core.js')}}"></script>
  <script src="{{asset('cal-table/vendors/scripts/script.min.js')}}"></script>
  <script src="{{asset('cal-table/vendors/scripts/process.js')}}"></script>
  <script src="{{asset('cal-table/vendors/scripts/layout-settings.js')}}"></script>
  <script src="{{asset('cal-table/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
  <script src="{{asset('cal-table/vendors/scripts/steps-setting.js')}}"></script>
  <script src="{{asset('cal-table/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
  <script src="{{asset('cal-table/src/plugins/dropzone/src/dropzone.js')}}"></script>
@endsection