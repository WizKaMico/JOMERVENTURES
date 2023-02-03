 <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Register</h4>
                  <p class="card-description">
                    Register Now
                  </p>
                  <form class="forms-sample" action="action/register.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputUsername1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Fullname</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="fullname" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    
                    
                    <button type="submit" name="register" class="btn btn-primary mr-2">Register</button>
                     <a href="index.php?view=<?php echo 'LOGIN'; ?>" class="btn btn-primary mr-2">Login</a>
                  </form>
                </div>
              </div>
            </div>