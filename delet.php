<?php
include 'config/conn.php';
require 'login.php';
error_reporting(0);
if(isset($_POST)){
$na = $_POST['name'];
$delet = "DELETE FROM `registration1` WHERE name='$na'";
$dlt = mysqli_query($con, $delet);
if($dlt){
    echo "delet success";
}
}
?>