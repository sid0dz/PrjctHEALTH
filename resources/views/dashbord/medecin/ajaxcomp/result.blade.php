<tr> <th> Date </th> <th> Info </th> <th> Medecin </th> <th></th></tr>
@foreach ($maladies as $maladie)

<tr><td> {{$maladie['date']}} </td> <td>{{$maladie['type']}} </td><td> {{$maladie['medid']}} </td><td>
    @if($p=='4')

   <a href="/{{$maladie['id']}}/editorientation"class="btn btn-success btn-circle ">
       <i class="fas fa-edit"> </i>
</a>
   @endif
<a herf="#" data-toggle="modal" onclick="@if($op==0)
deleteMal({{$maladie->id}})
@elseif($op==1)
deleteAlr({{$maladie->id}})
@elseif($op==2)
deleteCom({{$maladie->id}})
@elseif($op==4)
deleteor({{$maladie->id}})
@endif



" data-target="#confirmDeleteModel" title="supprimer" class="btn btn-danger btn-circle "  >
       <i class="fas fa-trash"> </i>

</a></tr>



@endforeach