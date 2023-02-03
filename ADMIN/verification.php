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
  <title>JOMER VENTURES | HOME</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo-svg.png" alt="logo">
              </div>
              <h4>HELLO! <?php echo strtoupper($row['fullname']); ?></h4>
              <h6 class="font-weight-light">To continue signing-in please enter the code that was sent to your email.</h6>
              <form class="pt-3" action="#" method="POST">
                <div class="form-group">
                  <input type="number" name="code" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Enter Code" required="">
                  <input type="hidden" name="user_id" class="form-control form-control-lg" id="exampleInputEmail1" value="<?php echo $row['user_id']; ?>" required="">
                </div>
                <div class="mt-3">
                  <input type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="PROCEED">
                </div>
              </form>

              <?php
              if (isset($_POST['login']))
                {
                  $code = mysqli_real_escape_string($conn, $_POST['code']);
                  $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
             
                  $query    = mysqli_query($conn, "SELECT * FROM email_security WHERE  user_id='$user_id' and code='$code' AND status != 'USED'");
                  $row    = mysqli_fetch_array($query);
                  $num_row  = mysqli_num_rows($query);
             
                  if ($num_row > 0) 
                    {     

                       $code = $row['code']; 
                       mysqli_query($conn,"UPDATE email_security SET status = 'USED' WHERE code = '$code'");
                      header('location:index.php');
             
                    }
                  else
                    {
                      echo 'Invalid Token';
                    }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
