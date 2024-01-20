<?php
session_start();
if(isset($_SESSION["email"]) && $_SESSION["email"] != "")
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('layout/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  
  <?php include("layout/header.php");?>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php include("pages/frontend/dashboard.php");?>
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

  <?php include("layout/jsPlugins.php");?>
</body>
</html>
<?php
}else{
  header("Location: /ballegh2/login.php"); /* Redirect browser */
}
?>
