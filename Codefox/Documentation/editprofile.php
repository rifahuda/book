<?php
require_once 'koneksi.php';

if(isset($_GET['delete_id']))
{
	// $stmt_select = $DB_con->prepare('SELECT userprofile FROM user WHERE id =:uid');
	// $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	// $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
	// unlink("user_images/".$imgRow['userprofile']);
	$stmt_delete = $DB_con->prepare('DELETE FROM user WHERE id =:uid');
	$stmt_delete->bindParam(':uid',$_GET['delete_id']);
	$stmt_delete->execute();	
	header("Location: editprofile.php");
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

                                    <a href="editprofile.php" class="list-group-item list-group-item-action active">
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
                            <div class="p-lg-2">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <h3 class="mt-0 mb-4 font-weight-bold">Daftar Peserta</h3>

                                        <hr/>

                                     

                                        <div class="row">
                                        <div class="container">
		<div class="page-header">
			<!-- <h1 class="h2">&nbsp; Daftar Peserta<a class="btn btn-success" href="addpeserta.php" style="margin-left: 770px;"><span class="glyphicon glyphicon-user"></span>&nbsp; Add Peserta</a></h1><hr> -->
		</div>
		<div class="row">
			<?php
     
			$stmt = $DB_con->prepare('SELECT id, username, name, password FROM user ORDER BY id DESC');

            


			$stmt->execute();
			if($stmt->rowCount() > 0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					?>
					<div class="col-xs-3">
						<h3 class="page-header" style="background-color:white" align="center"><?php echo $username."<br>".$name."<br>".$password; ?></h3><hr>
              
				
						<p class="page-header" align="center">
							<span>
								<a class="btn btn-primary" href="editform.php?edit_id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
								<a class="btn btn-warning" href="?delete_id=<?php echo $row['id']; ?>" title="click for delete" onclick="return confirm('Are You Sure You Want To Delete This User?')"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							</span>
						</p>
					</div>       
					<?php
				}
			}
			else
			{
				?>
				<div class="col-xs-12">
					<div class="alert alert-warning">
						<span class="glyphicon glyphicon-info-sign"></span>&nbsp; No Data Found.
					</div>
				</div>
				<?php
			}
			?>
        </div>

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