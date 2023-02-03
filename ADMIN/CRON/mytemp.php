<?php 
  
  $code = $_GET['code'];
  date_default_timezone_set('Asia/Manila'); 
  $date = date('Y-m-d h:i:s');
  include('ADMIN/connection/connection.php'); 
  
  
                            $api_url = 'https://ipinfo.io/json?token=06013b989729d4';

                            // Read JSON file
                            $json_data = file_get_contents($api_url);

                            // Decode JSON data into PHP array
                            $response_data = json_decode($json_data);

                            $city = $response_data->city;
                            $region = $response_data->region;
                            $postal = $response_data->postal;
                            $ip = $response_data->ip;
                            $org = $response_data->org;
                            // $loc = $response_data->loc;
                            $rip =$response_data->loc;

  
  mysqli_query($conn,"INSERT INTO auto_mail_view_check (code, city, region, postal, ip, date_viewed) VALUES ('$code', '$city', '$region', '$postal', '$ip', '$date')");
  
  
  

?>