<?php
session_start();
include 'config/conn.php';
unset($_SESSION['muzahid']);
header('location:login.php');
?>
