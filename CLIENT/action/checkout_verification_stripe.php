<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('../../ADMIN/connection/connection.php'); 



if(isset($_POST['checkout'])){
    

    
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fullname = $_POST['fullname'];
        $booking_date = $_POST['booking_date'];
        $price = $_POST['price'];
        $pax = $_POST['pax'];
        $pickup = $_POST['pickup'];
        
        $price_to_pay = $price * $pax;
        // $ref_email = $_POST['ref_email'];
        // $region = $_POST['region'];
        // $ip = $_POST['ip'];
        $promo_id = $_POST['promo_id']; 
        $code = rand(6666,9999); 
        $status = 'UNPAID';
        $mode = 'STRIPE';
        date_default_timezone_set('Asia/Manila');
        $date_created  = date('Y-m-d'); 
      // $rpass = md5($password);
    

        $result=mysqli_query($conn, "select * from my_post where id='$promo_id'");
        $lrow=mysqli_fetch_array($result);

          mysqli_query($conn,"INSERT INTO proceed_to_pay (email, phone, fullname, booking_date, price, pax, price_to_pay, pickup, code, promo_id, status, mode, date_created) VALUES ('$email', '$phone', '$fullname', '$booking_date', '$price', '$pax', '$price_to_pay', '$pickup', '$code', '$promo_id', '$status', '$mode', '$date_created')");  

         

 require 'mailler/autoload.php';
    
      $subject = 'JOMARVENTURES | PAYMENT VERIFICATION : '.strtoupper($email).' | STATUS  '.strtoupper($status).'';
 
  
    $message = '
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>JOMAR VENTURES | ITENERARY</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="./style.css">

<style type="text/css">
  
a {
  text-decoration: none;
}

.flex, footer .social-links, #section2 article h2, #section2 article, #top-charts, .author-info, .share-links, #main-header {
  display: flex;
}

.container {
  background: rgba(211, 211, 211, 0.2);
  max-width: 800px;
  margin: auto;
  box-shadow: 0 5px 15px gray;
}

#main-header {
  color: white;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("http://www.telegraph.co.uk/content/dam/Travel/Cruise/worlds-most-beautiful-ports/hongkong-harbour-xlarge.jpg") no-repeat center center;
  background-size: cover;
  height: 70vh;
  flex-direction: column;
}
#main-header #title {
  margin-bottom: auto;
  border-bottom: solid 1px rgba(211, 211, 211, 0.3);
  padding-left: 15px;
}
#main-header #title h2 span {
  font-weight: 100;
}
#main-header .info {
  padding-left: 15px;
}
#main-header .info h3 {
  font-weight: 100;
}

.share-links {
  align-items: center;
  padding-left: 15px;
  border-bottom: solid 1px #ededed;
  background: white;
}
.share-links p {
  margin: 0;
  margin-right: auto;
}
.share-links a {
  border-left: solid 1px #ededed;
  padding: 15px 20px;
  color: rgba(0, 0, 0, 0.8);
}

.author-info {
  align-items: center;
  padding: 25px 15px 15px;
  line-height: 1.5;
  background: white;
}
.author-info img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-right: 15px;
}
.author-info h4 {
  margin: 0;
}
.author-info p {
  margin: 0;
}

main > section {
  background: white;
  padding: 5px 15px;
  margin-bottom: 20px;
}
main article {
  margin-bottom: 30px;
}
main article img {
  width: 100%;
}
main article section p {
  line-height: 1.5;
}
main article section .fa-angle-right {
  margin-left: 10px;
}

#top-charts {
  align-items: center;
  justify-content: space-between;
  border-bottom: solid 1px lightgray;
  background: white;
  padding-left: 15px;
}
#top-charts h4 {
  margin: 0;
}
#top-charts h4 span {
  font-weight: 100;
}
#top-charts a {
  border-left: solid 1px lightgray;
  padding: 18px 15px;
}
#top-charts a .fa-angle-right {
  margin-left: 5px;
}

#section2 {
  padding-bottom: 20px;
}
#section2 article {
  flex-direction: column;
}
#section2 article img {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  margin-right: 20px;
}
#section2 article h2 {
  align-items: center;
}
#section2 article h2 span {
  background: yellow;
  padding: 5px 8px;
  border-radius: 4px;
  font-size: 14px;
  margin-right: 10px;
}
#section2 a {
  background: blue;
  color: white;
  padding: 18px 10px;
  display: block;
  text-align: center;
  border-radius: 5px;
}

