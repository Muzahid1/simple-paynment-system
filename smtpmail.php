<?php
include 'config/conn.php';
    
error_reporting(0);
session_start();
//$mailid = $_SESSION['eml'];
//$email1 = $_POST['email'];
//$email1 =   $showmail['email'];
  ///  $otp1 = rand(1111,9999);
  //  $otpin = mysqli_query($con, "UPDATE`registration1` SET otp='$otp1' WHERE email='$email1'");


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vakaliyamuzahid@gmail.com';                     //SMTP username
    $mail->Password   = 'Mrmuzu4647@';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('vakaliyamuzahid@gmail.com', 'paymwnt system');
     $mail->addAddress($email1);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Welcom to secqre payment system';
    $mail->Body    = 'your otp for registration is' .$otp1;
    //$mail->body   = $otp;
    $mail->AltBody = 'do not shair this otp to another';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>