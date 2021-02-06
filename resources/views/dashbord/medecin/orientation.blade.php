@extends('layouts.medecin')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('cal-table/vendors/styles/core.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/vendors/styles/icon-font.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/src/plugins/jquery-steps/jquery.steps.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/vendors/styles/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('cal-table/src/plugins/dropzone/src/dropzone.css')}}">

   



    <div>
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h4>Lettre d'orientation</h4>
              </div>
             
            </div>
            
          </div>
        </div>
        <table class="table table-success table-striped">
          <tr><td> Nom et prénom : </td> <td>{{$patient->name}}</td> </tr>
          <tr><td> Nom du medecin :</td> <td><input id="title" placeholder="Nom du médecin" type="text" class="form-control @error('title') is-invalid @enderror" name="nom"  required > </td> </tr>

          </table>
        <form role="form"  method="POST" action="{{route('orientationStore')}} " enctype="multipart/form-data">
            @csrf
            <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputTitre">Patient id</label>
                    <div >
                        
                        <input id="title" placeholder="Nom de la bourse" type="text" class="form-control @error('title') is-invalid @enderror" name="patient_id" value="{{ $patient->id}}" required >
  
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTitre">Medecin id</label>
                    <div >
                        
                        <input id="title" placeholder="Nom de la bourse" type="text" class="form-control @error('title') is-invalid @enderror" name="medecin_id" value="{{Auth::user()->id}}" required >
  
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
  
  
              
                  <div class="form-group">
                    <label class="label">Date </label>
                    <div class="input-group-icon">
                        <input class="input--style-4 js-datepicker" type="date" name="date">
                    </div>
                </div>
              

             
             
               
             


              
                <div class="col-12">
              <div class="form-group">
                <label for="exampleInputTitre">Lettre</label>
                <div >
                    
                    <textarea id="description" placeholder="Saisir lettre ... "  class="form-control @error('description') is-invalid @enderror" name="contenu"  required></textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
                </div>

              
              
            
               <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right pl-4 pr-4">Ajouter</button>
            </div>
              
            </div>
            <!-- /.card-body -->

           
          </form>
                

         
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