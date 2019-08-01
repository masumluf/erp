<?php
require_once('bd/db.php');
error_reporting(0);
$user_name=$_POST['user_name_log'];
$user_password=$_POST['user_pass_log'];

$result=mysql_query("SELECT * FROM `auth` where username='$user_name' && pass='$user_password' ");
$row=mysql_fetch_object($result);
if(mysql_affected_rows()>0){
	echo "ok";
	
}else{
	echo "Nothing found";
}
?>