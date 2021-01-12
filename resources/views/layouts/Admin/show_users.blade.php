@extends('layouts.parentLayout')
@section('sidebar')
@include('layouts.admin.sidebar')
@endsection
@section('content')
<?php
use App\User;

        $users = User::all();

		?>
	<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/table_util.css">
	<link rel="stylesheet" type="text/css" href="css/table_main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								ID
							</div>
							<div class="cell">
								Full Name
							</div>
							<div class="cell">
								Mail Adress
							</div>
							<div class="cell">
								Role
							</div>
							<div class="cell">
								Speciality
							</div>
						</div>

						<?php 
						foreach($users as $user){
						echo '<div class="row">
							<div class="cell" data-title="ID">'.$user->id.'
								
							</div>
							<div class="cell" data-title="Full Name">
								'.$user->fname.' '.$user->lname.'
							</div>
							<div class="cell" data-title="Mail Adress">
								'.$user->email.'
							</div>
                            <div class="cell" data-title="Role">';
                            echo (($user->role)=='0'?"Admin":(($user->role)=='1'?"Doctor":"Secretary"));

                    echo '</div>
							<div class="cell" data-title="Speciality">
								'.$user->specialite.'
							</div>
						</div>';

						}
						?>

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    @endsection