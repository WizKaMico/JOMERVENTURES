<?php
include('../ADMIN/connection/connection.php');


$id = $_GET['id'];
$result=mysqli_query($conn, "select * from my_post where id='$id'");
$row=mysqli_fetch_array($result);
?>

 <div class="main-panel">
        <div class="content-wrapper">
         <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                   <div class="card-body"> 
                       <h4 class="card-title"><?php echo strtoupper($row['promo_name']); ?></h4>
                  <p class="card-description">
                    LOCATION : <?php echo strtoupper($row['destination_province']); ?>,<?php echo strtoupper($row['destination_city']); ?>
                  </p>
                  <p class="card-description">
                    PRICE PER PAX :  ₱ <?php echo strtoupper($row['promo_price']); ?>
                  </p>
                   <p class="card-description">
                    START DATE : <?php echo strtoupper($row['promo_start']); ?> - END DATE : <?php echo strtoupper($row['promo_end']); ?>
                    <br>
                     DESCRIPTION : <?php echo strtoupper($row['description']); ?> 
                  </p>
                  <p class="card-description">
                   
                  </p>
                    <div class="card-people mt-auto">
                      <img src="../ADMIN/POST/<?php echo $row['photo']; ?>" alt="people">
                      <div class="weather-info">
                        <div class="d-flex">
                         </div>
                        </div>
                      </div>
                  
                    </div>
                 </div>
               </div>
            </div>


                        <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                  <div class="card-body"> 
                     <h4 class="card-title">BOOK NOW</h4>
                  <p class="card-description">
                    Fill-in the information below
                  </p>


                  <div class="wrapper">
                  <div class="tabs">
                    <nav class="tabs__nav" role="tablist">
                      <button class="tabs__btn is-active" data-tab-target="tab-1" type="button" role="tab" aria-selected="true">PAYPAL</button>
                      <button class="tabs__btn" data-tab-target="tab-2" type="button" role="tab" aria-selected="false">GCASH</button>
                        <button class="tabs__btn" data-tab-target="tab-3" type="button" role="tab" aria-selected="false">STRIPE</button>
                    </nav>
                    <div class="tabs__content">
                      <div class="tabs__pane is-visible" id="tab-1" role="tabpanel">
                        <img src="logo/PAYPAL.png" style=" height:110px;"> 
                         <form class="forms-sample" action="action/checkout_verification_paypal.php" method="POST">
                          <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleInputUsername1" placeholder="Enter Email" required="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputUsername1">Phone</label>
                            <input type="number" class="form-control" name="phone" id="exampleInputUsername1" placeholder="Enter Phone Number" required="">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" placeholder="Email" required="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Booking Date</label>
                            <input type="date" class="form-control" name="booking_date" min="<?php echo $row['promo_start']; ?>" max="<?php echo $row['promo_end']; ?>" id="datefield" id="exampleInputEmail1" placeholder="Email" required="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">How many persons</label>
                            <input type="number" class="form-control" name="pax" id="QTY" min="<?php echo $row['promo_min_pax']; ?>" max="<?php echo $row['promo_max_pax']; ?>" required="">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Point of Pick-Up</label>
                            <select name="pickup" class="form-control" required="">
                                <option value="MOA">MOA</option>
                                <option value="GREENFIELD">GREENFIELD</option>
                                <option value="CENTRIS">CENTRIS</option>
                            </select>
                          </div>
                            <input type="hidden" name="price" id="PPRICE"  value="<?php echo $row['promo_price']; ?>" required="">
                          

                          <script>
                          function multiply() {
                            a = Number(document.getElementById('QTY').value);
                            b = Number(document.getElementById('PPRICE').value);
                            c = a * b;

                            document.getElementById('TOTAL').value = c;
                          }
                          </script>

                                        
                                 <!--  
                                   <input type="hidden" name="ref_email" value="<?php echo $email; ?>" readonly="">
                                   <input type="hidden" name="region" value="<?php echo $region; ?>" readonly="">
                                   <input type="hidden" name="ip" value="<?php echo  $ip; ?>" readonly="">
                                  -->
                                   <input type="hidden" name="promo_id" value="<?php echo  $id; ?>" readonly=""> 

                                
                          
                         <center><button type="submit"  name="checkout"  class="btn btn-primary mr-2" style="width:80%;">PROCEED TO CHECKOUT</button></center>
                        
                      </form>  
                      </div>

                      <div class="tabs__pane" id="tab-2" role="tabpanel">
                         <img src="logo/GCASH.png"> 
                        <form class="forms-sample" action="action/checkout_verification_gcash.php" method="POST">
                          <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleInputUsername1" placeholder="Enter Email">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputUsername1">Phone</label>
                            <input type="number" class="form-control" name="phone" id="exampleInputUsername1" placeholder="Enter Phone Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" placeholder="Email">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Booking Date</label>
                            <input type="date" class="form-control" name="booking_date" min="<?php echo $row['promo_start']; ?>" max="<?php echo $row['promo_end']; ?>" id="datefield" id="exampleInputEmail1" placeholder="Email">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">How many persons</label>
                            <input type="number" class="form-control" name="pax" id="QTY" min="<?php echo $row['promo_min_pax']; ?>" max="<?php echo $row['promo_max_pax']; ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Point of Pick-Up</label>
                            <select name="pickup" class="form-control">
                                <option value="MOA">MOA</option>
                                <option value="GREENFIELD">GREENFIELD</option>
                                <option value="CENTRIS">CENTRIS</option>
                            </select>
                          </div>
                            <input type="hidden" name="price" id="PPRICE"  value="<?php echo $row['promo_price']; ?>" required="">
                          

                          <script>
                          function multiply() {
                            a = Number(document.getElementById('QTY').value);
                            b = Number(document.getElementById('PPRICE').value);
                            c = a * b;

                            document.getElementById('TOTAL').value = c;
                          }
                          </script>

                                        
                                 <!--  
                                   <input type="hidden" name="ref_email" value="<?php echo $email; ?>" readonly="">
                                   <input type="hidden" name="region" value="<?php echo $region; ?>" readonly="">
                                   <input type="hidden" name="ip" value="<?php echo  $ip; ?>" readonly="">
                                  -->
                                   <input type="hidden" name="promo_id" value="<?php echo  $id; ?>" readonly=""> 

                                
                          
                          <center><button type="submit"  name="checkout"  class="btn btn-primary mr-2" style="width:80%;">PROCEED TO CHECKOUT</button></center>
                        
                       </form>
                      </div>


                        <div class="tabs__pane" id="tab-3" role="tabpanel">
                        <img src="logo/STRIPE.png" style=" height:110px;"> 
                         <form class="forms-sample" action="action/checkout_verification_stripe.php" method="POST">
                          <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleInputUsername1" placeholder="Enter Email" required="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputUsername1">Phone</label>
                            <input type="number" class="form-control" name="phone" id="exampleInputUsername1" placeholder="Enter Phone Number" required="">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" placeholder="Email" required="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Booking Date</label>
                            <input type="date" class="form-control" name="booking_date" min="<?php echo $row['promo_start']; ?>" max="<?php echo $row['promo_end']; ?>" id="datefield" id="exampleInputEmail1" placeholder="Email" required="">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">How many persons</label>
                            <input type="number" class="form-control" name="pax" id="QTY" min="<?php echo $row['promo_min_pax']; ?>" max="<?php echo $row['promo_max_pax']; ?>" required="">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Point of Pick-Up</label>
                            <select name="pickup" class="form-control" required="">
                                <option value="MOA">MOA</option>
                                <option value="GREENFIELD">GREENFIELD</option>
                                <option value="CENTRIS">CENTRIS</option>
                            </select>
                          </div>
                            <input type="hidden" name="price" id="PPRICE"  value="<?php echo $row['promo_price']; ?>" required="">
                          

                          <script>
                          function multiply() {
                            a = Number(document.getElementById('QTY').value);
                            b = Number(document.getElementById('PPRICE').value);
                            c = a * b;

                            document.getElementById('TOTAL').value = c;
                          }
                          </script>

                                        
                                 <!--  
                                   <input type="hidden" name="ref_email" value="<?php echo $email; ?>" readonly="">
                                   <input type="hidden" name="region" value="<?php echo $region; ?>" readonly="">
                                   <input type="hidden" name="ip" value="<?php echo  $ip; ?>" readonly="">
                                  -->
                                   <input type="hidden" name="promo_id" value="<?php echo  $id; ?>" readonly=""> 

                                
                          
                         <center><button type="submit"  name="checkout"  class="btn btn-primary mr-2" style="width:80%;">PROCEED TO CHECKOUT</button></center>
                        
                      </form>  
                      </div>
                    
                    </div>
                  </div>
                </div>

            

              
                  
                    </div>
                 </div>
               </div>
            </div>
        </div>

       
          
       <div class="row">
        
                        <?php
                            include_once('../ADMIN/connection/connection.php');
                            $sql = "SELECT * FROM my_post LIMIT 4";
               
                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                        ?>  
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                <div class="card-body"> 
                <div class="card-people mt-auto">
                  <img src="../ADMIN/POST/<?php echo $row['photo']; ?>" style="height:200px;" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                     </div>
                    </div>
                  </div>
                 </div>
               </div>
               <h5 style="text-align: center; font-size:10px;"><?php echo strtoupper($row['promo_name']); ?></h5>
                <center>
                  <a href="index.php?view=VIEW&id=<?php echo $row['id']; ?>" class="btn btn-primary" style="margin-top:10px; width: 90%; margin-bottom: 10px;">BOOK NOW</a>
                 
                </center>
                  <br>
                   <center>
                  <a href="index.php?view=RESERVE&id=<?php echo $row['id']; ?>" class="btn btn-primary" style="margin-top:-30px; width: 90%; margin-bottom: 10px;">RESERVE NOW</a>
                </center>   
              </div>
            </div>
          <?php } ?>

             
          

            
        

      


        </div>