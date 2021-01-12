@if (Auth::checK())
	@if(Auth::user()->role == 0)
		@include('layouts.admin.admin')

	@elseif(Auth::user()->role == 1)
		@include('layouts.medecin')

	@elseif(Auth::user()->role == 2)
		@include('layouts.secretaire')
	@endif
	@else
		<script>window.location = "/";</script>
@endif
	