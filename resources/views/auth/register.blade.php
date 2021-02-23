<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                
                    <div class="">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                <font color =red>                                
					@if($errors->any())
    {{ implode('', $errors->all(':message ')) }}
	
@endif</font>
							</div>
                            <form class="user" method="POST" action="{{ route('register') }}">
								@csrf
                               <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="fname" name="fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="lname" name="lname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password_confirmation" name="password_confirmation" placeholder="Repeat Password">
                                    </div>
                                </div>
								
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">	
								<label><font size="4px" style="padding-left:20px;">Doctor
                                            <input type="radio" checked="checked" name="role" onclick="handleClick(this)" value="1">
                                            <span class="checkmark"></span>
                                        </label>		           
                                        <label style="padding-left:20px;">Secretary
                                            <input type="radio" name="role" onclick="handleClick(this)" value="2">
                                            <span class="checkmark"></span>
                                        </font></label>                                        </div>
                                    <div class="col-sm-6">
                                        <select class="form-control chosen-select" style="border-radius: 50px;" id="specialite" name="specialite"
                                            placeholder="Select an option">
                                    <option disabled="disabled" selected="selected">Choose option</option>
											
												<option>General</option>
												<option>Cardiology</option>
												<option>Dentist</option>
												<option>Dermatology</option>
												<option>Ophtalmology</option>
												<option>Secretary</option>
										</select></div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{url('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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
                                       
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>