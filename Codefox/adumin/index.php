<?php
session_start();
if ( ! isset($_SESSION['log']) ) {
    header('location: ../index.php');
    exit; 
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">

</head>
<body>
    <h1>Halaman Admin</h1><br>
    <a href="logout.php"  class="btn btn_info" onclick="return confirm('yakin logout?')">LOG OUT</a>
</body>
</html>