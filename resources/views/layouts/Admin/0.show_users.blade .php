@extends('layouts.parentLayout')
@section('sidebar')
@include('layouts.admin.sidebar')
@endsection
@section('content')

	<link rel="stylesheet" type="text/css" href="css/table_util.css">
	<link rel="stylesheet" type="text/css" href="css/table_main.css">
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell" onclick=" sortTable(0)">
								ID
							</div>
							<div class="cell"onclick=" sortTable(1)">
								Full Name
							</div>
							<div class="cell" onclick="sortTable(2)">
								Mail Adress
							</div>
							<div class="cell" onclick="sortTable(3)">
								Role
							</div>
							<div class="cell" onclick="sortTable(4)">
								Speciality
							</div>
						</div>

					
						@foreach($usersData as $user)
						<div class="row">
							<div class="cell" data-title="ID">{{$user->id}}
								
							</div>
							<div class="cell" data-title="Full Name">
							{{$user->fname}} {{$user->lname}}
							</div>
							<div class="cell" data-title="Mail Adress">
							{{$user->email}}
							</div>
                            <div class="cell" data-title="Role">

                    </div>
							<div class="cell" data-title="Speciality">
							{{$user->specialite}}
							</div>
						</div>

						@endforeach
						

					</div>
			</div>
		</div>
	</div>


	
	<script src="js/table_main.js"></script>
    @endsection