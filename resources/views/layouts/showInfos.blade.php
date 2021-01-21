
@if(Auth::user()->role == 1)
@include('dashbord.medecin.showInfo')

@elseif(Auth::user()->role == 2)
@include('dashbord.secretary.showInfo')
@else
<script>window.location = "/";</script>
@endif
