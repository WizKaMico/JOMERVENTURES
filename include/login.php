 <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Login</h4>
                  <p class="card-description">
                   Login Now
                  </p>
                  <form class="forms-sample" action="action/login.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputUsername1" placeholder="Email">
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    
                    
                    <button type="submit" name="login" class="btn btn-primary mr-2">Login</button>
                    <a href="index.php?view=<?php echo 'FORGOT'; ?>" class="btn btn-primary mr-2">forgot password</a>
                    <a href="index.php?view=<?php echo 'REGISTER'; ?>" class="btn btn-primary mr-2">Register</a>
                  </form>
                </div>
              </div>
            </div>