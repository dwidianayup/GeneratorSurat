<?php 
session_start();
include "koneksidatabase.php";
if ($_SESSION['username']==null) {
   header('location:login.php');
 }
 $username=$_SESSION['username']; 
 $sql="select realname from admin where username = '$username'";
 $hasil=mysqli_query($con,$sql);
 while($data=mysqli_fetch_assoc($hasil)){
  $realname=$data['realname'];
  }?>

<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Tugas IMK | pembuatan surat</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Surat Generator</b></a>
            <!--logo end-->

        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU


      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sideba'Welcome to Dashgum!r menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered" ng-model="NamaLengkap"><?php echo $realname ;?></h5>
                  <h6 class="centered" style="color:white">id : <?php echo $_SESSION['username']; ?></h6>

                  <li class="sub-menu">
                    <a href="index.php">
                      <i class="fa fa-dashboard"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>

                  <li class="sub-menu">
                      <a href="index.php" >
                          <i class="li li_pen"></i>
                          <span>Create</span>
                      </a>
                      <ul class="sub">
                        <li><a href="create_pinjambendera.php">Peminjaman Bendera</a></li>
                        <li><a href="create_openstand.php">Open Stand</a></li>
                         <li><a href="create_kabeleasy.php">Peminjaman Kabel EasyCAP</a></li>
                        <li><a href="create_mediapartner.php">Media Partner</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="history.php">
                        <i class="li li_data"></i>
                        <span>History</span>
                      </a>
                      <ul class="sub">
                        <li><a href="history_bendera.php">Peminjaman Bendera</a></li>
                        <li><a href="history_stand.php">Open Stand</a></li>
                         <li><a href="history_kabel.php">Peminjaman Kabel EasyCAP</a></li>
                        <li><a href="history_mediapartner.php">Media Partner</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                    <a href="logout.php">
                      <i class="li li_lock"></i>
                      <span>Log Out</span>
                    </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
