<?php 
ob_start();
session_start();

include '../netting/connect.php';
include 'function.php';

$asksetting=$db->prepare("SELECT * FROM setting where setting_id=:id");
$asksetting->execute(array(
  'id'=>0
));
$checksetting=$asksetting->fetch(PDO::FETCH_ASSOC);



$askuser=$db->prepare("SELECT * FROM user where user_mail=:mail");
$askuser->execute(array(
  'mail'=>$_SESSION['user_mail']
));
$count=$askuser->rowCount();
$checkuser=$askuser->fetch(PDO::FETCH_ASSOC);


if($count==0){
  header("Location:login.php?status=unauthorized");
  exit;
}
 
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Dropzone.js -->

  <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">



  <!-- Dropzone.js -->

  <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
  <!-- Ck Editör -->
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"> <center><span>Admin Panel</span></center> </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php echo $checkuser['user_name']; ?> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 
                 <li><a href="index.php"><i class="fa fa-home"></i> Home Page </a></li>
                 <li><a href="about.php"><i class="fa fa-info"></i> About </a></li>
                 <li><a href="users.php"><i class="fa fa-info"></i> Users </a></li>
                 <li><a href="menu.php"><i class="fa fa-list"></i> Menu </a></li>
                 <li><a href="category.php"><i class="fa fa-list"></i> Category </a></li>
                 <li><a href="product.php"><i class="fa fa-shopping-basket"></i> Products </a></li>
                 <li><a href="slider.php"><i class="fa fa-image"></i> Slider </a></li>
                 <li><a href="bank.php"><i class="fa fa-bank"></i> Bank </a></li>
                 


                  <li><a><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general-setting.php">General Settings</a></li>
                      <li><a href="contact-setting.php">Contact Settings</a></li>
                      <li><a href="api-setting.php">API Settings</a></li>
                      <li><a href="mail-setting.php">Mail Settings</a></li>

                    </ul>
                  </li>
                 

                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $checkuser['user_name']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
                
              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->