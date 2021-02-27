@extends('layouts.secretaire')
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
                    <div class="card-header py-2">
                        <font class="m-0 font-weight-bold text-primary">Generer un rapport</font>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-borderless table-hover" id="choice" width="100%" cellspacing="0">
                                <tbody>
                                    <tr style="border-left: black solid;border-right: black solid;border-top: black solid;"><td><input type="checkbox" name="pat"> Medecin: </td>
                                        <td><input type="radio" name="med"> Medecin disponible Total
                                            <input type="radio" name="med" class="ml-5"> Medecin disponible par departement
                                        </td>
                                    </tr>
                                    <tr><td colspan="2" style="border-left: black solid;border-right: black solid;border-bottom: black double;"> <center> 
                                                <input type="checkbox" class="ml-2" name='dm'> Dermathologie
                                                <input type="checkbox" name='dn' class="ml-4" > Dentiste
                                                <input type="checkbox" name='cr' class="ml-4" > Cardiologie
                                                <input type="checkbox" name='gn' class="ml-4" > Generaliste
                                                <input type="checkbox" name='dn' class="ml-4" > Dentiste
                                                <input type="checkbox" class="ml-2" name='op'> Ophtalmologie
                                                </center>
                                            </tr>
                                    <tr style="border-left: black solid;border-right: black solid;border-top: black solid;">
                                        <td rowspan="4"><input type="checkbox" name="pat" > Patients : </td>
                                        <td> <input type="radio" name="pat" class="mr-2"> Totale </td>
                                    </tr>
                                        <tr style="border-right: black solid;"><td> <input type="radio" name="pat" class="mr-2" >Par jour <input type="date" class="ml-4"></td></tr>
                                        <tr style="border-right: black solid;"><td><input type="radio" name="pat" class="mr-2">Par mois <input type="month" class="ml-3"></td></tr>
                                        <tr style="border-right: black solid;"><td><input type="radio" name="pat" class="mr-2">Par année <input type="year" class="ml-2"></td></tr>
                                            
                                    </tr>
                                    <tr style="border-right: black solid;border-left: black solid;border-bottom: black solid;"><td>Department:</td> <td> 
                                        <input type="checkbox" name='dm'> Tout
                                        <input type="checkbox" name='dm'> Dermathologie
                                                <input type="checkbox" name='dn'> Dentiste
                                                <input type="checkbox" name='cr'> Cardiologie
                                                <input type="checkbox" name='gn'> Generaliste
                                                <input type="checkbox" name='dn'> Dentiste
                                                <input type="checkbox" name='op'> Ophtalmologie
                                                
                                            </tr>

                               <tr>
                               
                                  
                   
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
            