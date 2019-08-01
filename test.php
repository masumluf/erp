<?php
require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.1und1.de';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'reparatur@cls-computer.de';                 // SMTP username
$mail->Password = 'Halima1!';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'reparatur@cls-computer.de';
$mail->FromName = 'Cls';
$mail->addAddress('masum.luf@gmail.com');     // Add a recipient
             // Name is optional
$mail->addReplyTo('reparatur@cls-computer.de', 'Information');



$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Product Amount';
$mail->Body    = ' test just ';


if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 2;
} else {
    echo 1;
}

?>