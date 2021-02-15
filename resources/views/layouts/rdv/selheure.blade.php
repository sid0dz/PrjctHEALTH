
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
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primarmy">Choisir Heure</h6>
                    </div>
                    <div class="card-body">
                        <div class="table" id="tabledata">
                           

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


<script>
    function loadTable(){

        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('tabledata').innerHTML=this.responseText;
        
    }
  };
  xhttp.open("GET", "{{ url('tabledata', [$data['id'],$data['medid'],$data['date']]) }}", true);
  xhttp.send();


    }
    loadTable();


    function changemodel (rdvid){
        var confr = document.getElementById("confirmdeletebutton");
        confr.setAttribute('onclick',"confirmdelete("+rdvid+")");        

    }


    function confirmdelete(rdvid){
        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        $('.toast').toast({
    'autohide': true,
    'delay':  5000
  });

  $('.toast').toast('show');
    loadTable();
    }
  };
  xhttp.open("GET", "/deleteRdv/"+rdvid, true);
  xhttp.send();
  document.getElementById("dsm").click();


    }
    
    
    </script>

<!-- Bootstrap core JavaScript-->
</body>
    




            @endsection


