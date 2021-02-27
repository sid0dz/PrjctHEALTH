@extends('layouts.medecin')
@section('content')

<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
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


<!-- Page Wrapper -->

    <!-- Sidebar -->

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->

        <!-- Main Content -->

            <!-- Topbar -->


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                         <font class="m-0 font-weight-bold text-primary">Liste des patients</font>
                        <a href="/addpatientM" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Ajouter Patient</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Date de naissance</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>№ Securité Social</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                      <th>Nom</th>
                                      <th>Date de naissance</th>
                                      <th>Telephone</th>
                                      <th>Email</th>
                                      <th>№ Securité Social</th>
                                      <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($mes  as $patient)
                                  <tr style="cursor: pointer;" onClick="window.location.href='/show_infos/{{$patient->id}}'">
                                               
                                    <td>{{$patient->name}}</td>
                                <td>{{$patient->patient_birth_date}}</td> 
                                <td>{{$patient->phone}}</td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{$patient->npatient}}</td> </a>
                                    <td>
                                      
                            
                                        
                                                     <a   data-toggle="tooltip" title="Prendre rendez-vous" href="/newRDV/{{$patient->id}}/{{Auth::id()}}/" alt="Prendre Rendez-vous" class="btn btn-success btn-circle">
                                               <i class="fas fa-table"> </i>
                                              </a>
                                              <a href="/show_infos/{{$patient->id}}" title="Voir les informations" class="btn btn-primary btn-circle ">
                                                      <i class="fas fa-arrow-right"> </i>
                            
                                         
                                                        
                                              
                                              
                                              
                              
                                    </td>
                                  </tr>
                                  @endforeach   
                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        
        <!-- End of Main Content -->

        <!-- End of Footer -->
    <!-- End of Content Wrapper -->

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->

<!-- Bootstrap core JavaScript-->
</body>
    




            @endsection
            
