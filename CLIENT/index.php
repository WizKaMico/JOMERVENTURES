<?php 
include('../ADMIN/connection/connection.php');
include('../ADMIN/connection/session.php'); 
 
$result=mysqli_query($conn, "select * from client where user_id='$session_id'")or die('Error In Session');
$lrow=mysqli_fetch_array($result);
 
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JOMER VENTURES | HOME</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../ADMIN/vendors/feather/feather.css">
  <link rel="stylesheet" href="../ADMIN/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../ADMIN/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../ADMIN/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../ADMIN/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="../text/css" href="ADMIN/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../ADMIN/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../ADMIN/images/favicon.png" />
<script src="https://js.stripe.com/v3/"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=AQn-FBXshx9d57vYxnzuB9xlT1KqXFhZTDKhXur-uK7fdv_tJWs4lx9AccIJEeJt1Hcig5UKg5P3pQ7_&currency=PHP"></script>
 
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="#"><img src="../ADMIN/images/logo-svg.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="../ADMIN/images/logo-mini.svg" alt="logo"/></a>
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
    <!-- partial:partials/_settings-panel.html -->
       <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">TALK TO JOMAR</p>
        
         
        
            <iframe src="../PBOT/bot.php" style="border:none; width:100%; height:700px;"></iframe>
         
        </div>
      </div>
  
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'HOME'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">HOME</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'BOOKING'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">TRACK BOOKING</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'PROFILE'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">PROFILE</span>
            </a>
          </li>
    
           
         
        
        </ul>
      </nav>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                      <h3 class="font-weight-bold">WELCOME! <?php echo strtoupper($lrow['fullname']); ?></h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                </div>
              </div>
            </div>
          </div>

          <?php if(!empty($_GET['view'])){ ?>
          <?php if($_GET['view'] == 'HOME'){ ?>
          <?php include('include/home.php'); ?> 
          <?php } else if($_GET['view'] == 'BOOKING'){ ?>
          <?php include('include/book.php'); ?>  
          <?php } else if($_GET['view'] == 'VIEW'){ ?>
          <?php include('include/view.php'); ?> 
          <?php } else if($_GET['view'] == 'VERIFY'){ ?>
          <?php include('include/verify.php'); ?>   
            <?php } else if($_GET['view'] == 'RESERVE'){ ?>
          <?php include('include/reserve.php'); ?> 
          <?php } else if($_GET['view'] == 'SUCCESS'){ ?>
          <?php include('include/success.php'); ?>
          <?php } else if($_GET['view'] == 'PROFILE'){ ?>
          <?php include('include/profile.php'); ?>
          <?php } else { ?>

          <?php } ?>
          <?php } else { ?>
          <?php include('include/home.php'); ?>  
          <?php } ?>  
      
     
      
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Jomer Ventures. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      <!-- partial -->
   
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../ADMIN/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../ADMIN/vendors/chart.js/Chart.min.js"></script>
  <script src="../ADMIN/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../ADMIN/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../ADMIN/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../ADMIN/js/off-canvas.js"></script>
  <script src="../ADMIN/js/hoverable-collapse.js"></script>
  <script src="../ADMIN/js/template.js"></script>
  <script src="../ADMIN/js/settings.js"></script>
  <script src="../ADMIN/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../ADMIN/js/dashboard.js"></script>
  <script src="../ADMIN/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script  src="../dist/script.js"></script>

  <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                layout: 'vertical',
                color:  'gold',
                shape:  'pill',
                label:  'pay',
            }

        }).render('#paypal-button-container');
    </script>
</body>

</html>

<style type="text/css">
  
:root {
  --font-base: "Poppins", sans-serif;
  --color-accent: #6158de;
  --color-accent-x-light: #fafafa;
  --color-base: #222;
}

body {
  font-family: var(--font-base);
  color: var(--color-base);
  line-height: 1.5;
}

.wrapper {
  width: min(100% - 2rem, 90ch);
  margin-inline: auto;
  padding-top: 1rem;
  display: flex;
  flex-direction: column;
}

button {
  all: unset;
}

h1 {
  margin-bottom: 2rem;
  font-weight: 700;
  font-size: 3rem;
  color: #000;
  line-height: 1.2;
}
h1 strong {
  display: block;
  font-weight: 500;
  color: #999;
  font-size: 1rem;
}

.tabs {
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.tabs__nav {
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
  background-color: var(--color-accent-x-light);
}
.tabs__btn {
  position: relative;
  padding: 1rem 1.25rem;
  cursor: pointer;
  transition: opacity 0.3s;
}
.tabs__btn:not(.is-active) {
  opacity: 0.6;
}
.tabs__btn:not(.is-active):hover {
  opacity: 1;
}
.tabs__btn.is-active {
  color: var(--color-accent);
  background-color: #fff;
  border-right: 1px solid rgba(0, 0, 0, 0.125);
  border-left: 1px solid rgba(0, 0, 0, 0.125);
}
.tabs__btn.is-active::after {
  content: "";
  position: absolute;
  bottom: -1px;
  left: 0;
  height: 1px;
  width: 100%;
  background-color: #fff;
}
.tabs__btn:first-child.is-active {
  border-left: none;
}
.tabs__pane {
  display: none;
  padding: 2rem 1.25rem;
}
.tabs__pane.is-visible {
  display: block;
}

h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

p + p {
  margin-top: 1rem;
}

  
</style>

