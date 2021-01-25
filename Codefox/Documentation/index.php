<?php
require_once 'koneksi.php';
session_start();
if ( ! isset($_SESSION['log']) ) {
    header('location: ../index.php');
    exit; 
}


// require_once('config/+koneksi.php');
// require_once('models/+database.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Codefox - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    App favicon
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    App css
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" /> 


</head>

<body>
    <body>

        <!-- Begin page -->
        <div id="wrapper">
    
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
    
            <div class="content-page">
                <div class="content">
    
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <a href="index.html" class="logo text-center d-none d-md-inline-block mr-2">
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="18">
                            </span>
                        </a>
    
                        <button type="button" class="btn btn-sm btn-dark d-inline-block d-lg-none button-menu-mobile">Menu</button>
              

                        <span class="badge badge-danger float-right"><a href="logout.php"  class="btn btn_info" onclick="return confirm('yakin logout?')">LOG OUT</a></span>
                
                        <!-- <span class="badge badge-danger float-right">v3.1.0</span> -->
                    </div>
                    <!-- end Topbar -->
    
                    <!-- Start Content-->
                    <div class="container-fluid">
    
                        <div class="page-wrapper">
                            <div class="left-sidebar">
                                <div class="slimscroll-menu">
                                    <div class="list-group list-group-transparent mb-0">
    
                                        <span class="list-group-item disabled">
                                            Getting Started
                                        </span>
    
                                        <a href="index.php" class="list-group-item list-group-item-action active">
                                            <span class="mr-2">
                                                <i class="mdi mdi-flag-variant-outline"></i>
                                            </span>Introduction
                                        </a>
    
                                        <a href="setup.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-apps"></i>
                                            </span>Setup
                                        </a>
    
                                        <a href="customization.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </span>Customization
                                        </a>
    
                                        <a href="plugins-uses.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-widgets"></i>
                                            </span>How to use plugins
                                        </a>
    
                                        <span class="list-group-item disabled">
                                            Layout
                                        </span>
    
                                        <a href="vertical.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-menu"></i>
                                            </span>Vertical Layouts
                                        </a>
    
                                        <a href="horizontal.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-page-layout-sidebar-left"></i>
                                            </span>Horizontal Layouts
                                        </a>
    
                                        <a href="dark.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-briefcase-outline"></i>
                                            </span>Dark Version
                                        </a>
            
                                        <a href="rtl.html" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-page-layout-sidebar-left"></i>
                                            </span>RTL Version
                                        </a>
    
                                        <span class="list-group-item disabled">
                                            Peserta
                                        </span>
    
                                        <a href="editprofile.php" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-book-open-page-variant"></i>
                                            </span>Daftar Peserta
                                        </a>

