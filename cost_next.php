<link rel="stylesheet" href="assets/css/bootstrap.css">
<style>
*{
	font-size:18px;
	font-weight:bold;
}
</style>
<?php
$id=$_POST['id'];
require_once('bd/db.php');
$i=0;
$results=mysql_query("SELECT * FROM `user` where user_unique_id='$id' ");
while($rowz = mysql_fetch_array($results))
		{  
		    $i++;
		 $username=$rowz['user_name'];
		 $userid=$rowz['user_unique_id'];
		 $userphonenumber=$rowz['user_phone_number'];
		 $usermobileime=$rowz['user_mobile_ime'];
		 $userwarrenty=$rowz['user_mobile_warrenty'];
		 $userpassword=$rowz['user_mobile_password'];
		 $userprb=$rowz['user_mobile_problem'];
		 $usermobilemodel=$rowz['user_bill_number'];
		 }

?>



 
 <nav class="nav nav-header" style="background-color:#000; color:#fff;">
 Cost Of Amount
 </nav>
<table width="800" border="1" align="center" height="700">
  <tr>
    <td width="231">User Name</td>
    <td width="553"><?php echo $username ?></td>
  </tr>
  <tr>
    <td>User Unique ID</td>
    <td><?php echo $id ?></td>
  </tr>
  <tr>
    <td>User Phone Number</td>
    <td><?php echo $userphonenumber ?></td>
  </tr>
  <tr>
    <td>User Mobile Warrenty</td>
    <td><?php echo $userwarrenty ?></td>
  </tr>
  <tr>
    <td>Device Password</td>
    <td><?php echo $userpassword ?></td>
  </tr>
  <tr>
    <td>Model Name</td>
    <td><?php echo $usermobilemodel ?></td>
  </tr>
  <tr>
    <td>Problem listed by User</td>
    <td><?php echo $userprb ?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FF9966" style="padding:5px;">
    Technical Person Area..
    </td>
  </tr>
  <tr>
    <td>Problem Found</td>
    <td>
    <textarea style="width:300px;">
    </textarea>
    </td>
  </tr>
  <tr>
    <td>Amount of Cost</td>
    <td>
    <input type="text" style="width:300px; height:40px;">
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <a href="#" id="print" class="btn btn-primary" >Print</a>
    <a href="#" class="btn btn-warning" id="close" >Close</a>
    </td>
  </tr>
</table>
 
 <script type="text/javascript" src="assets/js/jquery.js"></script>
 <script>
 
 $(document).ready(function() {
   $('#print').click(function() {
       window.print() ;
   }
	  )
	  $('#close').click(function() {
       window.location.href = "http://localhost/erp/admin.php";
   }
	  )
 }
 );
 </script>