<?php
require_once('bd/db.php');
error_reporting(0);
$var=$_POST['num'];
 $query = "SELECT  MAX(user_id),user_id FROM user"; 
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	$file=$row['MAX(user_id)'];
			}
			
			$var2=strlen($file);
			if($var2==5){
			 //$date=date("Y");
			  $date4="0";
			  $date2=$date4.$file;
			  //$var2=$date2.$file;
			   
			}
		    if($var2==4){
			  //$date=date("Y");
			  $date4="00";
			  $date2=$date4.$file;
			  //$var2=$date2.$file;
			   
			}if($var2==3){
			  //$date=date("Y");
			   $date4="000";
			   $date2=$date4.$file;
			  //$var2=$date2.$file;
			}if($var2==2){
			  //$date=date("Y");
			   $date4="0000";
			   $date2=$date4.$file;
			  //$var2=$date2.$file;
			}if($var2==1){
			 // $date=date("Y");
			   $date4="00000";
			   $date2=$date4.$file;
			 //$var2=$date2.$file;
			}
			echo $var.$date2;
			?>
