<?php
session_start();
include "conn.php";
if($_SESSION['username'] != "Admin"){
  echo '<script>window.location.href = "login.php";</script>';
  exit();
}
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TENANT</title>
    <link rel="icon" href="icon1.jpg">
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 </head>
 <body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar"style="background-image: linear-gradient(200deg,#39A2DB,#25ffc8);">
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_home.php">

    <img src="logo.png" height="70" width="200">
  <div class="sidebar-brand-text mx-3"></div>
</a>

<!-- Divider -->
<div class="dashboard" >
<hr class="sidebar-divider" width=100%>
<li class="nav-item" >
  <a class="nav-link" href="admin_home.php">
    <i class="fa fa-dashboard" style="color:black;"></i>
    <span style="color:black; font-weight:700;">Dashboard</span>
  </a>
</li>


<!-- Nav Item - Pages Collapse Menu -->

<hr class="sidebar-divider">
<li class="nav-item" >
  <a class="nav-link" href="house_detail.php">
    <i class="fas fa-home"style="color:black;"></i>
    <span style="color:black; font-weight:700;">House Information</span>
  </a>
</li>
<hr class="sidebar-divider">
<li class="nav-item" >
<a class="nav-link" href="contract_detail.php">
<i class="fas fa-file-contract"style="color:black;"></i>
<span style="color:black; font-weight:700;">Contract</span>
</a>
</li>
<hr class="sidebar-divider">
<li class="nav-item" >
<a class="nav-link" href="tenant_detail.php">
<i class="fa fa-user"style="color:black;"></i>
<span style="color:black; font-weight:700;">Tenants</span>
</a>
</li>
<hr class="sidebar-divider">
<li class="nav-item" >
<a class="nav-link" href="payment_detail.php">
<i class="fas fa-rupee-sign"style="color:black;"></i>
<span style="color:black; font-weight:700;">Payment</span>
</a>
</li>


</li>
<hr class="sidebar-divider">
<li class="nav-item" >
<a class="nav-link" href="a_change.php">
<i class="fas fa-fw fa-exchange-alt"style="color:black;"></i>
<span style="color:black; font-weight:700;">Change Password
</span>
</a>
</li>



   <!-- Nav Item - Charts -->


<!-- Nav Item - Tables -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<center>
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
<center>
</ul>
     <!-- End of Sidebar -->

     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light  topbar mb-2 static-top shadow" style="background-color:rgba(57,162,219,.96); height:1.91cm; width=100%" >
  
  <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


    <ul class="navbar-nav ml-auto">


      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-white-600 small">
            <?php

          $uname = $_SESSION['username'];
          echo "<b><b>".$uname."</b></b>";

            ?></span>
          <img class="img-profile rounded-circle" src="user.png">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>

      </li>

    </ul>

  </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number of Tenants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      $sql = "SELECT * FROM tenant";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number of Houses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      $sql = "SELECT * FROM house";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-home fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Income</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                          $sql = "SELECT SUM(amount) FROM payment";
                          $query = mysqli_query($con,$sql);
                          $res = mysqli_fetch_assoc($query);

                          do {
                            $total = $res['SUM(amount)'];
                            $res = mysqli_fetch_assoc($query);
                          } while ($res);

                          echo "Rs. ".number_format($total)."/-";
                           ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Active Contracts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                      $sql = "SELECT * FROM contract WHERE status = 'Active'";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <span>Copyright &copy; TENANT 2021</span>

          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-info" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
