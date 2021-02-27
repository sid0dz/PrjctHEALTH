<tr> <th> Date </th> <th> Info </th> <th> Medecin </th> <th></th></tr>
@foreach ($maladies as $maladie)

<tr><td> {{$maladie['date']}} </td> <td>{{$maladie['type']}} </td><td> {{$maladie['medid']}} </td><td>
    @if($p=='true')
    <a href="#" title="imprimer" class="btn btn-success btn-circle ">
    <i class="fas fa-print"> </i>
   </a>
   @endif
<a herf="#" data-toggle="modal" onclick="deleteor({{$maladie->id}})" data-target="#confirmDeleteModel" title="supprimer" class="btn btn-danger btn-circle "  >
       <i class="fas fa-trash"> </i>

</a></tr>



@endforeach