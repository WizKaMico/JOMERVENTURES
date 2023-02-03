<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TRACK MY BOOKING</h4>
                  
                  <form class="forms-sample" action="#" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputUsername1" placeholder="Email">
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Booking Reference</label>
                      <input type="text" class="form-control"  name="code"  maxlength="4" placeholder="Enter 4-Digit Reference No.">
                    </div>
                    
                    
                    <button type="submit" name="track" class="btn btn-primary mr-2">Track</button>
                    
                  </form>
                </div>
              </div>
            </div>


             <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">RESULT</h4>
                  
                  <?php if(isset($_POST['track'])){ ?>
                  <?php
                  
                   $email = $_POST['email'];
                   $code = $_POST['code'];
                  ?> 
                      <iframe src="CLIENT/BOOK/mybook.php?email=<?php echo $email; ?>&code=<?php echo $code; ?>" style="width:100%; height:700px; border:none;"></iframe>
                      
                    
                  <?php } ?>  
                </div>
              </div>
            </div>