<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="div">
<form class="form"  onsubmit="return validation()" method="POST">
        <lable id="lable" class="lable">inter name</lable><br>
        <input name="name" type="text" id="name" class="input"></input>
        <span id="lble"> </span> <br>
        <lable id="uname" class="lable">inter user name</lable><br>
        <input name="uid" type="text" id="urname" class="input"></input>
        <span id="urcname"> </span><br>
        <lable  id="pass" class="lable">inter password</lable><br>
        <input name="pass" type="text" id="fpass" class="input"></input>
        <span id="upass"> </span><br>
        <lable id="cpass" class="lable">confirm password</lable><br>
        <input name="cpass" type="text" id="ccpass" class="input"></input>
        <span id="ucpass"> </span><br>
        <lable id="cpass" class="lable">inter mobile no</lable><br>
        <input name="mobile" type="text" id="mobile" class="input"></input>
        <span id="umobile"> </span><br>
        <lable id="cpass" class="lable"> inter email id</lable><br>
        <input name="email" type="text" id="email" class="input"></input>
        <span id="uemail"> </span><br>
        <input  type="submit" class="button" > </input>
        <script type="text/javascript">
         function validation(){
             var x1 = document.getElementById('name').value;
             var x2 = document.getElementById('urname').value;
             var x3 = document.getElementById('fpass').value;
             var x4 = document.getElementById('ccpass').value;
             var x5 = document.getElementById('mobile').value;
             var x6 = document.getElementById('email').value;
             if(x1=="") {
                document.getElementById('lble').innerHTML="please inter valid name";
                return false;
             }
             if(x2=="") {
                document.getElementById('urcname').innerHTML="please inter valid username";
                return false;
             }
             if(x3=="") {
                document.getElementById('upass').innerHTML="please inter valid password";
                return false;
             }
             if(x4=="") {
                document.getElementById('ucpass').innerHTML="please inter valid confirm password";
                return false;
             }
             if(x5=="") {
                document.getElementById('umobile').innerHTML="please inter valid mobile no";
                return false;
             }
             if(x6=="") {
                document.getElementById('uemail').innerHTML="please inter valid email";
                return false;
             }
             if(x3!==x4) {
                 alert("please inter same password")
                 return false;
             }
             
         }
     </script>
     </form>
    <!-- <a href="delet.php?na=$rs['name']"> delet </a>  --->
     
</div>
</body>
</html>

<?php
include 'config/conn.php';
//include 'smtpmail.php';
//include 'otp1.php';
 error_reporting(0);
 session_start();
 

  if (isset($_POST) || isset($name) || isset($uname) || isset($pass) || isset($cpass) || isset($mobile) || isset($emai)) {
       
    $name = $_POST['name'];
        $uname = $_POST['uid'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];  
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $otp = rand(1111,9999);
        $_SESSION['index'] = $uname;
        $insert = "INSERT INTO `registration`(name, uname, pass, cpass, mobile, email, otp) VALUES ('$name','$uname','$pass','$cpass','$mobile','$email', '$otp')";
        
        $insert1 = mysqli_query($con, "INSERT INTO `acinfo1` (acuid, balance) VALUE ('$uname', '100')");
        $res = mysqli_query($con, $insert);
        if ($res){
            echo "yes";
        
            echo "<br>";
        }
        if ($res){
           header('location:otp.php');
        }
        else {
            echo "no";
        }
   } 
  
   
   
?>