<a href="addpeserta.php" class="list-group-item list-group-item-action ">
                                            <span class="mr-2">
                                                <i class="mdi mdi-book-open-page-variant"></i>
                                            </span>Tambah Peserta
                                        </a>

                                       
            
                                    </div>
                                </div>
                            </div>
                            <!-- end left-sidebar-->
    
                            <div class="page-content">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="p-lg-3">
                                            <h3 class="mt-0 mb-2 font-weight-bold">Introduction</h3>
    
                                            <hr />
    
                                            <p>Codefox is a premium and multi featured bootstrap 4 admin template with flat
                                                design. It is built using html5, css3 and other modern frontend
                                                technologies. The flexibility around choosing the layout options and great
                                                collection of reusable widgets, components, elements etc allows you to
                                                easily build a web application including custom admin panel, project
                                                management system, crm, cms, etc. It is fully responsive and works on all
                                                major web browsers, desktop and all smart phone devices.
                                            </p>
                                            <p>
                                                We really care for our buyers and so in case if you are having any question
                                                or feedback, please feel free to get back to
                                                us via email <code>support@coderthemes.com</code> or by filling out contact
                                                form on our <a href="http://coderthemes.com/#contact"
                                                    target="_blank">website</a>.
                                            </p>
                                        </div>
    
                                        <div class="p-lg-3">
                                            <h4 class="mt-0 mb-2 font-weight-bold">Structure</h4>
    
                                            <p>Extract the zip file you received after purchase and you would find the exact
                                                below
                                                files and folders:
                                            </p>
    
                                            <pre>
    
    ├── dark
    │     ├── dist
    │     ├── src/
    │     │   └── data
    │     │   └── fonts
    │     │   └── images
    │     │   └── html
    │     │   └── js
    │     │   └── scss
    │     ├── gulpfile.js
    │     ├── package.json
    │     ├── package-lock.json
    │     └── README.md
    ├── dark-horizontal
    ├── light
    ├── light-horizontal
                                                    </pre>
    
                                        </div>
                                        <div class="p-lg-3">
                                            <h4 class="mt-0 mb-2 font-weight-bold">Credits/Plugins</h4>
                                            <p>
                                                Here is the list of Plugins (with a link to the official documentation)
                                                which helped us to make Ubold better.
                                            </p>
    
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Plugins</th>
                                                            <th>Url</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bootstrap</td>
                                                            <td><a href="http://getbootstrap.com/"
                                                                    target="_blank">http://getbootstrap.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>jQuery</td>
                                                            <td><a href="https://jquery.com/"
                                                                    target="_blank">https://jquery.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap Maxlength</td>
                                                            <td><a href="https://mimo84.github.io/bootstrap-maxlength/"
                                                                    target="_blank">https://mimo84.github.io/bootstrap-maxlength/</a>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Chart-js</td>
                                                            <td><a href="https://www.chartjs.org/"
                                                                    target="_blank">https://www.chartjs.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Datatables</td>
                                                            <td><a href="https://datatables.net/"
                                                                    target="_blank">https://datatables.net/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dropify</td>
                                                            <td><a href="http://jeremyfagis.github.io/dropify/"
                                                                    target="_blank">http://jeremyfagis.github.io/dropify/</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fullcalendar</td>
                                                            <td><a href="https://fullcalendar.io/"
                                                                    target="_blank">https://fullcalendar.io/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gmaps</td>
                                                            <td><a href="https://hpneo.github.io/gmaps/examples.html"
                                                                    target="_blank">https://hpneo.github.io/gmaps/examples.html</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ion-rangeslider</td>
                                                            <td><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html"
                                                                    target="_blank">http://ionden.com/a/plugins/ion.rangeSlider/en.html</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-knob</td>
                                                            <td><a href="http://anthonyterrien.com/demo/knob/"
                                                                    target="_blank">http://anthonyterrien.com/demo/knob/</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-mask-plugin</td>
                                                            <td><a href="https://github.com/igorescobar/jQuery-Mask-Plugin"
                                                                    target="_blank">https://github.com/igorescobar/jQuery-Mask-Plugin</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-scrollto</td>
                                                            <td><a href="https://github.com/flesler/jquery.scrollTo"
                                                                    target="_blank">https://github.com/flesler/jquery.scrollTo</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-sparkline</td>
                                                            <td><a href="https://omnipotent.net/jquery.sparkline/#s-about"
                                                                    target="_blank">https://omnipotent.net/jquery.sparkline/#s-about</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Toastr</td>
                                                            <td><a href="https://github.com/CodeSeven/toastr"
                                                                    target="_blank">https://github.com/CodeSeven/toastr</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-ui</td>
                                                            <td><a href="https://jqueryui.com/"
                                                                    target="_blank">https://jqueryui.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-vectormap</td>
                                                            <td><a href="http://jvectormap.com/"
                                                                    target="_blank">http://jvectormap.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Moment</td>
                                                            <td><a href="https://momentjs.com/"
                                                                    target="_blank">https://momentjs.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Summernote</td>
                                                            <td><a href="https://summernote.org/"
                                                                    target="_blank">https://summernote.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sweetalert2</td>
                                                            <td><a href="https://sweetalert2.github.io/"
                                                                    target="_blank">https://sweetalert2.github.io/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Switchery</td>
                                                            <td><a href="http://abpetkov.github.io/switchery/"
                                                                    target="_blank">http://abpetkov.github.io/switchery/</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>X-editable</td>
                                                            <td><a href="https://vitalets.github.io/x-editable/"
                                                                    target="_blank">https://vitalets.github.io/x-editable/</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap Datepicker</td>
                                                            <td><a href="https://uxsolutions.github.io/bootstrap-datepicker/"
                                                                    target="_blank">https://uxsolutions.github.io/bootstrap-datepicker/</a>
                                                            </td>
                                                        </tr>
    
                                                    </tbody>
                                                </table>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <!-- end page-wrapper-->
    
                        <div class="row">
                            <div class="col-md-2">
    
                            </div>
    
                            <div class="col-md-10">
    
                            </div>
                        </div>
                    </div>
    
                </div>
                <!-- content -->
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2017 - 2020 © Codefox - by Coderthemes
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="http://coderthemes.com/" target="_blank">About</a>
                                    <a href="http://coderthemes.com/#contact" target="_blank">Support</a>
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
    
        <!-- bundle -->
        <script src="assets/js/app.min.js"></script>
    
    </body>

</body>

</html>