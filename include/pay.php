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
                 


                             <?php  if($urow['mode'] == 'PAYPAL' && $urow['status'] == 'VERIFIED'){ ?>  
                                
                                <Input type="hidden" value="<?php echo $code; ?>"/>
                                <div id="paypal-button-container"></div>



                                <script>
                                      paypal.Buttons({
                                        // Sets up the transaction when a payment button is clicked
                                        createOrder: (data, actions) => {
                                          return actions.order.create({
                                            purchase_units: [{
                                              amount: {
                                                currency: 'PHP',
                                                value: <?php echo $urow['price_to_pay']; ?> // Can also reference a variable or function
                                              }
                                            }]
                                          });
                                        },
                                        // Finalize the transaction after payer approval
                                        onApprove: (data, actions) => {
                                          return actions.order.capture().then(function(orderData) {
                                            // Successful capture! For dev/demo purposes:
                                            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                            const transaction = orderData.purchase_units[0].payments.captures[0];
                                            // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                                            // When ready to go live, remove the alert and show a success message within this page. For example:
                                            const element = document.getElementById('paypal-button-container<?php echo $code; ?>');
                                            element.innerHTML = '<h3>Thank you for your payment!</h3>';
                                            // Or go to another URL:  
                                            window.location.href = "success.php?code=<?php echo $code; ?>&email=<?php echo $email; ?>";
                                          });
                                        }
                                      }).render('#paypal-button-container<?php echo $code; ?>');
                                    </script>
                                
                              <?php } else if($urow['mode'] == 'STRIPE' && $urow['status'] == 'VERIFIED') { ?>


                                  <form action="success.php?code=<?php echo $code; ?>&email=<?php echo $email; ?>" class="stripe" method="POST">
                                  <input type="hidden" name="token" />
                                  <div class="group">
                                    <label>
                                      <span>Card</span>
                                      <div id="card-element" class="field"></div>
                                    </label>
                                  </div>
                                  <div class="group">
                                    <label>
                                      <span>Fullname</span>
                                      <input id="first-name" name="first-name" class="field" value="<?php echo $urow['fullname']; ?>" required=""/>
                                    </label>
                                  </div>
                                <button type="submit"  name="checkout"  class="btn btn-primary mr-2" style="width:92%;">Pay ₱<?php echo $urow['price_to_pay']; ?></button>
                                  <div class="outcome">
                                    <div class="error"></div>
                                    <div class="success">
                                      Success! Your Stripe token is <span class="token"></span>
                                    </div>
                                  </div>
                                </form>


                                 <script>
                    
                                  var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');
                                  var elements = stripe.elements();

                                  var card = elements.create('card', {
                                    hidePostalCode: true,
                                    style: {
                                      base: {
                                        iconColor: '#666EE8',
                                        color: '#31325F',
                                        lineHeight: '40px',
                                        fontWeight: 300,
                                        fontFamily: 'Helvetica Neue',
                                        fontSize: '15px',

                                        '::placeholder': {
                                          color: '#CFD7E0',
                                        },
                                      },
                                    }
                                  });
                                  card.mount('#card-element');

                                  function setOutcome(result) {
                                    var successElement = document.querySelector('.success');
                                    var errorElement = document.querySelector('.error');
                                    successElement.classList.remove('visible');
                                    errorElement.classList.remove('visible');

                                    if (result.token) {
                                      // In this example, we're simply displaying the token
                                      successElement.querySelector('.token').textContent = result.token.id;
                                      successElement.classList.add('visible');

                                      // In a real integration, you'd submit the form with the token to your backend server
                                      //var form = document.querySelector('form');
                                      //form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
                                      //form.submit();

                              
                     

                                    } else if (result.error) {
                                      errorElement.textContent = result.error.message;
                                      errorElement.classList.add('visible');
                                    }

                                  }



                                  card.on('change', function(event) {
                                    setOutcome(event);
                                  });

                                  document.querySelector('form').addEventListener('submit', function(e) {
                                     
                                    var options = {
                                      name: document.getElementById('first-name').value,
                                    };
                                    stripe.createToken(card, options).then(setOutcome);
                                  });

      
                                </script>



                                <style type="text/css">
                                  


                        .stripe {
                          width: 100%;
                          margin-top:100px;
                        }

                        .group {
                          background: white;
                          box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
                          border-radius: 4px;
                          margin-bottom: 20px;
                        }

                        label {
                          position: relative;
                          color: #8898AA;
                          font-weight: 300;
                          height: 40px;
                          line-height: 40px;
                          display: flex;
                          flex-direction: row;
                        }

                        .group label:not(:last-child) {
                          border-bottom: 1px solid #F0F5FA;
                        }

                        label > span {
                          width: 120px;
                          text-align: right;
                          margin-right: 30px;
                        }

                        .field {
                          background: transparent;
                          font-weight: 300;
                          border: 0;
                          color: #31325F;
                          outline: none;
                          flex: 1;
                          padding-right: 10px;
                          padding-left: 10px;
                          cursor: text;
                        }

                        .field::-webkit-input-placeholder {
                          color: #CFD7E0;
                        }

                        .field::-moz-placeholder {
                          color: #CFD7E0;
                        }

                        

                        .outcome {
                          float: left;
                          width: 100%;
                          padding-top: 8px;
                          min-height: 24px;
                          text-align: center;
                        }

                        .success,
                        .error {
                          display: none;
                          font-size: 13px;
                        }

                        .success.visible,
                        .error.visible {
                          display: inline;
                        }

                        .error {
                          color: #E4584C;
                        }

                        .success {
                          color: #666EE8;
                        }

                        .success .token {
                          font-weight: 500;
                          font-size: 13px;
                        }


                          


                                </style>


                                <?php } else if($urow['mode'] == 'GCASH' && $urow['status'] == 'VERIFIED') { ?>

                                <img src="GCASH.png" style="width:100%; height:300px;">
                                <form action="success.php?code=<?php echo $code; ?>" class="stripe" method="POST">
                                    <div class="group">
                                    <label>
                                      <span>Ref#</span>
                                    </label>
                                    <input type="number" class="form-control" name="ref" style="margin-top:15px;" placeholder="Ref#" required="" style="width:100%;">
                                    <br>
                                    <br>
                                    <center><button style="width:80%;" class="btn btn-primary">PROCEED</button></center>
                                  </div>
                                </form>
                                 

                                 <?php } else {  ?>


                                 <?php }  ?>   

    


                         
                

                
                  
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
