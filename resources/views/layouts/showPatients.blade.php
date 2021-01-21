
@if(Auth::user()->role == 1)
    @include('dashbord.medecin.patients')

@elseif(Auth::user()->role == 2)
    @include('dashbord.secretary.patients')
@else
    <script>window.location = "/";</script>
@endif
