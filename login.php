<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div">
    <form onsubmit="return validation()" class="form" method="post">
    <lable  class="loginf" > inter user name</lable><br>
    <input id="loginf" class="loginf" name="loginid" type="text" id="username"> </input><br>
    <span id="user" > </span> <br>
    <lable class="loginf" > inter password </lable><br>
    <input class="loginf" name="loginpass" type="text" > </input><br>
    <span id="pass" > </span>
    <center> <button class="button" type="submit">login</button> </center>
</form>
<div>
   <p> dont have an account <a href="index.php"><h4>register</h3></a> </p>    
</div>
</div>

<script> 
          function validation(){
            var x1 = document.getElementById('loginf').value;
            ///var x2 = x1 = document.getElementById('loginf').value;
            if(x1=="") {
                return false;
            }
          }      
          </script>
    <style>
        body{
            background-color: rgb(71 24 233);
        }
        .loginf{
            margin:4px;
            top: 10px;
           
        }
        .form{
            margin-left:8px;
            margin-top:5px;
        }
        .div {
            background-color: white;
    border-radius: 7px;
    margin-left:40%;
    margin-top:225px;
    height:150px;
    width:200px;
    border:solid white;
        }
       
    </style>
</body>
</html>


<?php 
include 'config/conn.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $loginname = $_POST['loginid'];
    $loginpass = $_POST['loginpass'];

    $fatc = "SELECT * FROM `registration`WHERE uname='$loginname' AND pass='$loginpass '";
    $result = mysqli_query($con, $fatc);
    $login = mysqli_num_rows($result);
     if ($login >0){
        header('location:welcome.php');
       
        $_SESSION['muzahid'] = $loginname;
     }
    else{
        echo "please inter valid detail";
       
        
    }}
    
    
?>