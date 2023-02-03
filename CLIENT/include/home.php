 <div class="row">
            
             <div class="col-md-12 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                <div class="card-body"> 
                    
                <form class="forms-sample" action="#" method="POST">
                    <div class="col-md-3 form-group">
                      <label for="exampleInputUsername1">Month</label>
                        <select class="form-control" id="exampleInputPassword1" name="date">
                        <?php
                          include_once('../ADMIN/connection/connection.php');
                          $sql1 = "SELECT promo_start,promo_end FROM my_post";
            
                          //use for MySQLi-OOP
                          $query1 = $conn->query($sql1);
                          while($row = $query1->fetch_assoc()){
                              $startDate = date("F", strtotime($row['promo_start']));
                              $endDate = date("F", strtotime($row['promo_end']));
                          ?>  
                          <option value="<?php echo $startDate; ?>"><?php echo $startDate; ?> - <?php echo $endDate; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                 
                    <div class="col-md-9 form-group" style="float:right; margin-top:-100px;">
                      <label for="exampleInputPassword1">Search by Destination City</label>
                      <input type="text" name="destination" class="form-control" required>
                    </div>
                    
                    
                    <center><button type="submit" name="search" class="btn btn-primary mr-2" style="width:95%;">SEARCH</button></center>
                  </form>
                  
                  
                 </div>
               </div>
              </div>
            </div>
            
            
            
         
    </div>    
    
    
        <?php if(isset($_POST['search'])){  ?>
        
        <?php $promo = $_POST['destination']; ?>
        
          <?php
                          include_once('../ADMIN/connection/connection.php');
                          $sql1 = "SELECT * FROM my_post WHERE destination_city like '%$promo%'";
            
                          //use for MySQLi-OOP
                          $query1 = $conn->query($sql1);
                          while($row = $query1->fetch_assoc()){
                          ?>  
           
      
         <div class="col-md-3 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                <div class="card-body"> 
                <div class="card-people mt-auto">
              
                <div class="col-md-12 flip-card stretch-card" style="width:100%;">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                     <img src="../ADMIN/POST/<?php echo $row['photo']; ?>" style="height:200px;" alt="people">
                    </div>
                    <div class="flip-card-back">
                       <br>
                       <p><b>LOCATION : <?php echo strtoupper($row['destination_province']); ?>,<?php echo strtoupper($row['destination_city']); ?></b></p>
                       <p> PRICE PER PAX :  ₱ <?php echo strtoupper($row['promo_price']); ?></p>
                       <p> START DATE : <?php echo strtoupper($row['promo_start']); ?></p>
                       <p> END DATE : <?php echo strtoupper($row['promo_end']); ?></p> 
                       <p><?php echo strtoupper($row['promo_name']); ?></p> 
                    </div>
                  </div>
                </div>

                  
            
 
                  <div class="weather-info">
                    <div class="d-flex">
                     </div>
                    </div>
                  </div>
                 </div>
               </div>
               <h5 style="text-align: center; font-size:10px;"><b><?php echo strtoupper($row['promo_name']); ?> | <?php echo '₱'; echo strtoupper($row['promo_price']); ?></b></h5>
                <center>
                  <a href="index.php?view=VIEW&id=<?php echo $row['id']; ?>" class="btn btn-primary" style="margin-top:10px; width: 90%; margin-bottom: 10px;">BOOK NOW</a>
                </center>  
                <br>
                <center>
                  <a href="index.php?view=RESERVE&id=<?php echo $row['id']; ?>" class="btn btn-primary" style="margin-top:-30px; width: 90%; margin-bottom: 10px;">RESERVE NOW</a>
                </center>  
              </div>
            </div>
           



    <?PHP }} ?>
  
    
    <div class="row">
              <?php
              include_once('../ADMIN/connection/connection.php');
              $sql = "SELECT * FROM my_post";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?>  
              
             <div class="col-md-3 grid-margin stretch-card">
              <div class="card tale">
               <div class="card">
                <div class="card-body"> 
                <div class="card-people mt-auto">
              
                <div class="col-md-12 flip-card stretch-card" style="width:100%;">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                     <img src="../ADMIN/POST/<?php echo $row['photo']; ?>" style="height:200px;" alt="people">
                    </div>
                    <div class="flip-card-back">
                       <br>
                       <p><b>LOCATION : <?php echo strtoupper($row['destination_province']); ?>,<?php echo strtoupper($row['destination_city']); ?></b></p>
                       <p> PRICE PER PAX :  ₱ <?php echo strtoupper($row['promo_price']); ?></p>
                       <p> START DATE : <?php echo strtoupper($row['promo_start']); ?></p>
                       <p> END DATE : <?php echo strtoupper($row['promo_end']); ?></p> 
                       <p><?php echo strtoupper($row['promo_name']); ?></p> 
                    </div>
                  </div>
                </div>

                  
            
 
                  <div class="weather-info">
                    <div class="d-flex">
                     </div>
                    </div>
                  </div>
                 </div>
               </div>
               <h5 style="text-align: center; font-size:10px;"><b><?php echo strtoupper($row['promo_name']); ?> | <?php echo '₱'; echo strtoupper($row['promo_price']); ?></b></h5>
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


<style type="text/css">
  
.flip-card {
  background-color: #FFFFFF;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #FFFFFF;
  color: black;
}

.flip-card-back {
  background-color:  #FFFFFF;
  color: black;
  transform: rotateY(180deg);
}
</style>

</style>