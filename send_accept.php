<?php
require_once('bd/db.php');
error_reporting(0);

$user_id=$_POST['customer_id'];
$agree=$_POST['agree'];

if($agree=="yes")
$per=1;
else
$per=0;


mysql_query("UPDATE  `user` SET  `user_accept` =  '$per' WHERE  `user`.`user_unique_id` ='$user_id'")or die("Fail to insert".mysql_error());
echo 1;

?>