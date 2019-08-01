<?php
error_reporting(0);

if(isset($_POST['submit'])){
	$date=date("Y-m-d");
	$user_unique_id=$_POST['user_unique_id'];
	$user_name=$_POST['user_name'];
	$place=$_POST['place'];
	$user_last_name=$_POST['user_last_name'];
	$user_phone_number=$_POST['user_phone_number'];
	$user_email=$_POST['user_email'];
	$user_zip_code=$_POST['user_zip_code'];
	//$user_complain_date=$_POST['user_complain_date'];
	$user_address=$_POST['user_address'];
	$user_mobile_ime=$_POST['user_mobile_ime'];
	$user_mobile_buying_date=$_POST['user_mobile_buying_date'];
	$user_mobile_warrenty=$_POST['user_mobile_warrenty'];
	$user_mobile_problem=$_POST['user_mobile_problem'];
	$user_mobile_password=$_POST['user_mobile_password'];
	$user_mobile_os=$_POST['user_mobile_os'];
	$user_bill_number=$_POST['user_bill_number'];
	$user_important_data=$_POST['user_important_data'];
	$cls_product=$_POST['cls_product'];
	$express_service=$_POST['express_service'];
	$manager_name=$_POST['manager_name'];
	$acco=$_POST['acco'];
	$user_mobile_amount=$_POST['cost'];
	$user_mobile_taking_from=$_POST['user_mobile_taking_from'];
	$user_mobile_other_problem=$_POST['user_mobile_other_problem'];
	
	  switch($user_mobile_taking_from){
    case 'AS-':
        $user_mobile_taking_from="Auf dem Sand";
        break;
    case 'L14-':
       $user_mobile_taking_from="Filiale mane branch";
        break;
		
		
		
    
}
if(strlen($express_service)==0){
			$express_service="No";
		}
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
      <td width="271" rowspan="29" valign="top"><table width="216" height="584" border="0" align="right">
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
    <td class="tdside"><strong>Reparaturauftragsnummer</strong></td>
    <td>
      <div class="details">
        <?php echo "<strong style='font-weight:bold; font-size:20px; color:red'>". $user_unique_id."</strong>"; ?>
        </div>
    </td>
  </tr>
   <tr>
    <td class="tdside"><strong>Express Service</strong></td>
    <td>
      <div class="details">
       <?php echo $express_service; ?>
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
        <?php echo $manager_name; ?>
        </div>
    </td>
    </tr>
 
  <tr>
    <td class="tdside"><strong>Vorname</strong></td>
    <td>
      <div class="details">
        <?php echo $user_name; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Nachname </strong></td>
    <td>
      <div class="details">
       <?php echo $user_last_name; ?>
        
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Address</strong></td>
    <td>
      <div class="details">
        <?php echo $user_address; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>PLZ / Stadt</strong></td>
    <td>
      <div class="details">
        <?php echo $user_zip_code; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>User Mobile Number</strong></td>
    <td>
      <div class="details">
       <?php echo $user_phone_number; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>User Email Address </strong></td>
    <td>
      <div class="details">
       <?php echo $user_email; ?>
        </div>
    </td>
    </tr>
      <tr>
    <td class="tdside"><strong>Model</strong></td>
    <td>
      <div class="details">
        <?php echo $user_bill_number; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Mobile IME Number </strong></td>
    <td>
      <div class="details">
        <?php echo $user_mobile_ime; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Gebrauchsspuren</strong></td>
    <td>
      <div class="details">
       <?php echo $user_mobile_other_problem; ?>
        </div>
      
    </td>
    </tr>
    <?php 
   if(strlen($acco)>0)
   echo '<tr>
			 <td class="tdside"><strong>Zubehor</strong></td>
    <td>
      <div class="details">
          '.$acco.'
        </div>
    </td>
    </tr>
   ';
  
  ?>
  <tr>
    <td class="tdside"><strong>Bei CLS gekauft </strong></td>
    <td>
      <div class="details">
       <?php echo $cls_product; ?>
        </div>
    </td>
    </tr>
  <?php
    if(strlen($user_mobile_buying_date)>0)
   echo '<tr>
			 <td class="tdside"><strong>Kaufdatum</strong></td>
    <td>
      <div class="details">
          '.$user_mobile_buying_date.'
        </div>
    </td>
    </tr>
   ';
  
  ?>
 
    <td class="tdside"><strong>Fehlerbeschreibung laut Kunde </strong></td>
    <td>
      <div class="details">
        <?php echo $user_mobile_problem; ?>
        </div>
    </td>
    </tr>
  <tr>
    <td class="tdside"><strong>Betriebssystem</strong></td>
    <td>
      <div class="details">
        <?php echo $user_mobile_os; ?>
        </div>
    </td>
    </tr>
  <?php 
   if(strlen($user_mobile_password)>0)
   echo '<tr>
			 <td class="tdside"><strong>Passwort</strong></td>
    <td>
      <div class="details">
          '.$user_mobile_password.'
        </div>
    </td>
    </tr>
   ';
  
  ?>
  <tr>
    <td class="tdside"><strong>Garantie Hardware</strong></td>
    <td>
      <div class="details">
        <?php echo $user_mobile_warrenty; ?>
        </div>
    </td>
    </tr>
     <?php 
   if(strlen($user_important_data)>0)
   echo '<tr>
			 <td class="tdside"><strong>Wichtige Daten</strong></td>
    <td>
      <div class="details">
          '.$user_important_data.'
        </div>
    </td>
    </tr>
   ';
  
  ?>
 
  <tr>
    <td class="tdside"><strong>Abholung platz From</strong></td>
    <td>
      <div class="details">
    
       <?php echo $place; ?>
        </div>
    </td>
    </tr>
 
 
  
<tr>
    <td class="tdside"><strong>Test Kostet</strong></td>
    <td>
      <div class="details">
       <?php echo $user_mobile_amount; ?>
        </div>
    </td>
  </tr>
  
    <tr>
      <td height="133" colspan="2" style="font-size:12px; text-align:justify">Wir bieten auf alle Reparaturen,die won uns durchgefuhrt wurden, 3 Monate Garantie.
CLS Comupter ubernimmt keine Haftung fur verloren gegangene Daten im Reparaturfall.
Reparierte Gerate mussen innerhalb von 4 Wochen abgeholt werden,sonst serden diese kostenpflichtig entsorgt.

Mir der Unterscrift bestatige ich, dass die oben angegebenen Daten korrekt sind und die informationen und AGBs zur kenntnis.genommen wurden      </td>
    </tr>
    <tr>
      <td height="80">&nbsp;</td>
      <td valign="bottom">Unterschrift Kunde....................................................</td>
    </tr>
    <tr>
    <td><a href="javascript:history.go(-1)">Edit Information</a></td>
    <td>
    <a href="#" class="btn btn-success" id="print">Print Copy</a>
    <a href="#" class="btn btn-warning" id="close">close</a>
    </td>
  </tr>
  
</table>
</div>
</body>
</html>


           <script>
		$(document).ready(function() {
   $('#print').click(function() {
       window.print() ;
	   $.post('use_update.php',{user_unique_id:"<?php echo $user_unique_id; ?>", user_name:"<?php echo $user_name; ?>", user_last_name:"<?php echo $user_last_name; ?>", user_phone_number:"<?php echo $user_phone_number; ?>", user_email:"<?php echo $user_email; ?>", user_zip_code:"<?php echo $user_zip_code; ?>", user_complain_date:"<?php echo $date; ?>", user_address:"<?php echo $user_address; ?>", user_mobile_ime:"<?php echo $user_mobile_ime; ?>", user_mobile_buying_date:"<?php echo $user_mobile_buying_date; ?>", user_mobile_warrenty:"<?php echo $user_mobile_warrenty; ?>", user_mobile_problem:"<?php echo $user_mobile_problem; ?>", user_mobile_password:"<?php echo $user_mobile_password; ?>", user_mobile_os:"<?php echo $user_mobile_os; ?>", user_bill_number:"<?php echo $user_bill_number; ?>", user_important_data:"<?php echo $user_important_data; ?>", cls_product:"<?php echo $cls_product; ?>", express_service:"<?php echo $express_service; ?>", manager_name:"<?php echo $manager_name; ?>", acco:"<?php echo $acco; ?>", user_mobile_taking_from:"<?php echo $user_mobile_taking_from; ?>", user_mobile_other_problem:"<?php echo $user_mobile_other_problem; ?>", place:"<?php echo $place; ?>", user_mobile_amount:"<?php echo $user_mobile_amount; ?>"},function(check){
			$("#print").attr("value","Data Saved..");
			console.log(check);
		 });
		
   });
});
		   </script>
           <script>
		    $('#close').click(function() {
       window.location.href = "http://localhost/erp/admin.php";
   }
	  );
		   </script>