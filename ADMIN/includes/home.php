      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 <h3 class="font-weight-bold">WELCOME! <?php echo strtoupper($row['fullname']); ?></h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <?php date_default_timezone_set('Asia/Manila'); ?>
                     <?php $date = date('D, M j, Y'); ?>
                     <i class="mdi mdi-calendar"></i><?php echo strtoupper($date); ?>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/people-svg.png" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php 

            $total_booking=mysqli_query($conn, "SELECT *,COUNT(id) as total,SUM(price_to_pay) as OVERALL FROM proceed_to_pay");
            $tbook=mysqli_fetch_array($total_booking);

            $total_paid=mysqli_query($conn, "SELECT *,COUNT(id) as total,SUM(price_to_pay) as OVERALL FROM proceed_to_pay WHERE status = 'PAID'");
            $tpaid=mysqli_fetch_array($total_paid);

            $total_reserve=mysqli_query($conn, "SELECT *,COUNT(id) as total,SUM(price_to_pay) as OVERALL FROM proceed_to_pay WHERE status = 'RESERVE'");
            $treserve=mysqli_fetch_array($total_reserve);

            $total_unpaid=mysqli_query($conn, "SELECT *,COUNT(id) as total,SUM(price_to_pay) as OVERALL FROM proceed_to_pay WHERE status = 'UNPAID'");
            $tunpaid=mysqli_fetch_array($total_unpaid);

            $total_cancelled=mysqli_query($conn, "SELECT *,COUNT(id) as total,SUM(price_to_pay) as OVERALL FROM proceed_to_pay WHERE status = 'CANCELLED'");
            $tcancel=mysqli_fetch_array($total_cancelled);

            $total_refund=mysqli_query($conn, "SELECT *,COUNT(id) as total,SUM(price_to_pay) as OVERALL FROM proceed_to_pay WHERE status = 'REFUND'");
            $trefund=mysqli_fetch_array($total_refund);
 

            ?>

            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Bookings</p>
                      <p class="fs-30 mb-2"><?php echo $tbook['total']; ?></p>
                      <p>SUM EXPECTED AMOUNT : ₱ <?php echo $tbook['OVERALL']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Paid</p>
                      <p class="fs-30 mb-2"><?php echo $tpaid['total']; ?></p>
                      <p>SUM EXPECTED AMOUNT : ₱ <?php echo $tpaid['OVERALL']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Reserve</p>
                       <p class="fs-30 mb-2"><?php echo $treserve['total']; ?></p>
                      <p>SUM EXPECTED AMOUNT : ₱ <?php echo $treserve['OVERALL']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Unpaid</p>
                       <p class="fs-30 mb-2"><?php echo $tunpaid['total']; ?></p>
                      <p>SUM EXPECTED AMOUNT : ₱ <?php echo $tunpaid['OVERALL']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Cancelled</p>
                     <p class="fs-30 mb-2"><?php echo $tcancel['total']; ?></p>
                      <p>SUM EXPECTED AMOUNT : ₱ <?php echo $tcancel['OVERALL']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Refund</p>
                        <p class="fs-30 mb-2"><?php echo $trefund['total']; ?></p>
                      <p>SUM EXPECTED AMOUNT : ₱ <?php echo $trefund['OVERALL']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">INCOME ANALYTICS (PIE CHART)</p>
                  <a href="REPORT/daily.php" class="btn btn-success"><i class="dwn"></i> Daily Data Report</a>
                   <a href="REPORT/weekly.php" class="btn btn-success"><i class="dwn"></i> Weekly Data Export</a>
                    <a href="REPORT/monthly.php" class="btn btn-success"><i class="dwn"></i> Monthly Data Export</a>
                     <a href="REPORT/annually.php" class="btn btn-success"><i class="dwn"></i> Annual Data Export</a>
                     <br>
                     <br>
                  <div class="row">
                    <div class="col-12">

                      <select id='purpose' class="form-control">
                                <option value="0">Daily</option>
                                <option value="1">Weekly</option>
                                <option value="2">Monthly</option>
                                <option value="4">Annually</option>
                                </select>

                              


                                <div style='display:none;' id='check_0'><br/>&nbsp;
                                  <iframe src="charts/pie_daily.php" style="width:100%; height:300px; border:none;"></iframe>    
                                </div>
                                <div style='display:none;' id='check_1'><br/>&nbsp;
                                   <iframe src="charts/pie_weekly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>
                                <div style='display:none;' id='check_2'><br/>&nbsp;
                                  <iframe src="charts/pie_monthly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>

                                 <div style='display:none;' id='check_4'><br/>&nbsp;
                                   <iframe src="charts/pie_yearly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>
                             
                     
                    </div>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">INCOME ANALYTICS (BAR GRAPH)</p>

                  <div class="row">
                    <div class="col-12">

                    
                                  <iframe src="charts/bar.php" style="width:100%; height:300px; border:none;"></iframe>    
                              
                               
                             
                     
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            
            </div>

            
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">BOOKING & SCHEDULES</p>
                  <div class="row">
                    <div class="col-12">
                      <iframe src="CLIENT/" style="width:100%; height:700px; border:none;"></iframe>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
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