footer {
  padding: 0 15px 15px;
  text-align: center;
  color: #adadad;
}
footer .social-links {
  border-bottom: solid 2px rgba(211, 211, 211, 0.2);
  margin-bottom: 20px;
}
footer .social-links a {
  color: lightgray;
  flex: 1;
  padding: 15px 15px 20px;
  font-size: 20px;
}
footer a {
  color: #939393;
}
footer #settings {
  text-decoration: underline;
}
footer p {
  margin-top: 5px;
}

@media (min-width: 768px) {
  main > section {
    display: flex;
    flex-wrap: wrap;
  }
  main article {
    display: flex;
    flex-direction: column;
  }
  main article:nth-of-type(1n+2) {
    margin-right: 20px;
    flex: 1 1 35%;
  }
  main article section {
    margin-top: auto;
  }

  #twitter:after {
    content: "Tweet";
    margin-left: 8px;
  }

  #facebook:after {
    content: "Share";
    margin-left: 8px;
  }

  #top-charts a {
    border: none;
  }

  #section2 > article {
    flex-basis: 100%;
  }
  #section2 a {
    width: 100%;
  }

  #section2 article {
    flex-direction: row;
    align-items: center;
  }
}

  
</style>


</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <header id="main-header">
    <div id="title"><h2><strong>JOMARVENTURES</strong> <span>ITENERARY CONFIRMATION</span></h2></div>
    <div class="info">
    </div>
  </header>
  
  <div class="author-info">
    <img src="https://d3iw72m71ie81c.cloudfront.net/female-70.jpg">
    <div>
      <h4>'.strtoupper($fullname).'</h4>
      <p>PROMO : '.strtoupper($lrow['promo_name']).' | DESTINATION : '.strtoupper($lrow['destination_province']).','.strtoupper($lrow['destination_city']).'</p>
    </div>
  </div><!--author info end-->
  
  <main>
    
    
    <section id="section2">
      <h1>ITENERARY DETAILS</h1>
      <article>
        <div>
          <header>
            <h2><span>1</span> DEPARTURE DETAILS | DATE '.$booking_date.' | PICKUP '.$pickup.'</h2>
          </header>
          <section>
            <p>Settle first the total amount of your booking | Amount to settle ₱ '.$price_to_pay.'</p>
            <p>Your booking is only good for '.$pax.' passenger/individuals, any excess or addition is subject to additional payment</p>
          </section>
        </div>
      </article>
      
      <article>
        <div>
          <header>
            <h2><span>2</span>PROMO CODE</h2>
          </header>
          <section>
            <p>Please enter this promo code to validate the transaction, <b>PROMO CODE</b> | '.$code.' </p>
            <p>Your confirmed payment method is <b>METHOD</b> | '.$mode.' <b>PAYMENT STATUS</b> | '.$status.' </p>
          </section>
        </div>
      </article>
      
      <article>
        <div>
          <header>
            <h2><span>3</span>PROMO DETAILS</h2>
          </header>
          <section>
            <p>The promo starts on '.strtoupper($lrow['promo_start']).'</p>
            <p>The promo ends on '.strtoupper($lrow['promo_end']).'</p>
            <p>The promo price per individual is ₱ '.strtoupper($lrow['promo_price']).'</p>
            <h5>DESCRIPTION</h5> 
            <p>'.strtoupper($lrow['description']).'</p>
          </section>
        </div>
      </article>
    </section>
    
  </main>
  
  <footer>
    
    <a href="#" id="settings">JOMARVENTURES</a>
    <p>If you believe this has been sent to you in error, please safely <strong><a href="#">unsubscribe</a></strong>. For more information, please see our <strong><a href="#">privacy policy</a></strong>.</p>
    <small>&copy; 2017 All Rights Reserved</small>
  </footer>
  
</div><!--container end-->
<!-- partial -->
  
</body>
</html>';

   
    //Load composer's autoloader

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.hostinger.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'juan2worldsecurity@juan2world.com';     
        $mail->Password = '@Devcore101213';             
        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //     'verify_peer' => false,
        //     'verify_peer_name' => false,
        //     'allow_self_signed' => true
        //     )
        // );                         
        $mail->SMTPSecure = 'tls';                           
        $mail->Port = 587;                                   

        //Send Email
        $mail->setFrom('juan2worldsecurity@juan2world.com');
        
        //Recipients
        $mail->addAddress($email);              
        $mail->addReplyTo('juan2worldsecurity@juan2world.com');
        
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
    
       $_SESSION['result'] = 'Message has been sent';
     $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
     $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
     $_SESSION['status'] = 'error';
    }

  
 
        
      
          // echo 'Invalid Username and Password Combination';
          header('location: ../index.php?view=VERIFY&email='.$email.'&code='.$code.'&id='.$promo_id);
        

  

   }

  
