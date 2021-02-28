
@extends('layouts.Admin.admin')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-2 mx-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Editer utilisateur</h1>
                        <font color =red>                                
            @if($errors->any())
{{ implode('', $errors->all(':message ')) }}

@endif</font>
                    </div>
                    <form class="user" method="POST" action="{{route('updateUser',['id'=>$user->id])}}">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                       <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="fname" name="fname" value="{{$user->fname}}"
                                    placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="lname" name="lname" value="{{$user->lname}}"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email" name="email" value="{{$user->email}}"
                                placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="hidden" class="form-control form-control-user"
                                    id="password" name="password" placeholder="Password" >
                            </div>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control form-control-user"
                                    id="password_confirmation" value="{{$user->password}}" name="password_confirmation" placeholder="Repeat Password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">	       <label><font size="4px" style="padding-left:20px;">Admin
                                <input type="radio" checked="checked" name="role" onclick="handleClick(this)" value="0">
                                <span class="checkmark"></span>
                            </label>		           
                    
                                <label><font size="4px" style="padding-left:20px;">Doctor
                                    <input type="radio" checked="checked" name="role" onclick="handleClick(this)" value="1">
                                    <span class="checkmark"></span>
                                </label>		           
                                <label style="padding-left:20px;">Secretary
                                    <input type="radio" name="role" onclick="handleClick(this)" value="2">
                                    <span class="checkmark"></span>
                                </font></label>                                        </div>
                         
                                <div class="col-sm-6">
                                <select  style="font-size: 0.8rem;border-radius: 50px;padding: 0.8rem 5rem;" id="specialite" name="specialite"
                                    placeholder="Select an option">
                            <option disabled="disabled" selected="selected">Choose option</option>
                                    
                                        <option>General</option>
                                        <option>Cardiology</option>
                                        <option>Dentist</option>
                                        <option>Dermatology</option>
                                        <option>Ophtalmology</option>
                                        <option>Secretary</option>
                                        <option>Admin</option>
                                        
                                </select></div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            editer user
                        </button>
                    </form>
                    <hr>
                   
                </div>
            </div>
        </div>
    </div>


                        <script type="text/javascript">
                        
                        
        var password = document.getElementById("password")
    , confirm_password = document.getElementById("password_confirmation");

    function validatePassword(){
    if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
        confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;




    var currentValue = 0;
function handleClick(myRadio) {
    
        var sel = document.getElementById('specialite');
    var opts = sel.options;			
    if(myRadio.value=="2"){
    var val = "Secretary";
        for (var opt, j = 0; opt = opts[j]; j++) {
            if (opt.value == val) {
                sel.selectedIndex = j;
                break;
            }
        }
    }
    else if(myRadio.value=="0"){
    var val = "Admin";
        for (var opt, j = 0; opt = opts[j]; j++) {
            if (opt.value == val) {
                sel.selectedIndex = j;
                break;
            }
        }
    }
    else {
        var val = "Choose option";
        for (var opt, j = 0; opt = opts[j]; j++) {
            if (opt.value == val) {
                sel.selectedIndex = j;
                break;
            }
        }
    }

}


                        
                        </script>
   

@endsection
