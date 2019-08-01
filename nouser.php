<?php

	require_once('bd/db.php');
	
	$id=$_GET['id'];
	$bill=$_GET['bill'];
	$i=0;
	
	



	
$query = "SELECT * FROM user WHERE user_unique_id='$id'";
	 
$result = mysql_query($query) or die(mysql_error());


// Print out the contents of each row into a table 
while($row = mysql_fetch_array($result)){

	$vat = 15 * (19 / 100);
	
	if($row['express_service']=="yes"){
		$ex=15;
	    $final=$ex+$vat+15;
	}else{
		$ex=0;
	    $final=$ex+$vat+15;
	}
	$i++;

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
      <td width="258" rowspan="3" valign="top"><table width="216" height="584" border="0" align="right">
        <tr>
          <td height="95" valign="top"><img src="assets/img/logo.png" width="210" /></td>
          </tr>
        <tr>
          <td><p>Auf dem Sand 76</p>
            <p>68309 Mannheim-Käfertal</p></td>
          </tr>
        <tr>
          <td><p>Filiale</p>
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
      <td height="402" colspan="2">
      
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
          <td width="43%">Issue</td>
          <td width="12%">Express service</td>
          <td width="20%">Amount</td>
        </tr>
        <tr>
          <td height="195">Servicing</td>
          <td>
          <?php
		    echo $row['user_mobile_problem']; 
		  ?>
          
          </td>
          <td>
           <?php
		    echo $row['express_service']; 
		  ?>
          </td>
          <td>
           <?php
		    echo 15; 
		  ?>
          </td>
        </tr>
        <tr>
          <td height="15" colspan="3">
          <div style="float:right">
          Amount
          </div>
          </td>
          <td>
            <?php
		    echo 15; 
		  ?>
          </td>
        </tr>
        <tr>
          <td height="15" colspan="3">
          <div style="float:right">
          Express Service (15 EURO)
          </div>
          </td>
          <td>
           <?php
		    echo $ex; 
		  ?>
          </td>
        </tr>
        <tr>
          <td height="15" colspan="3"> <div style="float:right">
          VAT (19%)
          </div>
          
          </td>
          <td>
            <?php
		    echo $vat; 
		  ?>
          </td>
        </tr>
        <tr>
          <td height="15" colspan="3"> <div style="float:right">
          Total Amount
          </div>
          </td>
          <td>
          <?php
		    echo $final; 
		  ?>
          </td>
        </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  <tr>
    <td width="298"><a href="javascript:history.go(-1)">Edit Information</a></td>
    <td width="430">
      <a href="#" class="btn btn-success" id="print">Print Copy</a>
      
      <a href="admin.php" class="btn btn-danger">Close</a>
      
      </td>
  </tr>
  
</table>
<script>
$('#print').click(function() {
window.print() ;
});
</script>
</div>
</body>
</html>
<?php } ?>
<?php
	if($i==0){
		echo "Nothing Foung";
}

?>