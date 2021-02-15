@foreach ($maladies as $maladie)
<tr><td> {{$maladie['date']}} </td> <td>{{$maladie['type']}} </td><td> {{$maladie['medid']}} </td></tr>



@endforeach