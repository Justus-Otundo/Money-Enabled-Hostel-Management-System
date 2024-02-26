<?php 
$name = "Harmony Lumumba";
$email = "lumumbaharmony@gmail.com";
$subject = "NEW MAIL";
$Message = "You have paid the membership of the hostels.Thank you";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "lumumbaharmony@gmail.com";
$mail->Password = "@BobMarley32";

$mail->setFrom($email,$name);
$mail->addAddress("lumumbaharmony@gmail.com");

$mail->Subject = $subject;
$mail->Body = $Message;

$mail->send();
