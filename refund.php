<?php
//error_reporting(0);
require_once('bd/db.php');

	$date=date("Y-m-d");
	$user_unique_id=$_GET['id'];
$results=mysql_query("SELECT * FROM `user` where user_id='$user_unique_id' ");
while($rowz = mysql_fetch_array($results))
		{
		


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
      <td width="271" rowspan="27" valign="top"><table width="216" height="584" border="0" align="right">
        <tr>
          <td height="95" valign="top"><img src="assets/img/logo.png" width="210" /></td>
          </tr>
        <tr>
          <td><p>Auf dem Sand 76</p>
            <p>68309 Mannheim-Käfertal</p></td>
          </tr>
        <tr>
          <td><p>Filiale </p>
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
    <td width="265" height="24">&nbsp;</td>
   
    <td width="703">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
     <tr>
     <form action="refund_next.php" method="post">
    <td class="tdside"><strong>Reparaturauftragsnummer</strong></td>
    <td>
      <div class="details">
        <?php echo "<strong style='font-weight:bold; font-size:20px'>". $rowz['user_unique_id']."</strong>"; ?>
        <input type="hidden" name="user_id" value="<?php echo $rowz['user_unique_id']; ?>" />
         <input type="hidden" name="manager" value="<?php echo $rowz['manager_name']; ?>" />
        </div>
    </td>
  </tr>
  <tr>
    <td class="tdside"><strong>Datum</strong></td>
    <td>
    <div class="details">
    <?php echo $date; ?>
    </div>
    </td>
  </tr>
  <tr>
    <td class="tdside"><strong>Annahme</strong></td>
    <td>
      <div class="details">
       <input type="text"
 name="manager" value="<?php echo $rowz['manager_name']; ?>" />        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Vorname</strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_name']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Nachname </strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['user_last_name']; ?>
        
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Address</strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_address']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>PLZ / Stadt</strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_zip_code']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>User Mobile Number</strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['user_phone_number']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>User Email Address </strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['user_email']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Mobile IME Number </strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_mobile_ime']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Gebrauchsspuren</strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['user_mobile_other_problem']; ?>
        </div>
      
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Zubehor</strong>
      
    </td>
    <td>
      <div class="details">
        <?php echo $rowz['acco']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Bei CLS gekauft </strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['cls_product']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Kaufdatum</strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['user_mobile_buying_date']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Fehlerbeschreibung laut Kunde </strong></td>
    <td>
      <div class="details">
        <textarea name="problem">
        <?php echo $rowz['user_mobile_problem']; ?>
        </textarea>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Betriebssystem</strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_mobile_os']; ?>
        </div>
    </td>
    </tr>
 
  <tr>
    <td class="tdside"><strong>Garantie Hardware</strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_mobile_warrenty']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Wichtige Daten </strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_important_data']; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Abholung platz From</strong></td>
    <td>
      <div class="details">
    
       <?php echo $rowz['user_mobile_taking_from']; ?>
        </div>
    </td>
    </tr>
 
  <tr>
    <td class="tdside"><strong>Express Service</strong></td>
    <td>
      <div class="details">
       <?php echo $rowz['express_service']; ?>
        </div>
    </td>
  </tr>
  
  <tr>
    <td class="tdside"><strong>Rechnungsnummer</strong></td>
    <td>
      <div class="details">
        <?php echo $rowz['user_bill_number']; ?>
        </div>
    </td>
    </tr>
    <tr>
    <td></td>
    <td>
   <input type="submit" value="continue" class="btn btn-success" />
    </td>
  </tr>
  
</table>
</div>
</body>
</html>

<?php } ?>
          