<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('../ADMIN/connection/connection.php'); 


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
        date_default_timezone_set('Asia/Manila');
        $date_created  = date('Y-m-d'); 
 			// $rpass = md5($password);
		

          mysqli_query($conn,"INSERT INTO proceed_to_pay (email, phone, fullname, booking_date, price, pax, price_to_pay, pickup, code, promo_id, status, date_created) VALUES ('$email', '$phone', '$fullname', '$booking_date', '$price', '$pax', '$price_to_pay', '$pickup', '$code', '$promo_id', '$status', '$date_created')");  

         

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
    <div id="title"><h2><strong>Email</strong> <span>Template</span></h2></div>
    <div class="info">
      <h3>Issue #43</h3>
      <h1>Hong Kong</h1>
    </div>
  </header>
  
  <div class="share-links">
    <p><strong>Share</strong> the issue:</p>
    <a href="#" id="twitter" title="tweet"><i class="fa fa-twitter"></i></a>
    <a href="#" id="facebook" title="share"><i class="fa fa-facebook"></i></a>
  </div><!--share links end-->
  
  <div class="author-info">
    <img src="https://d3iw72m71ie81c.cloudfront.net/female-70.jpg">
    <div>
      <h4>Jane Doe</h4>
      <p>Journalist Hong Kong lover</p>
    </div>
  </div><!--author info end-->
  
  <main>
    <section>
      <article>
        <header>
          <h2>Iconic Skyline a Lengendery Kitchen and Lush Nature</h2>
        </header>
        <section>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ut incidunt dolorum necessitatibus eveniet ad suscipit cum iste officiis iusto dolore reprehenderit laborum nemo, praesentium beatae molestias facilis. Et vel.</p>
          <a href="#">Check all Janes picks <i class="fa fa-angle-right"></i></a>  
        </section>
      </article>

      <article>
        <img src="https://images.pexels.com/photos/356269/pexels-photo-356269.jpeg?h=350&auto=compress&cs=tinysrgb">
        <header>
          <h2>Traditional Holidays: Where to Celebrate</h2>
        </header>
        <section>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis veniam earum. Sint, modi similique. Repudiandae tempora minus id aliquam similique obcaecati unde, magnam debitis quaerat animi, nemo deleniti temporibus!</p>
          <a href="#">Read more <i class="fa fa-angle-right"></i></a>
        </section>
      </article>

      <article>
        <img src="https://images.pexels.com/photos/50868/pexels-photo-50868.jpeg?h=350&auto=compress&cs=tinysrgb">
        <header>
          <h2>Architecture in Hong Kong</h2>
        </header>
        <section>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis veniam earum. Sint, modi similique. Repudiandae tempora minus id aliquam similique obcaecati unde, magnam debitis quaerat animi, nemo deleniti temporibus!</p>
          <a href="#">Read more <i class="fa fa-angle-right"></i></a>
        </section>
      </article>

      <article>
        <img src="https://images.pexels.com/photos/17505/pexels-photo.jpg?h=350&auto=compress&cs=tinysrgb">
        <header>
          <h2>Nature and Parks: Find Exotic Birds in the City Center</h2>
        </header>
        <section>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis veniam earum. Sint, modi similique. Repudiandae tempora minus id aliquam similique obcaecati unde, magnam debitis quaerat animi, nemo deleniti temporibus!</p>
          <a href="#">Read more <i class="fa fa-angle-right"></i></a>
        </section>
      </article>

      <article>
        <img src="https://images.pexels.com/photos/230629/pexels-photo-230629.jpeg?h=350&auto=compress&cs=tinysrgb">
        <header>
          <h2>Nature and Parks</h2>
        </header>
        <section>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis veniam earum. Sint, modi similique. Repudiandae tempora minus id aliquam similique obcaecati unde, magnam debitis quaerat animi, nemo deleniti temporibus!</p>
          <a href="#">Read more <i class="fa fa-angle-right"></i></a>
        </section>
      </article>
    </section>
    
    <div id="top-charts">
      <h4><strong>Top </strong><span>charts</span></h4>
      <a href="#">See all <i class="fa fa-angle-right"></i></a>
    </div>
    
    <section id="section2">
      <h1>Top 10 Instagram Hotspots in Hong Kong</h1>
      <article>
        <img src="https://images.pexels.com/photos/158028/bellingrath-gardens-alabama-landscape-scenic-158028.jpeg?h=350&auto=compress&cs=tinysrgb">
        <div>
          <header>
            <h2><span>1</span> Hong Kongs Garden Hideaway</h2>
          </header>
          <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut veritatis sunt distinctio vitae deleniti eum illo, eaque dolorum ex minus, dolore cumque soluta similique recusandae doloribus sit blanditiis. Nemo, aliquid.</p>
          </section>
        </div>
      </article>
      
      <article>
        <img src="https://images.pexels.com/photos/539430/pexels-photo-539430.jpeg?h=350&auto=compress&cs=tinysrgb">
        <div>
          <header>
            <h2><span>2</span> Food Too Cute to Eat</h2>
          </header>
          <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut veritatis sunt distinctio vitae deleniti eum illo, eaque dolorum ex minus, dolore cumque soluta similique recusandae doloribus sit blanditiis. Nemo, aliquid.</p>
          </section>
        </div>
      </article>
      
      <article>
        <img src="https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg?h=350&auto=compress&cs=tinysrgb">
        <div>
          <header>
            <h2><span>3</span> The Iconic Rainbow Residence</h2>
          </header>
          <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut veritatis sunt distinctio vitae deleniti eum illo, eaque dolorum ex minus, dolore cumque soluta similique recusandae doloribus sit blanditiis. Nemo, aliquid.</p>
          </section>
        </div>
      </article>
      <a href="#">Continue reading</a>
    </section>
    
  </main>
  
  <footer>
    <div class="social-links">
      <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
      <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" title="Google +"><i class="fa fa-google-plus"></i></a>
      <a href="3" title="Dribbble"><i class="fa fa-dribbble"></i></a>
    </div>
    <a href="#" id="settings">Manage Settings</a>
    <p>If you believe this has been sent to you in error, please safely <strong><a href="#">unsubscribe</a></strong>. For more information, please see our <strong><a href="#">privacy policy</a></strong>.</p>
    <small>&copy; 2017 All Rights Reserved</small>
  </footer>
  
</div><!--container end-->
<!-- partial -->
  
</body>
</html>



';

   
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

  
