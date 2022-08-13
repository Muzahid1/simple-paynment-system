<?php
session_start();
 $loginname = $_SESSION['muzahid'];
 include 'config/conn.php';
 $acbal = "SELECT * FROM `acinfo1` WHERE acuid='$loginname'";
 $sqlacbal = mysqli_query($con, $acbal);
 $resacbal = mysqli_fetch_assoc($sqlacbal);
 $avalbal = $resacbal['balance'];
 
?>
<h2> 
    <?php echo "$avalbal"; ?>
</h2>