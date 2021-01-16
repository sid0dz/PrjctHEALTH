@extends('layouts.secretaire')
@section('content')

<a class="btn btn-primary float-right" href="{{url('dashbord/addpatient')}}"> <i class="fas fa-plus mr-2"></i> Ajouter</a>

<div class="card-body table-responsive p-0">
    <table id="usrTable" class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th onclick="sortTable(0)">Nom</th>
          <th onclick="sortTable(1)">N° de securité</th>
          <th onclick="sortTable(2)">Date de naissance </th>
          <th onclick="sortTable(3)">Telephone</th>
          <th onclick="sortTable(4)">Email</th>
          
        </tr>
      </thead>
      <tbody>
      @foreach ($mes  as $patient)
        <tr>
          <td>{{$patient->name}}</td>
          <td>{{$patient->npatient}}</td>
          <td>{{$patient->patient_birth_date}}</td>
          <td>{{$patient->phone}}</td>
          <td>{{$patient->email}}</td>

          <td class="">
              
          <form action="#" method="post">

              {{csrf_field()}}
              {{method_field('DELETE')}}
                
         
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
  </div>
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


@endsection