@extends('layouts.parentLayout')
@section('sidebar')
@include('layouts.admin.sidebar')
@endsection
@section('content')

	
<div class="card-body table-responsive p-0">
    <table id ="usrTable" class="table table-hover text-nowrap" >
      <thead>
        <tr>
          <th onclick="sortTable(0)" style="cursor: pointer;
		  color: white;
		  background: #4e73df">ID</th>
          <th onclick="sortTable(1)" style="cursor: pointer;
		  color: white;
		  background: #4e73df">Nom</th>
          <th onclick="sortTable(2)" style="cursor: pointer;
		  color: white;
		  background: #4e73df">Email</th>
          <th onclick="sortTable(3)" style="cursor: pointer;
		  color: white;
		  background: #4e73df">Role</th>
          <th onclick="sortTable(4)" style="cursor: pointer;
		  color: white;
		  background: #4e73df">Specialité</th>
          <th onclick="sortTable(4)" style="cursor: pointer;
		  color: white;
		  background: #4e73df">Actions</th>
          
        </tr>
      </thead>
      <tbody>
      @foreach ($usersData  as $user)
        <tr>
          <td>{{$user->id}}</td>
		  <td>{{$user->fname}} {{$user->lname}}</td> 
		  <td>{{$user->email}}</td>
          <td>{{($user->role==0)?"Admin":(($user->role==1)?"Medecin":"Secretary")}}</td>
          <td>{{$user->specialite}}</td>

          <td class="">
              
          <form action="#" method="post">

              {{csrf_field()}}
              {{method_field('deleteUser')}}
                
         
              <a href="#Define"  class="btn btn-warning btn-circle ">
                <i class="fas fa-edit"> </i>
              </a> 
                
               <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?') "class="btn btn-danger btn-circle">
                <i class="fas fa-trash"> </i>
              </a>
              </form>
          </td>
        </tr>
        @endforeach   
       
      </tbody>
	</table>
	<script>function sortTable(n) {
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		table = document.getElementById("usrTable");
		switching = true;
		// Set the sorting direction to ascending:
		dir = "asc";
		/* Make a loop that will continue until
		no switching has been done: */
		while (switching) {
		// Start by saying: no switching is done:
		switching = false;
		rows = table.rows;
		/* Loop through all table rows (except the
		first, which contains table headers): */
		for (i = 1; i < (rows.length - 1); i++) {
		  // Start by saying there should be no switching:
		  shouldSwitch = false;
		  /* Get the two elements you want to compare,
		  one from current row and one from the next: */
		  x = rows[i].getElementsByTagName("TD")[n];
		  y = rows[i + 1].getElementsByTagName("TD")[n];
		  /* Check if the two rows should switch place,
		  based on the direction, asc or desc: */
		  if (dir == "asc") {
		  if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
			// If so, mark as a switch and break the loop:
			shouldSwitch = true;
			break;
		  }
		  } else if (dir == "desc") {
		  if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
			// If so, mark as a switch and break the loop:
			shouldSwitch = true;
			break;
		  }
		  }
		}
		if (shouldSwitch) {
		  /* If a switch has been marked, make the switch
		  and mark that a switch has been done: */
		  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		  switching = true;
		  // Each time a switch is done, increase this count by 1:
		  switchcount ++;
		} else {
		  /* If no switching has been done AND the direction is "asc",
		  set the direction to "desc" and run the while loop again. */
		  if (switchcount == 0 && dir == "asc") {
		  dir = "desc";
		  switching = true;
		  }
		}
		}
	  }</script>



  </div>
   @endsection