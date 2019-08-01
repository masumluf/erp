<?php
require_once('bd/db.php');
error_reporting(0);
$name=$_POST['name'];
$pass=$_POST['pass'];
$role=$_POST['role'];

mysql_query("INSERT INTO `auth` ( `username`, `pass`, `role`) VALUES ('$name', '$pass', '$role')")or die('Something is wrong we are trying to fix it soon'.mysql_error());
echo 1;

?>