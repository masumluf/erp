<?php

	require_once('bd/db.php');
	//error_reporting(0);
	
	$id=$_POST['id'];
	$billdate=date("Y-m-d");
	$prb=$_POST['prb'];
	$amount=$_POST['amount'];
	$device1=$_POST['device1'];
	$qnt1=$_POST['qun1'];
	$amount1=$_POST['amount1'];
		$device2=$_POST['device2'];
	$qnt2=$_POST['qun2'];
	$amount2=$_POST['amount2'];
		$device3=$_POST['device3'];
	$qnt3=$_POST['qun3'];
	$amount3=$_POST['amount3'];
		$device4=$_POST['device4'];
	$qnt4=$_POST['qun4'];
	$amount4=$_POST['amount4'];
	$bill=$_POST['bill'];
	$i=0;

$query = "SELECT * FROM user	WHERE user_unique_id='$id'";
	 
$result = mysql_query($query) or die(mysql_error());


// Print out the contents of each row into a table 
while($row = mysql_fetch_array($result)){
	
	$express=$row['express_service'];
	$i++;

?>



<?php



if($row['express_service']== 'yes'){

	$express=15;
	
}if($row['express_service']== 'no') {

$express=0;
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cls-Computer.de</title>
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/bootstrap.css" />
<script src="assets/js/jquery.js"></script>
<style>
*{
	font-size:15px;
	font-weight:bold;
}
td { padding:10px;}
strong{ font-size:14px;}
</style>
</head>

<body>
<div class="nav nav-header addusernav" style="padding:10px;">
<br />
</div>
<div  class="container">
<table width="1001" border="0">
    <tr>
      <td height="101" colspan="3">
      <h2>HARDWARE & SOFTWARE | NETWORK | SUPPORT </h2>
      
      </td>
      <td width="258" rowspan="4" valign="top"><table width="216" height="584" border="0" align="right">
        <tr>
          <td height="95" valign="top"><img src="assets/img/logo.png" width="210" /></td>
          </tr>
        <tr>
          <td><p>Auf dem Sand 76</p>
            <p>68309 Mannheim-Käfertal</p></td>
          </tr>
        <tr>
          <td><p>Filiale mane branch</p>
            <p>L14 ,16-17</p>
            <p>68161 Mannheim -Innenstadt</p></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="674" colspan="2">
      
      <table width="680" border="0" class="table">
  <tr>
    <td>Bill Number</td>
    <td>
    <?php
	  echo $bill;
	?>
    
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="16%">
    <strong>
    <?php
	echo $row['manager_name'];
	?>
    </strong>
    </td>
    <td width="33%">
    <strong style="float:right">
       <?php
		    echo $row['user_unique_id'];
		  ?>
    </strong>
    </td>
    <td width="30%">
    <strong style="float:right">
    Mannheim
    </strong>
    </td>
    <td width="21%">
    <strong style="float:right">
    <?php echo date('d-m-y');?>
    </strong>
    
    </td>
  </tr>
</table>

      <table width="680" height="420" border="1" class="table">
        <tr>
          <td width="13%">Type</td>
          <td width="35%">Bezeichnung </td>
          <td width="20%">Menge</td>
          <td width="12%">Preis</td>
          <td width="20%">Gesamtpreis EUR</td>
        </tr>
        <tr>
          <td height="195">Servicing</td>
          <td>
            <p>
              <?php
		    echo $prb; 
		  ?>
            </p>
            <p><?php echo $device1 ;?></p>
            <p><?php echo $device2 ;?></p>
            <p><?php echo $device3 ;?></p>
            <p><?php echo $device4 ;?></p>
          
          </td>
          <td><p>&nbsp;</p>
            <p><?php echo $qnt1 ;?></p>
            <p><?php echo $qnt2 ;?></p>
            <p><?php echo $qnt3 ;?></p>
            <p><?php echo $qnt4 ;?></p>
            
            
            
            </td>
          <td>
          <p><?php echo $amount ;?></p>
          <p><?php echo $amount1 ;?></p>
          <p><?php echo $amount2 ;?></p>
          <p><?php echo $amount3 ;?></p>
          <p><?php echo $amount4 ;?></p>
          </td>
          <td>
            <p>
              <?php
		    echo $amount; 
		  ?>
            </p>
            <p><?php echo $am1=$qnt1*$amount1 ;?></p>
            <p><?php echo $am2=$qnt2*$amount2 ;?></p>
            <p><?php echo $am3=$qnt3*$amount3 ;?></p>
            <p><?php echo $am4=$qnt4*$amount4 ;?></p>
            
            </td>
        </tr>
        <tr>
          <td height="15" colspan="4">
          <div style="float:right">
          Amount
          </div>
          </td>
          <td>
            <?php
		    echo $final=$amount+$am1+$am2+$am3+$am4; 
		  ?>
          </td>
        </tr>
        <tr>
          <td height="15" colspan="4">
          <div style="float:right">
          Express Service (15 EURO)
          </div>
          </td>
          <td>
            <?php
		    echo $express; 
		  ?>
          </td>
        </tr>
        <tr>
          <td height="15" colspan="4"> <div style="float:right">
            Total Amount
            </div>
            </td>
          <td>
            <?php
		    echo $totalamount=$final+$express; 
		  ?>
            </td>
        </tr>
        <tr>
          <td colspan="5">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2" style="font-size:12px;"><p>Das Lieferdatum entspricht dem Rechnungsdatum, sofern nicht separat angegeben!</p>
        <p>Die gelieferten Waren bleiben bis zur vollstandigen Bezahlung unser Eigentum. Lieferungen und Leistungen erfolgen ausschlieBlich zu unseren AGBs.<br />
        </p>
      <p>Zahlbar sofort nach Erhalt</p></td>
    </tr>
    <tr>
    <td width="298"><a href="javascript:history.go(-1)">Edit Information</a></td>
    <td width="430">
      <a href="#" class="btn btn-success" id="print">Print Copy</a>
      
      <a href="#" id="close" class="btn btn-danger">Close</a>
      
      </td>
  </tr>
  
</table>
<script>
$('#print').click(function() {
window.print() ;

});
 $('#close').click(function() {
       window.location.href = "http://localhost/erp/admin.php";
   });
</script>
</div>
</body>
</html>
<?php } ?>

<?php
mysql_query("INSERT INTO `accept_bill` ( `user_id`, `bill_number`, `amount`, `billingdate` ) VALUES ('$id', '$bill', '$totalamount', '$billdate')")or die('Something is wrong we are trying to fix it soon'.mysql_error());

 ?>
<?php
	if($i==0){
		header("Location: nouser.php?id=$id&bill=$bill");
}

?>