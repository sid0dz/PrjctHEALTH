@extends('layouts.parentLayout')
@section('sidebar')
@include('layouts.admin.sidebar')
@endsection
@section('content')

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of all users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Specialité</th>
											<th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Specialité</th>
											<th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
      @foreach ($usersData  as $user)
        <tr>
          <td>{{$user->id}}</td>
		  <td>{{$user->fname}} {{$user->lname}}</td> 
		  <td>{{$user->email}}</td>
          <td>{{($user->role==0)?"Admin":(($user->role==1)?"Medecin":"Secretary")}}</td>
          <td>{{$user->specialite}}</td>
          <td>
              
          <form action="/show_users" method="post">

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
                        </div>
                    </div>

                </div>
	
    <!-- Page level plugins -->
	

  </div>
  @endsection
  