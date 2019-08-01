<?php
require_once('bd/db.php');
$user_id=$_POST['num'];

$result=mysql_query("SELECT user_id FROM `cost` where user_id='$user_id' ");
$row=mysql_fetch_object($result);
if(mysql_affected_rows()>0){
	echo 1;
	return false;
	

}

?>