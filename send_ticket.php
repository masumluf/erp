
<?php
require_once('bd/db.php');
//error_reporting(0);
$customer_id=$_POST['customer_id'];
$phone=$_POST['phone'];
$amount=$_POST['amount'];
$duration=$_POST['duration'];
$problem=$_POST['problem'];
$email_noti=$_POST['email_noti'];



$results=mysql_query("SELECT user_email,user_unique_id,express_service,amounts FROM `user` where user_unique_id='$customer_id' ");
while($rowz = mysql_fetch_array($results))
		{
			 $ticket_email=$rowz['user_email'];
			 $express=$rowz['express_service'];
			 $amounts=$rowz['amounts'];
		}
		if($express=='yes'){
			$total_amount=$amount+15;
		}else{
			$total_amount=$amount;
		}
mysql_query("INSERT INTO `cost` ( `amount`, `duration`, `user_id`, `problem`, `tec_name`) VALUES ('$amount', '$duration', '$customer_id', '$problem', '$phone')")or die('Something is wrong we are trying to fix it soon'.mysql_error());
//echo 1;




		//echo $ticket_email;
?>

<?php

if($email_noti =="no"){
	echo 1;
	die();
}else{
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
$mail->addReplyTo('info@livetvworlds.com', 'Information');



$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Product Amount';
$mail->Body    = '
Sehr geehrte Kunde 

Die Analyse/der Kostenvoranschlag:

<table width="691" border="1" align="center" class="table">
  <tr bgcolor="#003366" st>
    <td style="padding:5px; color:#fff;">Produkt  kore</td>
    <td style="padding:5px; color:#fff;">Beschreibung</td>
    <td style="padding:5px; color:#fff;">Preis(Euro inkl. MwSt)</td>
  </tr>
  <tr>
    <td>'.$customer_id.'</td>
    <td>'.$problem.'</td>
    <td>'.$total_amount.'</td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    Summe
    </td>
    <td>'.$total_amount.'</td>
  </tr>
</table>
If you want to repair it in our firm  please click ok Button <a href="http://localhost/erp/up.php?id='.$customer_id.'&yes=1" class="btn btn-success">ok</a><br /><br />
If you do not want to repair it in our firm  please click Ignore Button <a href="http://localhost/erp/up.php?id='.$customer_id.'&yes=0" class="btn btn-warning">Ignore</a><br /><br />
Wichtiger Hinweis: Bitte beachten Sie, das der Kostenvoranschlag auf einer Erstprüfung des Gerätes beruht und zunächst keine Verbindliche Zusage auf eine tatsächliche Durchführbarkeit der Reparatur darstellt.

Hiermit stimme ich der Reparatur zu   Ja		nein

Im Falle einer Reparaturablehnung berechnen wir wie im Reparaturauftrag  mitgeteilt €'.$amounts.'

Mit freundlichen Grüßen

CLS-Service-Team 

 ';


if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 2;
} else {
    echo 1;
}
}
?>