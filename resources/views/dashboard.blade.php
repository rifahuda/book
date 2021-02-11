<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>mahirfinansial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap select pluings -->
        <link href="{{asset('codefox/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- c3 plugin css -->
        <!-- <link rel="stylesheet" type="text/css" href="assets/libs/c3/c3.min.css"> -->

        <!-- App css -->
        <link href="{{asset('codefox/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('codefox/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('codefox/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link href="{{asset('codefox/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css " />
        <link href=" {{asset('codefox/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('codefox/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css " />
        <link href="{{asset('codefox/libs/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css " />
        <link href="{{asset('codefox/libs/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css " />
        <link href="{{asset('codefox/libs/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css " />
        <link href="{{asset('codefox/libs/datatables/fixedColumns.bootstrap4.min.css')}}" rel="stylesheet" type="text/css " />


        <link href="{{asset('codefox/libs/nestable2/jquery.nestable.min.cssm ')}}" rel="stylesheet" />

    </head>

    <body data-layout="horizontal"  >

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Navigation Bar-->
            <header id="topnav">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
                    <h3 class="text-white">Selamat Datang di Website : Mahir Finansial</h3>
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                      
                        <!-- <li >                           
                            <a href="#myModal" data-toggle="modal" class="nav-link right-bar-toggle waves-effect text-white waves-light">Edit Profile</a>
                        </li>      -->


                      
                          

                            <li class="dropdown notification-list">
                                <a href="{{route('logout')}}" class="nav-link right-bar-toggle waves-effect waves-light text-white">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                            
                    
            
                            <!-- <li>
                            <a href="{{route('logout')}}">
                                <i class="fa fa-sign-out" ></i> Log out
                            </a>
                        </li> -->

                        </ul>

                        <!-- LOGO -->
                        

                    </div>
                </div>
                <!-- end Topbar -->

                <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
                                <!-- <li class="has-submenu"> -->
                                <li class="has-submenu">

                                    <a href="#myModal" data-toggle="modal" >
                                    
                                    <button type="button" class="btn btn-success waves-effect waves-light">Edit Profile</button>
                                    </a>

                                </li>
                            </ul>
                            <!-- End navigation menu -->

                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end navbar-custom -->

            </header>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                      
                                    </div>
                                 
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        </div>
                        <!-- end row -->
                        <div class="row justify-content-center text-center" style="margin-top:30px;">
                            <div class="col-lg-10">

                     
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                        
                                            <h2 class="mt-0 mb-3"><p><strong>Mahir Finansial</strong></p></h2>
                                            <!-- <div class="col-lg-3 mb-3">
                                                <div class="grid-container">
                                                <h2><strong>Mahir Finansial</strong>  </h2>
                                                </div>
                                            </div> -->

                                            <div class="accordion" id="accordion-test" >
                                                <div class="card mb-2">
                                                     <!-- <div class="card-header bg-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" > -->
                                                        <div class="card-header" style="background:#0d335d !important" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" >

                                                        <h4 class="card-title font-14 mb-0">
                                                            <a href="#" class="text-white collapsed" >
                                                                REFRENSI
                                                            </a>
                                                        </h4>
                                                </div>
                                                <div id="collapseOne" class="collapse">
                                                    <div class="card-header bg-primary" style="background: #1a508b !important; border:0.5px solid white" data-toggle="collapse" data-target="#collapseOneOne" aria-expanded="false" >
                                                        <h4 class="card-title font-14 mb-0">
                                                            <a href="#" class="text-white collapsed" >
                                                                Link Refrensi
                                                            </a>
                                                        </h4>
                                                </div>
                                                <div id="collapseOneOne" class="collapse" data-parent="#accordion-test" >
                                                    <div class="card-body">

                                                        <div class="col-lg">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                
                                                                            <p class="mb-0">Refrensi</p>
                                                                            <p class="mb-0">Refrensi</p>
                                                                            <p class="mb-0">Refrensi</p>
                                                                            <p class="mb-0">Refrensi</p>
                                                                            <p class="mb-0">Refrensi</p>
                                                                            <p class="mb-0">Refrensi</p>
                                                                    

                                                                    <!-- <div class="table-responsive">
                                                                            <table class="table m-0 table-colored-bordered table-bordered-info">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th>Nama</th>
                                                                                    <th>Sumber</th>
                                                                                    <th>Link</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>Panda</td>
                                                                                    <td>Wikipedia</td>
                                                                                    <td><a href="https://en.wikipedia.org/wiki/Giant_panda">Giant Panda</a></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <th scope="row">2</th>
                                                                                    <td>Harimau</td>
                                                                                    <td>Wikipedia</td>
                                                                                    <td><a href="https://en.wikipedia.org/wiki/Harimau">Harimau</a></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <th scope="row">3</th>
                                                                                    <td>Buaya</td>
                                                                                    <td>Wikipedia</td>
                                                                                    <td><a href="https://en.wikipedia.org/wiki/Buaya">Buaya</a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">4</th>
                                                                                    <td>Jerapah</td>
                                                                                    <td>Wikipedia</td>
                                                                                    <td><a href="https://en.wikipedia.org/wiki/Giraffe">Jerapah</a></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <th scope="row">5</th>
                                                                                    <td>Singa</td>
                                                                                    <td>Wikipedia</td>
                                                                                    <td><a href="https://en.wikipedia.org/wiki/Singa">Singa</a></td>
                                                                                </tr>
                                                                            
                                                                            </tbody>
                                                                        </table>
                                                                    </div> 
                                                                -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        </div>
                                                        </div>

                                                        <div class="card-header bg-primary" style="background: #1a508b !important; border:0.5px solid white"  data-toggle="collapse" data-target="#collapseOneTwo" aria-expanded="false" >
                                                            <h4 class="card-title font-14 mb-0">
                                                                <a href="#" class="text-white collapsed" >
                                                                    Borang
                                                                </a>
                                                            </h4>
                                                        </div>
                                        <div id="collapseOneTwo" class="collapse" data-parent="#accordion-test" >
                                            <div class="card-body">
                                            
                                            
                                                <p class="mb-0">Borang</p>
                                                <p class="mb-0">Borang</p>
                                                <p class="mb-0">Borang</p>
                                                <p class="mb-0">Borang</p>
                                                <p class="mb-0">Borang</p>
                                                <p class="mb-0">Borang</p>
                                                
<!-- 
                                                    <div class="table-responsive">
                                                            <table class="table m-0 table-colored-bordered table-bordered-info" id="datatable-responsive">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Email</th>
                                                                    <th>Unik</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>                                                           
                                                            @php $i=1 @endphp
                                                            @foreach($user as $s)
                                                                <tr>
                                                                    <th scope="row">{{$i++}}</th>
                                                                    <td>{{$s->u_name}}</td>
                                                                    <td>{{$s->u_email}}</td>
                                                                    <td>{{$s->u_uniqid}}</td>                                                                  
                                                                </tr>
                                                            @endforeach
                                        
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>                                                   -->
                                      </div>
                                       



                                       <!-- download excel-->
                                        <!-- <a href="{{url('oke')}}">                                   
                                                <button type="button" style="margin-bottom:30px;" class="btn btn-success waves-effect waves-light">Download</button>
                                       </a>  -->


                                        </div>
                                        <div class="card-header bg-primary" style="background: #1a508b !important; border:0.5px solid white"  data-toggle="collapse" data-target="#collapseOneThree" aria-expanded="false" >
                                            <h4 class="card-title font-14 mb-0">
                                                <a href="#" class="text-white collapsed" >
                                                    Template
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOneThree" class="collapse" data-parent="#accordion-test" >
                                            <div class="card-body">
                                                <p class="mb-0">Template</p>
                                                <p class="mb-0">Template</p>
                                                <p class="mb-0">Template</p>
                                                <p class="mb-0">Template</p>
                                                <p class="mb-0">Template</p>
                                                <p class="mb-0">Template</p>
                                            </div>
                                        </div>
                                        <div class="card-header bg-primary" style="background: #1a508b !important; border:0.5px solid white"  data-toggle="collapse" data-target="#collapseOneFour" aria-expanded="false" >
                                            <h4 class="card-title font-14 mb-0">
                                                <a href="#" class="text-white collapsed" >
                                                    Play Card
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOneFour" class="collapse" data-parent="#accordion-test" >
                                            <div class="card-body">
                                                <p class="mb-0">Play Card</p>
                                                <p class="mb-0">Play Card</p>
                                                <p class="mb-0">Play Card</p>
                                                <p class="mb-0">Play Card</p>
                                                <p class="mb-0">Play Card</p>
                                                <p class="mb-0">Play Card</p>
                                            </div>
                                        </div>
                                        <!-- <div class="card-header bg-primary"style="background: DeepSkyBlue !important; border:0.5px solid white"  data-toggle="collapse" data-target="#collapseOneFive" aria-expanded="false" > -->
                                        <div class="card-header bg-primary"style="background: #1a508b !important; border:0.5px solid white"  data-toggle="collapse" data-target="#collapseOneFive" aria-expanded="false" >

                                            <h4 class="card-title font-14 mb-0">
                                                <a href="#" class="text-white collapsed" >
                                                    Video
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOneFive" class="collapse" data-parent="#accordion-test">
                                            <div class="card-body" >
                                            
                                            <!--                                             
                                                tampil gambar lokal
                                                    <div class="col-sm-4">
                                                        <img src="assets/images/bg-01.jpg" alt="image" class="img-fluid rounded" width="200">
                                                        <p class="mb-0">
                                                            <code>.rounded</code>
                                                        </p>
                                                    </div>
                                                        -->
                                            <!-- url('{{asset('assets/images/bg-01.jpg')}}'); -->

                                            <!-- <div class="col-lg6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="head justify-content-between">Local Video</h4>                                                            
                                                        <video width="1400px" height="700px" controls>
                                                                <source src="assets/videos/careful.mp4" type="video/mp4">
                                                                <source src="mov_bbb.ogg" type="video/ogg">
                                                        </video>
                                                    
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div> -->

                                            <p class="mb-0">Video</p>
                                                <p class="mb-0">Video</p>
                                                <p class="mb-0">Video</p>
                                                <p class="mb-0">Video</p>
                                                <p class="mb-0">Video</p>
                                                <p class="mb-0">Video</p>


                                            </div>
                                        </div>
                            </div>
                            </div>



                            
                            <div class="card mb-2"  >
                                        <!-- <div class="card-header bg-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> -->
                                   
                                        <div class="card-header" style="background:#0d335d!important;"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                            <h4 class="card-title font-14 mb-0">
                                                <a href="#" class="text-white collapsed">
                                                   SERVICE
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion-test" >
                                            <div class="card-body">
                                                <p class="mb-0">service</p>
                                            </div>
                                        </div>
                                    </div>


                                        
                                        </div>
                                    
                                    </div>



                        <!-- <div class="row" style="margin-left: 20px;">
                            <div class="col-lg-12">
                                <div class="text-left" id="nestable_list_menu">
                                    <button type="button" class="btn btn-pink waves-effect mb-3 mr-1 waves-light" data-action="expand-all">Expand All</button>
                                    <button type="button" class="btn btn-purple waves-effect mb-3 waves-light" data-action="collapse-all">Collapse All</button>
                                </div>
                            </div> 
                        </div> -->
                                
                            </div>
                            
                     
                            
                        </div>

                  
                              
                                   
                                    
                                  
                                </div>
                             
                            </div>
                        
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->




                <!--baru-->

                <div id="myModal" class="modal fade" role="dialog" style="padding:50px;">
                    <div class="modal-dialog" >
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                 <h4 class="modal-title" id="exampleModalScrollableTitle">Edit Profile</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                            </div>
                    
                            <div class="modal-body"  style="margin-left:20px; margin-right:20px">
                                <form id="formregist">    
                                    <div class="form-group row" >
                                        <label class="col-md-2 col-form-label" for="simpleinput">Username</label>
                                        <div class="col-md-10">
                                        <input type="text" id="username" class="form-control" value="{{Session::get('user')->u_name}}">
                                        <!-- <input type="text" id="username" class="form-control" value=""> -->

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="simpleinput" class="col-md-2 col-form-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="password" >
                                        </div>
                                    </div>                              
                                    {{-- <div class="col-sm-6"> --}}
                                    {{-- </div> --}}
                                </form>
                            </div>
                            <div class="modal-footer"  style="margin-right:20px;">
                                <button type="button" class="btn btn-info waves-effect waves-light" onclick="register()">Simpan</button>
                            </div>
                        </div>

                    </div>
                </div>

                

                <div id="success_tic" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                    <!-- Modal content-->
                        <div class="modal-content">
                             <div class="page-body">
                                <div class="modal-header">                                                  
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            <div class="head justify-content-between" >  
                                <img class="icon-colored " style="margin-left:230px;" alt="" src="assets/images/icons/ok.svg"  title="ok.svg">
                                <h3 style="text-align:center;">Berhasil Ditambah</h3>
                </div>      
        
        
        
        
        
        <h1 style="text-align:center;"><div class="checkmark-circle">
        <div class="background"></div>
        <div class="checkmark draw"></div>
      </div><h1>
      
        </div>
      </div>
          </div>
      
    </div>


                

    {{-- Modal --}}
            <script src="{{asset('assetsadmin/js/jquery-2.1.1.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            <script>
                $('datatable-responsive').DataTables();
                $('nestable_list_menu').NesTable();

                
                $( document ).ready(function() {
                    // $('#myModal').modal('show');
                    // cekAkun();
                });
                function cekAkun(){
                    axios.get("{{route('cekakun')}}", {
                    })
                    .then(function (response) {
                        if(response.status == 200){
                        if(response.data.akun == false){
                                $('#myModal').modal('show');
                        } 
                        }
                    
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                function register(){
                    axios.post("{{route('register')}}", {
                        username: $('#username').val(),
                        password: $('#password').val(),
                
                    })
                    .then(function (response) {
                        console.log(response);
                        $('#formregist')[0].reset();
                        $('#myModal').modal('hide');
                        $('#success_tic').modal('show');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
            </script>

            </div>

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2021 &copy; Mahir Finansial
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{asset('codefox/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('codefox/js/app.min.js')}}"></script>

        <script src=" {{asset('codefox/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <script src=" {{asset('codefox/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script src=" {{asset('codefox/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

        <script src=" {{asset('codefox/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/buttons.print.min.js')}}"></script>

        <script src=" {{asset('codefox/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/dataTables.scroller.min.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/dataTables.colVis.js')}}"></script>
        <script src=" {{asset('codefox/libs/datatables/dataTables.fixedColumns.min.js')}}"></script>

       
        <script src=" {{asset('codefox/js/pages/datatables.init.js')}}"></script>


        <!-- Nestable Plugins js-->
        <script src=" {{asset('codefox/libs/nestable2/jquery.nestable.min.js')}}"></script>

        <!-- Nestable init-->
        <script src="{{asset('codefox/js/pages/nestable.init.js')}}"></script>
        
        
    </body>
</html>