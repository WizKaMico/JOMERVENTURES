
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JOMER VENTURES | HOME</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="ADMIN/vendors/feather/feather.css">
  <link rel="stylesheet" href="ADMIN/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="ADMIN/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="ADMIN/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="ADMIN/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="ADMIN/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="ADMIN/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="ADMIN/images/favicon.png" />

   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="dist/style.css">
<script src="https://js.stripe.com/v3/"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AQn-FBXshx9d57vYxnzuB9xlT1KqXFhZTDKhXur-uK7fdv_tJWs4lx9AccIJEeJt1Hcig5UKg5P3pQ7_&currency=PHP"></script>
<!-- <script src="https://www.paypal.com/sdk/js?client-id=AT8Qa4LPJvt9hnvo5e7uJo3hKJUrvY4sTHnaOR2_a0QKouDj32hYAngrwDEIGJ0wZyih9c7ZI1CDmeGp&currency=PHP"></script> -->
<!--   OB DITO MO PALITAN -->
<!-- CTRL + SHIFT + / -->
  <!-- <script src="https://www.paypal.com/sdk/js?client-id=(LAGAY MO NALANG DITO OB)&currency=PHP"></script> -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php?HOME"><img src="ADMIN/images/logo-svg.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php?HOME"><img src="ADMIN/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
        
         
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
          <p class="settings-heading">TALK TO JOMAR</p>
        
         
        
          <!--   <iframe src="PBOT/bot.php" style="border:none; width:100%; height:700px;"></iframe> -->
         <center><button id="myBtn" class="form-control">TALK TO JOMAR</button></center>

          <!-- The Modal -->
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <!-- Modal content -->
            <div class="modal-content">
            <iframe src="PBOT/bot.php" style="border:none; width:100%; height:700px;"></iframe>
            </div>

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
              <span class="menu-title">HOME</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'LOGIN'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">LOGIN</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php?view=<?php echo 'TRACK'; ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">TRACK BOOK</span>
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
                  
                </div>
              </div>
            </div>
          </div>

          <?php if(!empty($_GET['view'])){ ?>

          <?php if($_GET['view'] == 'HOME'){ ?>
          <?php include('include/home.php'); ?>  
          <?php } else if($_GET['view'] == 'VIEW'){ ?>
          <?php include('include/view.php'); ?> 
          <?php } else if($_GET['view'] == 'VERIFY'){ ?>
          <?php include('include/verify.php'); ?>   
          <?php } else if($_GET['view'] == 'LOGIN'){ ?>
          <?php include('include/login.php'); ?>    
          <?php } else if($_GET['view'] == 'REGISTER'){ ?>
          <?php include('include/register.php'); ?>  
          <?php } else if($_GET['view'] == 'TRACK'){ ?>
          <?php include('include/track.php'); ?> 
          <?php } else if($_GET['view'] == 'RESERVE'){ ?>
          <?php include('include/reserve.php'); ?>
          <?php } else if($_GET['view'] == 'FORGOT'){ ?>
          <?php include('include/forget.php'); ?>
          <?php } else if($_GET['view'] == 'CHANGE'){ ?>
          <?php include('include/change.php'); ?>
          <?php } else if($_GET['view'] == 'SUCCESS'){ ?>
          <?php include('include/success.php'); ?>
          <?php } else if($_GET['view'] == 'PAY'){ ?>
          <?php include('include/pay.php'); ?>
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
  <script src="ADMIN/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="ADMIN/vendors/chart.js/Chart.min.js"></script>
  <script src="ADMIN/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="ADMIN/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="ADMIN/js/dataTables.select.min.js"></script>
 <script>
   $(document).ready(function() {
    $("input[name$='cars']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
    });
});



 </script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 
  <!-- End plugin js for this page -->
  <!-- inject:js -->

  <script src="ADMIN/js/off-canvas.js"></script>
  <script src="ADMIN/js/hoverable-collapse.js"></script>
  <script src="ADMIN/js/template.js"></script>
  <script src="ADMIN/js/settings.js"></script>
  <script src="ADMIN/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="ADMIN/js/dashboard.js"></script>
  <script src="ADMIN/js/Chart.roundedBarCharts.js"></script>
   <script  src="dist/script.js"></script>
  <!-- End custom js for this page-->

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


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
  
</style>



