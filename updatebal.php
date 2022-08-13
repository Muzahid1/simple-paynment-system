<?php
include 'config/conn.php';
session_start();
if (!isset($_SESSION['muzahid'])){
  header('location:login.php');
}
else {
  $money = $_POST['money'];        
  $acno1 = $_POST['acno'];
 $loginname= $_SESSION['muzahid'];
$acvrfy = "select * from `acinfo1` where acuid='$acno1'";
$acquery = mysqli_query($con, $acvrfy);
$ac = mysqli_fetch_assoc($acquery);    //code for account verify

if ($ac){
  $facbal = mysqli_fetch_assoc(mysqli_query($con, "select * from `acinfo1` where `acuid`='$acno1'"));
  $fetchbal = $facbal['balance'];         //code for benefisiry account cradit
 // echo $fetchbal;
  $updatebal = $fetchbal + $money;
  $updatedata = mysqli_query($con, "update `acinfo1` SET `balance`=$updatebal where `acuid`='$acno1'");
 
  if ($updatedata){
    $dabit = mysqli_fetch_assoc(mysqli_query($con, "select * from `acinfo1` where acuid='$loginname'"));
   $dabitbal = $dabit['balance'];
   $dabitbal1 = $dabitbal-$money;             //code for user balance dabit 
   $updatedabitbal = mysqli_query($con, "update acinfo1 SET `balance`='$dabitbal1' where `acuid`='$loginname'");
   
    header('location:welcome.php');
   
  }
}
else {
  echo "<script>alert('account not found')</script>";
}

}



?>