<div class="main-panel">
        <div class="content-wrapper">
         <div class="row">
         


          <div class="col-md-12 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                  <div class="card-body"> 
                     <h4 class="card-title">MY PROFILE</h4>
                  <p class="card-description">
      
                  </p>


                  <div class="wrapper">
                  <div class="tabs">
                    <nav class="tabs__nav" role="tablist">
                      <button class="tabs__btn is-active" data-tab-target="tab-1" type="button" role="tab" aria-selected="true">MY PROFILE</button>
                      <button class="tabs__btn" data-tab-target="tab-2" type="button" role="tab" aria-selected="false">CHANGE PASSWORD</button>
                      <button class="tabs__btn" data-tab-target="tab-3" type="button" role="tab" aria-selected="false">LOGIN HISTORY</button>
                     
                    </nav>
                    <div class="tabs__content">
                      <div class="tabs__pane is-visible" id="tab-1" role="tabpanel">
                     
                         <form class="forms-sample" action="#" method="POST">
                          <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleInputUsername1" value="<?php echo $lrow['email']; ?>" required="" readonly>
                          </div>
                           <div class="form-group">
                            <label for="exampleInputUsername1">Phone</label>
                            <input type="number" class="form-control" name="phone" id="exampleInputUsername1"  value="<?php echo $lrow['phone']; ?>" required="" readonly >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" class="form-control" name="fullname" value="<?php echo $lrow['fullname']; ?>" id="exampleInputEmail1" required="" readonly>
                          </div>
                         
                        
                      </form>  
                      </div>

                      <div class="tabs__pane" id="tab-2" role="tabpanel">
                     
                        <form class="forms-sample" action="action/change_password.php" method="POST">
                          <div class="form-group">
                            <input type="hidden" name="code" value="<?php echo $lrow['code']; ?>" readonly>
                            <input type="hidden" name="email" value="<?php echo $lrow['email']; ?>" readonly>
                            <label for="exampleInputUsername1">Old Password</label>
                            <input type="text" class="form-control" name="old_password">
                          </div>
                           <div class="form-group">
                             <label for="exampleInputUsername1">New Password</label>
                            <input type="text" class="form-control" name="new_password">
                          </div>
                        
                          <center><button type="submit"  name="checkout"  class="btn btn-primary mr-2" style="width:80%;">CHANGE PASSWORD</button></center>
                        
                       </form>
                     
                      </div>


                       <div class="tabs__pane" id="tab-3" role="tabpanel">
                       
                       <iframe src="LOGIN/?id=<?php echo $lrow['user_id']; ?>" style="width:100%; border:none; height:700px;"></iframe>
                        
                      </div>


                       
                    
                    </div>
                  </div>
                </div>

            

              
                  
                    </div>
                 </div>
               </div>
            </div>
        </div>

       
    