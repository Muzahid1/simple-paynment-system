<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="dotp" >
        <form method="post" >
   <lable  class="lotp" for="otp"> inter otp </lable> <br>
    <input name="vrfyotp"  palaceholder="inter otp hear" class="otp"> </input>
    <button type="submit" class="otp"> verify </buttont>
    </form></div>
<style>
    .dotp{
        margin:auto;
        margin-top:10%;
        border:white 2px;
        height:130px;
        width:220px;
        box-shadow:-1px 2px 3px 2px #b1a6a6;
        border-radius:6px;
    }
    .lotp{
        margin:auto;
        margin-left:70px;
       
    }
    .otp{
        margin-left:23px;
        margin-top:30px;
    }
    </style>
</body>
</html>  

<?php 
include 'config/conn.php';
//error_reporting(0);
session_start();
   if(isset($_POST) || isset($loginpass)){
    $name = $_SESSION['index'];
     $loginpass = $_POST['vrfyotp'];
    
     echo $name;   
    $fatch = "SELECT * FROM `registration` WHERE uname='$name' AND otp='$loginpass'";
    $result = mysqli_query($con, $fatch);
    $login = mysqli_num_rows($result);
    
    //$otpsu = $login['otp'];
    // echo $otpsu;
     if ($login >0){
       echo "yes";
        header('location:welcome.php');
       
     //   $_SESSION['muzahid'] = $loginname;
     }
    else{
        echo "please inter valid detail";
       
        
    }}

    
?>