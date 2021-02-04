
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
                        <div class="table">
                           

                            <table class="table table-bordered table-hover"  width="100%" cellspacing="0">

                                <tr>
                                <td>    </td><th colspan="2">:00</td> <th colspan="2" style="border-left: 5px double black">:30 </td>
                                </tr>
                                <tr><th >9h</td> 
                                    @if (count($data["h91"])==1)
                                    <td>{{$data["h91"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/91" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h91"])==2)
                                    <td>{{$data["h91"][0]}}</td>
                                    <td>{{$data["h91"][1]}}</td>
                                    @endif
                                    @if (count($data["h91"])==0)<td> <a href="{{URL::current()}}/91" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h92"])==1)
                                    <td style="border-left: 5px double black">{{$data["h92"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/92" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h92"])==2)
                                    <td style="border-left: 5px double black">{{$data["h92"][0]}}</td>
                                    <td>{{$data["h92"][1]}}</td>
                                    @endif
                                    @if (count($data["h92"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/92" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
                                <tr><th >10h</td> 
                                    @if (count($data["h101"])==1)
                                    <td>{{$data["h101"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/101" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h101"])==2)
                                    <td>{{$data["h101"][0]}}</td>
                                    <td>{{$data["h101"][1]}}</td>
                                    @endif
                                    @if (count($data["h101"])==0)<td> <a href="{{URL::current()}}/101" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h102"])==1)
                                    <td style="border-left: 5px double black">{{$data["h102"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/102" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h102"])==2)
                                    <td style="border-left: 5px double black">{{$data["h102"][0]}}</td>
                                    <td>{{$data["h102"][1]}}</td>
                                    @endif
                                    @if (count($data["h102"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/102" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
                                <tr><th >11h</td> 
                                    @if (count($data["h111"])==1)
                                    <td>{{$data["h111"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/111" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h111"])==2)
                                    <td>{{$data["h111"][0]}}</td>
                                    <td>{{$data["h111"][1]}}</td>
                                    @endif
                                    @if (count($data["h111"])==0)<td> <a href="{{URL::current()}}/111" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h112"])==1)
                                    <td style="border-left: 5px double black">{{$data["h112"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/112" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h112"])==2)
                                    <td style="border-left: 5px double black">{{$data["h112"][0]}}</td>
                                    <td>{{$data["h112"][1]}}</td>
                                    @endif
                                    @if (count($data["h112"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/112" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
                                <tr><th >12h</td> 
                                    @if (count($data["h121"])==1)
                                    <td>{{$data["h121"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/121" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h121"])==2)
                                    <td>{{$data["h121"][0]}}</td>
                                    <td>{{$data["h121"][1]}}</td>
                                    @endif
                                    @if (count($data["h121"])==0)<td> <a href="{{URL::current()}}/121" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h122"])==1)
                                    <td style="border-left: 5px double black">{{$data["h122"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/122" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h122"])==2)
                                    <td style="border-left: 5px double black">{{$data["h122"][0]}}</td>
                                    <td>{{$data["h122"][1]}}</td>
                                    @endif
                                    @if (count($data["h122"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/122" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
                                
                                <tr><td colspan="5" align="center">Pause dejeuner </td></tr>
                                
                                <tr><th >14h</td> 
                                    @if (count($data["h141"])==1)
                                    <td>{{$data["h141"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/141" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h141"])==2)
                                    <td>{{$data["h141"][0]}}</td>
                                    <td>{{$data["h141"][1]}}</td>
                                    @endif
                                    @if (count($data["h141"])==0)<td> <a href="{{URL::current()}}/141" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h142"])==1)
                                    <td style="border-left: 5px double black">{{$data["h142"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/142" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h142"])==2)
                                    <td style="border-left: 5px double black">{{$data["h142"][0]}}</td>
                                    <td>{{$data["h142"][1]}}</td>
                                    @endif
                                    @if (count($data["h142"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/142" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
                                <tr><th >15h</td> 
                                    @if (count($data["h151"])==1)
                                    <td>{{$data["h151"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/151" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h151"])==2)
                                    <td>{{$data["h151"][0]}}</td>
                                    <td>{{$data["h151"][1]}}</td>
                                    @endif
                                    @if (count($data["h151"])==0)<td> <a href="{{URL::current()}}/151" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h152"])==1)
                                    <td style="border-left: 5px double black">{{$data["h152"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/152" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h152"])==2)
                                    <td style="border-left: 5px double black">{{$data["h152"][0]}}</td>
                                    <td>{{$data["h152"][1]}}</td>
                                    @endif
                                    @if (count($data["h152"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/152" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
                                <tr><th >16h</td> 
                                    @if (count($data["h161"])==1)
                                    <td>{{$data["h161"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/161" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h161"])==2)
                                    <td>{{$data["h161"][0]}}</td>
                                    <td>{{$data["h161"][1]}}</td>
                                    @endif
                                    @if (count($data["h161"])==0)<td> <a href="{{URL::current()}}/161" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                    @if (count($data["h162"])==1)
                                    <td style="border-left: 5px double black">{{$data["h162"][0]}}</td>                          
                                    <td> <a href="{{URL::current()}}/162" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td>
                                    @endif
                                    @if (count($data["h162"])==2)
                                    <td style="border-left: 5px double black">{{$data["h162"][0]}}</td>
                                    <td>{{$data["h162"][1]}}</td>
                                    @endif
                                    @if (count($data["h162"])==0)<td style="border-left: 5px double black"> <a href="{{URL::current()}}/162" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Prendre RdV</span>
                                    </a></td><td></td>
                                    @endif
                                </tr>
        
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


