<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Title Page-->
    <title>Register </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/registerSheet.css" rel="stylesheet" media="all">
</head>

<body>
<style>
            /*css style for IE*/
            select[disabled='disabled']::-ms-value {
                color: #000;
            }
            /*Specific to chrome and firefox*/
            select[disabled='disabled'] {
                color: #0F0;
            }
        </style>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    
					<h2 class="title">Registration Form</h2>
                    <font color =red>                                
					@if($errors->any())
    {{ implode('', $errors->all(':message ')) }}
	
@endif</font>
					<form method="POST" action="{{ route('register') }}">
					@csrf
					
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="fname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" id="password">
                                </div>
                            </div>
                        </div>
                        
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Are you a </label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Doctor
                                            <input type="radio" checked="checked" name="role" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Secretary
                                            <input type="radio" name="role" value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="password_confirmation" id="password_confirmation">
                                </div>
                            </div>
                            
                        </div>
                        <div class="input-group">
                            <label class="label">Domain of speciality</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="specialite" id="specialite" >
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>General</option>   
									<option>Cardiology</option>
									<option>Dentist</option>
                                    <option>Dermatology</option>
                                    <option>Ophtalmology</option>
									<option><p aria-hidden="true">Secretary</p></option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						<script type="text/javascript">
							$('input[name="role"]').on('change', function() {
							if (this.value=="2") $('#specialite').val('Secretary');
	});
							$('select[name="specialite"]').on('change', function() {
							if (document.getElementById("role").value == "2" ) $('#specialite').val('Secretary');
	});
	
	
	
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
    </script>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/registerJS.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->