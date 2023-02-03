<?php 
include('connection/connection.php');
include('connection/session.php'); 
 
$result=mysqli_query($conn, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JOMER VENTURES | MODERATOR</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


     <script>
                                $(document).ready(function(){
                                    $('#purpose').on('change', function() {
                                      if ( this.value == '1')
                                      //.....................^.......
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").show();
                                          $("#check_2").hide();
                                          $("#check_3").hide();
                                          $("#check_4").hide();
                                      }
                                      else  if ( this.value == '2')
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").hide();
                                          $("#check_2").show();
                                          $("#check_3").hide();
                                          $("#check_4").hide();
                                      }
                                      else  if ( this.value == '3')
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").hide();
                                          $("#check_2").hide();
                                          $("#check_3").show();
                                          $("#check_4").hide();
                                      }
                                      else  if ( this.value == '4')
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").hide();
                                          $("#check_2").hide();
                                          $("#check_3").hide();
                                          $("#check_4").show();
                                      }
                                       else  
                                      {
                                          $("#check_0").show();
                                          $("#check_1").hide();
                                          $("#check_2").hide();
                                          $("#check_3").hide();
                                          $("#check_4").hide();
                                      }
                                    });
                                });
                                </script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php?view"><img src="images/logo-svg.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php?view"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
        
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="ti-settings mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
             
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
     
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
  
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'HOME'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">DASHBOARD</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'POST'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">MY POST</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'MAILER'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">MANUAL MAILER</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'SCHEDULED'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">SCHEDULED MAILER</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'USERS'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">USERS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'FAQ'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">FAQ</span>
            </a>
          </li>
         
        
        </ul>
      </nav>
      <!-- partial -->
      <?php if(!empty($_GET['view'])){ ?>
      <?php if($_GET['view'] == 'HOME'){ ?>
      <?php include('includes/home.php'); ?>
      <?php } else if($_GET['view'] == 'POST'){ ?>
      <?php include('includes/post.php'); ?>
      <?php } else if($_GET['view'] == 'MAILER'){ ?>
      <?php include('includes/mailer.php'); ?>
      <?php } else if($_GET['view'] == 'SCHEDULED'){ ?>
      <?php include('includes/scheduled.php'); ?>
      <?php } else if($_GET['view'] == 'USERS'){ ?>
      <?php include('includes/users.php'); ?>
      <?php } else if($_GET['view'] == 'FAQ'){ ?>
      <?php include('includes/faq.php'); ?>
      <?php } else { ?>
      <?php } ?>
      <?php } else { ?>
      <?php include('includes/home.php'); ?>
      <?php } ?>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

