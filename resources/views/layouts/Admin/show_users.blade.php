
@extends('layouts.Admin.admin')
@section('content')

<link href="css/sb-admin-2.min.css" rel="stylesheet">


<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
                    <div class="card shadow mb-4 mr-2 ml-2">
                        <div class="card-header py-2">
                            <font class="m-0 font-weight-bold text-primary">List of all users</font>
                            <a href="/newUser" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Ajouter Utilisateur</a>

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
             
          <form action="{{route('deleteUser',['id'=>$user->id])}}" method="post">

              {{csrf_field()}}
				       {{method_field('DELETE')}}

               <a href="{{route('editUser',['id'=>$user->id])}}"  class="btn btn-warning btn-circle ">
                <i class="fas fa-edit"> </i>
              </a>
               

                <button  data-toggle="modal"  data-target="#confirmDeleteModel" title="supprimer" class="btn btn-danger btn-circle " type="submit"  >
                 <i class="fas fa-trash"> </i>
              </button>
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
	

  @endsection
  
