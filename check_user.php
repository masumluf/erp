<?php
require_once('bd/db.php');
error_reporting(0);
sleep(2);

$user=$_POST['num'];

$result=mysql_query("SELECT user_unique_id FROM `user` where user_unique_id='$user' ");
$row=mysql_fetch_object($result);
if(mysql_affected_rows()>0){
	echo 1;
	exit();
}else{
	echo 0;
	exit();
}

?>