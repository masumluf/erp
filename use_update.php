<?php
error_reporting(0);

if(isset($_POST['user_unique_id'])){
	$user_complains_date=date("Y-m-d");
	$user_unique_id=$_POST['user_unique_id'];
	$user_name=$_POST['user_name'];
	$place=$_POST['place'];
	$user_last_name=$_POST['user_last_name'];
	$user_phone_number=$_POST['user_phone_number'];
	$user_email=$_POST['user_email'];
	$user_zip_code=$_POST['user_zip_code'];
	$user_complain_date=$_POST['user_complain_date'];
	$user_address=$_POST['user_address'];
	$user_mobile_ime=$_POST['user_mobile_ime'];
	$user_mobile_buying_date=$_POST['user_mobile_buying_date'];
	$user_mobile_warrenty=$_POST['user_mobile_warrenty'];
	$user_mobile_problem=$_POST['user_mobile_problem'];
	$user_mobile_password=$_POST['user_mobile_password'];
	$user_mobile_os=$_POST['user_mobile_os'];
	$user_bill_number=$_POST['user_bill_number'];
	$user_important_data=$_POST['user_important_data'];
	$cls_product=$_POST['cls_product'];
	$express_service=$_POST['express_service'];
	$manager_name=$_POST['manager_name'];
	$acco=$_POST['acco'];
	$user_mobile_amount=$_POST['user_mobile_amount'];
	$user_mobile_taking_from=$_POST['user_mobile_taking_from'];
	$user_mobile_other_problem=$_POST['user_mobile_other_problem'];
	
	  switch($user_mobile_taking_from){
    case 'AX-':
        $user_mobile_taking_from="Auf dem Sand";
        break;
    case 'L14-':
       $user_mobile_taking_from="Filiale mane branch";
        break;
    
}
}

?>

<?php
	require_once('bd/db.php');
mysql_query("INSERT INTO `user` ( `user_unique_id`, `user_name`, `user_last_name`, `user_phone_number`, `user_email`, `user_zip_code`, `user_complain_date`, `user_address`, `user_mobile_ime`, `user_mobile_buying_date`, `user_mobile_warrenty`, `user_mobile_problem`, `user_mobile_password`, `user_mobile_os`, `user_bill_number`, `user_important_data`, `cls_product`, `express_service`, `manager_name`, `acco`, `user_mobile_taking_from`, `user_mobile_other_problem`,`user_accept`, `finished`, `place`, `amounts`) VALUES ('$user_unique_id', '$user_name', '$user_last_name', '$user_phone_number', '$user_email', '$user_zip_code', '$user_complains_date', '$user_address', '$user_mobile_ime', '$user_mobile_buying_date', '$user_mobile_warrenty', '$user_mobile_problem', '$user_mobile_password', '$user_mobile_os', '$user_bill_number', '$user_important_data', '$cls_product', '$express_service', '$manager_name', '$acco', '$user_mobile_taking_from', '$user_mobile_other_problem', '2', '0','$place','$user_mobile_amount')")or die('Something is wrong we are trying to fix it soon'.mysql_error());

?>

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
$mail->addAddress($user_email);     // Add a recipient
             // Name is optional
$mail->addReplyTo('reparatur@cls-computer.de', 'Information');



$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Product Reciving Alert';
$mail->Body    = 'Dear Customer,<br> Your Product Has been received your Product tracking number is:'.$user_unique_id.'';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>