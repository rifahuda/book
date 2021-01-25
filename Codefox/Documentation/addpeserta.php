<?php
require_once 'koneksi.php';

if(isset($_POST['btnsave']))
{
	$username = $_POST['user_name'];
    $name = $_POST['name'];
	$password = $_POST['password'];
    

	if(empty($username)){
		$errMSG = "Please Enter Username.";
	}
	else if(empty($name)){
		$errMSG = "Please Enter Your name.";
	}
	else if(empty($password)){
		$errMSG = "Please Enter Password.";
	}

	if(!isset($errMSG))
	{
		$stmt = $DB_con->prepare('INSERT INTO user(username,name,password) VALUES(:unamee, :uname, :upass)');
		$stmt->bindParam(':unamee',$username);
		$stmt->bindParam(':uname',$name);
		$stmt->bindParam(':upass',$password);	
		if($stmt->execute())
		{
			$successMSG = "Successfully Added A New Member.";
			header("refresh:1;index.php");
		}
		else
		{
			$errMSG = "Error While Creating.";
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
 

</head>

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
                    <a href="index.php" class="logo text-center d-none d-md-inline-block mr-2">
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

                                    <span class="list-group-item disabled"><h4>
                                        Getting Started
                                    </h4>
                                 
                                    </span>

                                    <a href="index.php" class="list-group-item list-group-item-action ">
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
                                    
                                    <a href="addpeserta.php" class="list-group-item list-group-item-action active">
                                        <span class="mr-2">
                                            <i class="mdi mdi-book-open-page-variant"></i>
                                        </span>Tambah Peserta
                                    </a>

                                    
                                  
        
                                </div>
                            </div>
                        </div>
                        <!-- end left-sidebar-->

                        <div class="page-content">
                            <div class="p-lg-2">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <h3 class="mt-0 mb-4 font-weight-bold">Tambah Peserta</h3>

                                        <hr/>

                                   

                                        <div class="row">
                                        <div class="container">
		<div class="page-header">
			<!-- <h1 class="h2">&nbsp; Daftar Peserta<a class="btn btn-success" href="addpeserta.php" style="margin-left: 770px;"><span class="glyphicon glyphicon-user"></span>&nbsp; Add Peserta</a></h1><hr> -->
		</div>
	
        <div class="container">
	
		<?php
		if(isset($errMSG)){
			?>
			<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
			</div>
			<?php
		}
		else if(isset($successMSG)){
			?>
			<div class="alert alert-success">
				<strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
			</div>
			<?php
		}
		?>   

		<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin: 0 300px 0 300px;border: solid 1px;border-radius:4px">
			<table class="table table-responsive">
				<tr>
					<td><label class="control-label">Username</label></td>
					<td><input class="form-control" type="text" name="user_name" placeholder="Enter Username" /></td>
				</tr>
				<tr>
					<td><label class="control-label">Name</label></td>
					<td><input class="form-control" type="text" name="name" placeholder="Your Description" /></td>
				</tr>
				<tr>
					<td><label class="control-label">Password</label></td>
					<td><input class="form-control" type="text" name="password" placeholder="Your Description" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" name="btnsave" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp; Save</button>
					</td>
				</tr>
			</table>
		</form>
	</div>


			
		</div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end page-wrapper-->

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

</html>