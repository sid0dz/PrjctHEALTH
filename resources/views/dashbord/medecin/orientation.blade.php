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
            <div class="form-group">
            <label for="exampleInputTitre">Nom</label>
            <div >
                
                <input id="title" placeholder="Nom du patient" type="text" class="form-control @error('title') is-invalid @enderror" name="name"  value="{{ $patient->name }}" required>


                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
       
            
              
              <section>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      
                      <textarea class="textarea_editor form-control border-radius-0" placeholder="entrez lettre ..."></textarea>                   
                      </div>
                  </div>
                  <div class="col-6">
                    
                  
                </div>
                

                </div>
              </section>

            </form>
            
             <div class="card-footer">
          <button type="submit" class="btn btn-primary pl-4 pr-4">ajouter</button>
        </div>
          </div>
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