<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<meta http-equiv="refresh" content="1; URL={{ url('/admin') }}" />
						<center> Logged in! Please wait... </center>
                   
                </div>
            </div>
        </div>
    </div>
</div>
