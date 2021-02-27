@extends('layouts.secretaire')
@section('content')
<link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

<link href="{{asset('css/registerSheet.css')}}" rel="stylesheet" media="all">
<div class="container-fluid col-md-8 pt-5">
    
        
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Informations du patient</h3>
      </div>
     
    <form role="form"  method="POST" action="{{route('patients.store')}} " enctype="multipart/form-data">
        @csrf
        <div class="card-body">


           
          <div class="form-group">
            <label for="exampleInputTitre">Nom</label>
            <div >
                
                <input id="title" placeholder="Nom du patient" type="text" class="form-control @error('title') is-invalid @enderror" name="name"
                pattern="[a-zA-Z ]{5,40}"  required >

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>


          <div class="form-group">
            <label for="exampleInputTitre">N° de sécurité sociale</label>
            <div >
                
                <input id="npatient" placeholder="N° de sécurité sociale du patient" type="text" class="form-control @error('npatient') is-invalid @enderror" name="npatient" pattern="[0-9]{8,12}"  required >

                @error('npatient')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-group">
            <label class="label">Date de naissance</label>
            <div class="input-group-icon">
                <input class="input--style-4 js-datepicker" type="date" name="birthday" min="1920-01-01" max="{{date('d-m-Y')}}" required>
                 @error('birthday')
                      <span class="invalid-feedback" role="alert">
                          <strong>rensegner la date de naissance</strong>
                      </span>
                  @enderror
            </div>
        </div>

          <div class="form-group">
              <label for="exampleInputTitre">N° de téléphone</label>
              <div >
                  
                  <input id="phone" placeholder="N° de telephone" type="text" class="form-control @error('spécialité') is-invalid @enderror" name="phone" pattern="0(5|6|7)[0-9]{8}" required >

                  @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
         
            <div class="form-group">
              <label for="exampleInputTitre">Email</label>
              <div >
                  
                  <input id="email" placeholder="email" type="email" class="form-control @error('année_universitaire') is-invalid @enderror" name="email" required >

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
            </div>
         


          



          
          
        
           <div class="card-footer">
          <button type="submit" class="btn btn-primary pl-4 pr-4">Créer</button>
        </div>
          
        </div>
      

       
      </form>
    </div>
   

    
      
    </div>
   

        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    
    <script src="{{asset('js/global.js')}}"></script>

@endsection
