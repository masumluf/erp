<?php
$user_name=$_POST['user_name_log'];
$user_password=$_POST['user_pass_log'];

$user="admin";
$pass="admin";

if($user_name==$user && $pass==$user_password){
	echo "ok";
	return true;
}

echo "wrong user name and password";
?>