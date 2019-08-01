<?php
require_once('bd/db.php');

$id=$_GET['id'];
$agree=$_GET['yes'];
$id_ticket=$id;
if($agree==1){
	mysql_query("UPDATE `user` SET  `user_accept` =  '1' WHERE  `user`.`user_unique_id` ='$id'")or die("Fail to insert".mysql_error());
	
	$results=mysql_query("SELECT user_email,user_unique_id FROM `user` where user_unique_id='$id_ticket'");
while($rowz = mysql_fetch_array($results))
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

$mail->Subject = 'Thank You';
$mail->Body    = 'Sehr geehrte Kunde Vielen Dank für Ihre Zustimmung zum Kostenvoranschlag, wir benachteiligen Sie sowie die  Reparatur eendet ist.Mit freundlichen Grüßen

CLS-Service-Team 
. ';


if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 2;
} else {
    echo "Finished";
}


		
	exit();
}else{
	
	
	mysql_query("UPDATE `user` SET  `user_accept` =  '0' WHERE  `user`.`user_unique_id` ='$id'")or die("Fail to insert".mysql_error());
	
	$results=mysql_query("SELECT user_email,user_unique_id FROM `user` where user_unique_id='$id_ticket'");
while($rowz = mysql_fetch_array($results))
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

$mail->Subject = 'Thanks For your Reply';
$mail->Body    = 'Sehr geehrte Kunde ,
Vielen Dank für Ihre Mitteilung .
Mit freundlichen Grüßen

CLS-Service-Team 


. ';


if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 2;
} else {
    echo "Finished";
}


		
	
	
	exit();
}
?>