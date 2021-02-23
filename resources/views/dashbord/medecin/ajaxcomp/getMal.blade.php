<tr> <th> Date </th> <th> Info </th> <th> Medecin </th> </tr>
@foreach ($maladies as $maladie)

<tr><td> {{$maladie['date']}} </td> <td>{{$maladie['type']}} </td><td> {{$maladie['medid']}} </td></tr>



@endforeach