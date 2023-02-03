<?php
include('ADMIN/connection/connection.php');
$id = $_GET['id'];
$code = $_GET['code'];
$result=mysqli_query($conn, "select * from my_post where id='$id'");
$row=mysqli_fetch_array($result);

$check=mysqli_query($conn, "select * from proceed_to_pay where code='$code'");
$urow=mysqli_fetch_array($check);
?>

  <!-- partial -->
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
                  </p>
                    <div class="card-people mt-auto">
                      <img src="ADMIN/POST/<?php echo $row['photo']; ?>" alt="people">
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
                     <h4 class="card-title">CONFIRM & PAY</h4>
                  <p class="card-description">
                    Fill-in the information below
                  </p>
                   <?php if($urow['status'] == 'UNPAID'){ ?>

                  <form class="forms-sample" action="action/pay.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Enter the code that was sent to your email</label>
                   
                       <input type="number" class="form-control" name="pcode" placeholder="Enter the code" required="">
                      
                       <input type="hidden" name="code" value="<?php echo $urow['code']; ?>" required="">
                       <input type="hidden" name="email" value="<?php echo $urow['email']; ?>" required="">
                       <input type="hidden" name="id" value="<?php echo $id; ?>" required="">
                    </div>
                 
                    
                    <button type="submit"  name="checkout"  class="btn btn-primary mr-2" style="width:92%;">PROCEED TO CHECKOUT</button>
                  
                  </form>
                <?php } else { ?>


               <?php } ?>   
    


                         
                

                
                  
                    </div>
                 </div>
               </div>
            </div>
        </div>

       
          
         <div class="row">
              <?php
              include_once('ADMIN/connection/connection.php');
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
                     <img src="ADMIN/POST/<?php echo $row['photo']; ?>" style="height:200px;" alt="people">
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
