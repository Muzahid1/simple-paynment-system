<?php
$con = mysqli_connect("phpMyAdmin demo - MySQL", "root", "DBAMALranti");
$query = "SELECT * FROM `tbsiswa`";
    $select = mysqli_query(mysqli_fatch_assoc($con, $query));
     $sect = $select['NAMA'];    
     echo "$sect";

 
?>