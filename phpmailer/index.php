<?php

require 'vendor/autoload.php';

//use PHPMailer;

$mail = new PHPMailer;

$mail->isSMTP();	// use SMTP
$mail->Host = "smtp.gmail.com";	// SMTP server
$mail->Port = 587;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Username = "vincentaycardo@gmail.com";
$mail->Password = "vinc3gmail";

$mail->setFrom('vincentaycardo@gmail.com', 'Vince Gmail');
$mail->addReplyTo('vincentaycardo@gmail.com', 'Vince Gmail');

$mail->Subject = "PHPMailer test email 1";
$mail->Body = "Hi, this is email 1 from phpmailer.";

$address = "vinceaycardo@outlook.com";
$mail->addAddress($address, 'Vince Outlook');

if (! $mail->send()){
	echo "Mailer Error: ".$mail->ErrorInfo;
} else {
	echo "Message Sent";
}
?>