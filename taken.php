<?php

require_once('bd/db.php');
error_reporting(0);

$customer_id=$_POST['customer_id'];




$results2=mysql_query("SELECT user_email FROM `user` where user_id='$customer_id'");
while($rowz = mysql_fetch_array($results2))
		{
			 $ticket_email=$rowz['user_email'];			
		}
		
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
$mail->addAddress($ticket_email);     // Add a recipient
             // Name is optional
$mail->addReplyTo('reparatur@cls-computer.de', 'Information');



$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Device on Proccessing';
$mail->Body    = 'Sehr geehrte Kunde 

Ihr Auftrag  ist nun in Bearbeitung.

Mit freundlichen Grüßen

CLS-Service-Team 
 .
';


if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 2;
} else {
    echo 1;
}

?>