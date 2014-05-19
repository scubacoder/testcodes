<?php

require 'vendor/autoload.php';

//use PHPMailer;

$mail = new PHPMailer;
$body = file_get_contents('content.html');
$body = eregi_replace("[\]", "", $body);

$mail->isSMTP();	// use SMTP
$mail->Host = "smtp.gmail.com";	// SMTP server
$mail->Port = 587;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Username = "vinceaycardo@gmail.com";
$mail->Password = "alic3marie";

$mail->setFrom('vincentaycardo@gmail.com', 'Vince Gmail');
$mail->addReplyTo('vincentaycardo@gmail.com', 'Vince Gmail');

$mail->Subject = "PHPMailer HTML email with attachment";
//$mail->Body = "Hi, this is email 1 from phpmailer.";
$mail->AltBody = "To view this message, use an HTML compatible email.";
$mail->msgHTML($body);

$address = "vinceaycardo@outlook.com";
$mail->addAddress($address, 'Vince Outlook');

$mail->addAttachment("dog.png");

if (! $mail->send()){
	echo "Mailer Error: ".$mail->ErrorInfo;
} else {
	echo "Message Sent";
}
?>