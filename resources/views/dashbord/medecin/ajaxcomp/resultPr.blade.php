<tr> <th> Date </th> <th> Medicaments(Medic-Dose-Prise-Duree) </th> <th> Medecin </th> <th></th></tr>
@foreach ($maladies as $maladie)

<tr><td> {{$maladie['date']}} </td> <td>{{$maladie['type']}} </td><td> {{$maladie['medid']}} </td><td>

  

</a>  <a herf="#" data-toggle="modal" onclick="deletePr({{$maladie->id}})" data-target="#confirmDeleteModel" title="supprimer" class="btn btn-danger btn-circle "  >
        <i class="fas fa-trash"> </i>
 
 </a></tr>



@endforeach