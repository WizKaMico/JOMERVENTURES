 <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Forgot Password</h4>
                  <p class="card-description">
                   Recover Now
                  </p>
                  <form class="forms-sample" action="action/full_recovery.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputUsername1" value="<?php echo $_GET['email']; ?>" readonly="" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Code</label>
                      <input type="number" name="ecode" class="form-control" id="exampleInputUsername1" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">New Password</label>
                      <input type="password" name="newpassword" class="form-control" id="exampleInputUsername1" required="">
                    </div>
                      
                    
                    <button type="submit" name="recover" class="btn btn-primary mr-2">RECOVER</button>
                   
                  </form>
                </div>
              </div>
            </div>