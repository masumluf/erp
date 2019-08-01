<?php
error_reporting(0);



	$user_id=$_POST['user_id'];
	$user_name=$_POST['user_name'];
	$place=$_POST['place'];
	$user_last_name=$_POST['user_last_name'];
	$user_phone_number=$_POST['user_phone_number'];
	$user_email=$_POST['user_email'];
	$user_zip_code=$_POST['user_zip_code'];
	$user_complain_date=date("Y-m-d");
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
	$user_mobile_other_problem=$_POST['user_mobile_other_problem'];
	
	



?>

<?php
	require_once('bd/db.php');


mysql_query("UPDATE  `user` SET  `user_name` =  '$user_name',
`user_last_name` =  '$user_last_name',
`user_phone_number` =  '$user_phone_number',
`user_email` =  '$user_email',
`user_zip_code` =  '$user_zip_code',
`user_address` =  '$user_address',
`user_mobile_ime` =  '$user_mobile_ime',
`user_mobile_buying_date` =  '$user_mobile_buying_date',
`user_mobile_warrenty` =  '$user_mobile_warrenty',
`user_mobile_problem` =  '$user_mobile_problem',
`user_mobile_password` =  '$user_mobile_password',
`user_mobile_os` =  '$user_mobile_os',
`user_bill_number` =  '$user_bill_number',
`user_important_data` =  '$user_important_data',
`cls_product` =  '$cls_product',
`express_service` =  '$express_service',
`manager_name` =  '$manager_name',
`place` =  '$place',
`acco` =  '$acco',
`user_mobile_other_problem` =  '$user_mobile_other_problem' WHERE  `user`.`user_id` =$user_id;
")or die("Fail to insert".mysql_error());

echo '<div class=""> Data Has Been Updated </div>';

?>