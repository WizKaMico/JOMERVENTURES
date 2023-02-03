<?php 

include('../ADMIN/connection/connection.php');
 if(isset($_POST['checkout'])){
                                
                                $pcode = $_POST['pcode']; 
                                $code = $_POST['code']; 
                                $email = $_POST['email'];
                                $id = $_POST['id'];
                                
                                if($pcode == $code){

                                  mysqli_query($conn,"UPDATE proceed_to_pay SET status = 'VERIFIED' WHERE code = '$pcode'"); 
                                  header('Location: ../index.php?view=PAY&email='.$email.'&code='.$code.'&id='.$id.'');

                                }else{
                                    
                                    header('Location: ../index.php?view=VERIFY&email='.$email.'&code='.$code.'&id='.$id.'&message=INVALID'); 
                                    
                                }
                              }    




?>