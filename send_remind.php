<?php

require_once('bd/db.php');
error_reporting(0);

$customer_id=$_POST['customer_id'];

$result=mysql_query("SELECT user_unique_id FROM `user` where user_unique_id='$customer_id' ");
$row=mysql_fetch_object($result);
if(mysql_affected_rows()==0){
	echo 0;
	exit();
}


$results2=mysql_query("SELECT user_email,user_unique_id FROM `user` where user_unique_id='$customer_id'");
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

$mail->Subject = 'Device Ready to Pick up';
$mail->Body    = 'Dear Customer,<br> your Product is ready for Delivery, Please visit our service center. ';


if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 2;
} else {
    echo 1;
}

?>