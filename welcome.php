<?php 
session_start();
error_reporting(0);

include 'config/conn.php';
//include 'updatemail.php';
if (!isset($_SESSION['muzahid'])){ 
  header('location:login.php');
  exit;
}
else {
  $name = $_SESSION['muzahid'];
$fatch = "SELECT * FROM `registration` where uname='$name' ";
   $result = mysqli_query($con, $fatch);
   $rs = mysqli_fetch_assoc($result);
    // echo $rs['id']; 
   // echo $rs['name'];
     //echo "<br>";
     //echo "<br>";
     
    }

   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="jquery-migrate-3.4.0.min.js"></script>
   </head>
   <body> 
    
     <div class="header1">
   <header > 
    <ul>
     <a href="home.php"> <li>home</li></a>
     <a href="about.php"> <li>about</li></a>
     <a href="contact.php"> <li>contact</li></a>
     <a href="logout.php"> <li>logout </li> </a>
  </ul>
  
  
  </header ></div>
     <style>
       .header1{
         border: 2px;
       height:50px;
       margin-left:-28px;
       margin-right:-120px;
       box-shadow:2px 3px 2px rgb(114, 106, 86);
       }
       ul{
         margin-top:-15px;
       }
        
       li{
         top:0px;
         float: left;
         list-style: none;
         margin:10px;
         
       }
     </style>
    <center> <h4>welcome</h4><?php  echo $rs['name']; ?></center>
    <?php //code for user information
    //error_reporting(0);
       $loginname = $_SESSION['muzahid'];
        $acbal = "SELECT * FROM `acinfo1` WHERE acuid='$loginname'";
        $sqlacbal = mysqli_query($con, $acbal);
        $resacbal = mysqli_fetch_assoc($sqlacbal);
        $avalbal = $resacbal['balance']; 
    ?>
    
     <div id="balance"><h4> balance Rs <h5 id="balances"> </h5> </h4>
    <script>
      $(document).ready(function(){
      $.ajax({
        url: 'bal.php',
        type: 'post',
        success:function(responce){
          $('#balances').html(responce);
        }
      });
    });
    </script>
    </div>
    <div id="div1">
    <form action="updatebal.php"  class="form" method="post"> <center><label for="form">transfer money</label></center> <br> <label for="money"> inter amount</label> <br><input name="money"> </input> <br>
    <label for="acno">inter acno</label> <br> <input type="text" name="acno"> </input><br>
     <button onclick="redict()" type="submit"> send </button> </form>
     <div class="pimage">
     <form action="uplodimage.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
     
  </div>
   
     <script>
       function redict(){
        window.location.href("http://localhost/muzahid/index.php")
       
       }
     </script>
     <style> 
        #div1{
          display: flex;
        }
          
          .form{
            margin-top:21px;
            border: solid white 2px;
            width:172px;
            border-color:white;
            box-shadow:-1px 3px 2px 2px #b6b6b6;
            border-radius:8px;
          }
        /*   .pimage{
            border:solid white;
            margin-top:5px;
            height:67px;
            width:180px;
            margin-left:870px;
            box-shadow:-1px 2px 2px #a58787;
          }*/
      </style>
      
    </body>
   </html>
     <?php
   //  include 'updatebal.php';
        //code for send money

     if (isset($_POST) || isset($money) || isset($acno)){
       $money = $_POST['money'];
       $acno = $_POST['acno'];
       $balance1 =['money'];
      
     
    }
      ?>