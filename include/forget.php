 <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Forgot Password</h4>
                  <p class="card-description">
                   Recover Now
                  </p>
                  <form class="forms-sample" action="action/recover.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputUsername1" placeholder="Email">
                    </div>
                      
                    
                    <button type="submit" name="recover" class="btn btn-primary mr-2">Change password</button>
                    <a href="index.php?view=<?php echo 'LOGIN'; ?>" class="btn btn-primary mr-2">Login</a>
                  </form>
                </div>
              </div>
            </div>