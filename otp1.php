<?php 
include 'config/conn.php';
error_reporting();
session_start();
   
//echo "hi";
$name = $_SESSION['index'];
$loginpass = $_POST['vrfyotp'];
//if ($_SERVER["REQUEST_METHOD"] == "POST"){
      
  
  //$loginname = $_POST['email'];
    //$loginpass = $_POST['loginpass'];
   
    $fatc = "SELECT * FROM `registration`WHERE email='$name' AND otp='$loginpass '";
    $result = mysqli_query($con, $fatc);
    $login = mysqli_num_rows($result);
     if ($login == 1){
       echo "yes";
       // header('location:welcome.php');
       
     //   $_SESSION['muzahid'] = $loginname;
     }
    else{
        echo "please inter valid detail";
       
        
    }
    
    
?>