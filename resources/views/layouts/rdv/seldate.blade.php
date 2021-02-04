
@extends('layouts.secretaire')
@section('content')


<link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{URL::asset('css/sb-admin-2.min.css')}}" rel="stylesheet">


<!-- Core plugin JavaScript-->
<script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->

<!-- Page level plugins -->
<script src="{{URL::asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{URL::asset('js/demo/datatables-demo.js')}}"></script>

<!-- Custom styles for this page -->
<link href="{{URL::asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


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
                    
                    <div class="card-body">
                        <div class="center">
                        <h4>Select Date</h4><div class="input-group date" data-provide="datepicker">
                            <span class="glyphicon glyphicon-th"><input type="date" class="form-control" id="dateP" onchange="doit();">
                            <div class="input-group-addon" >
                            <a href="#" id="lol" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <br>
                                <span class="text">Selectionner Heure</span>
                            </a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
            <script>
function doit(){
var datt = document.getElementById("dateP").value;    
var btnlol = document.getElementById("lol").href ="{{URL::current()}}/"+datt;
}


            </script>
        
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
