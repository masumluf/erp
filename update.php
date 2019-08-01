<?php
//require_once('auth.php');
error_reporting(0);
require_once('bd/db.php');
//$i=0;
$id=$_GET['id'];
//echo $id;
$results=mysql_query("SELECT * FROM `user` where user_id='$id' ");
while($rowz = mysql_fetch_array($results))
		{  
?>
<html>
<head>
    <title>
       Cls-Computer.De
    </title>
    <link href="fonts.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <style>
	#show_hide{ display:none}
	#show_hide2{ display:none}
	</style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <script>
  $(function() {
	  
    $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
  });
  </script>


</head>
<body class="nn">
<div class="container" style="margin-top:30px">
  <div class=" log_heading line_clr" style="color:#fff">
   <h3>Cls-Computer.de ERP System</h3>
  </div>
  <!--left side -->
      <div  class="left_side line_clr">
      <?php
	    require_once('lef_side_bar.php');
	  ?>
      </div>
      
      <!--middle side -->
      <div class="middle_side line_clr">
      <div style="margin-left:20px;">
      <h4>User Product Receiving Area</h4>
      </div>
      
      <div class="quick_menu">
        
         <br>
         <blockquote>
  <p> All Fields are Required.</p>
  <small>From <cite title="Source Title">Authority</cite></small>
</blockquote>

        <!-- Product Registration Fields-->
        <form method="POST" action="update_next.php">
         <div class="user_adding">
         <p style="color:#F30; font-size:18px; margin-left:20px;"> Todya's Date : <?php echo date("d/m/y"); ?>
          <input type="hidden" name="user_id" value="<?php echo $rowz['user_id']; ?>" >  </p>
      
           <hr>
           
            <div class="ptag">
           <strong>Express Service <span class="required_field">*</span> </strong>
           <div id="result"></div>
           <input type="checkbox" name="express_service" class="ptaginput" value="yes">&nbsp;Ja      
         </div>
         <hr>
           
         
         
         
           <div class="ptag">
           <strong> Abholung platz From  <span class="required_field">*</span> </strong>
           <div id="result"></div>
           <input type="radio" required name="place" id="place2" class="ptaginput" value="Auf dem Sand"  />&nbsp;Auf dem sand
           <input type="radio" required name="place" id="place2" class="ptaginput" value="Flagship"  />&nbsp;Flagship
         </div>
         <hr>
         
      
         
        
          <div class="ptag">
           <strong>Annahme <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="manager_name" class="ptaginput" value="<?php echo $rowz['manager_name']; ?>" >
         </div>
         <hr>
           
         
         <div class="ptag">
         <strong style="color:#1E65B5; font-size:24px;"> Kundendaten <span class="required_field"></span></strong>
         </div>
         <hr>
         
         
         <div class="ptag">
           <strong>Vorname <span class="required_field">*</span></strong>
           <div></div>
           <input type="text" required name="user_name" class="ptaginput" value="<?php echo $rowz['user_name']; ?>">
         </div>
         <hr>
         
          
         <div class="ptag">
           <strong>Nachname <span class="required_field">*</span></strong>
           <div></div>
           <input type="text" required name="user_last_name" class="ptaginput" value="<?php echo $rowz['user_last_name']; ?>">
         </div>
         <hr>
         
          
         <div class="ptag">
           <strong>Address <span class="required_field">*</span></strong>
           <div></div>
           <textarea class="ptaginput" name="user_address" style="height:100px">
           <?php echo $rowz['user_address']; ?>
           </textarea>
         </div>
         <hr>
         
          
         <div class="ptag">
           <strong>PLZ / Stadt <span class="required_field">*</span></strong>
           <div></div>
           <input type="text" required name="user_zip_code" class="ptaginput" value="<?php echo $rowz['user_zip_code']; ?>">
         </div>
         <hr>
         
          <div class="ptag">
           <strong>User Mobile Number <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="user_phone_number" class="ptaginput" value="<?php echo $rowz['user_phone_number']; ?>">
         </div>
         <hr>
         
          <div class="ptag">
           <strong>User Email Address <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="user_email" class="ptaginput" value="<?php echo $rowz['user_email']; ?>">
         </div>
         <hr>
         
         <div class="ptag">
         <strong style="color:#1E65B5; font-size:24px;"> Gerate-Info <span class="required_field"></span></strong>
         </div>
         <hr>
         
          <div class="ptag">
           <strong>Model <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="user_bill_number" class="ptaginput" value="<?php echo $rowz['user_bill_number']; ?>">
         </div>
         <hr>
         
         
          <div class="ptag">
           <strong>Mobile IME Number <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="user_mobile_ime" class="ptaginput" value="<?php echo $rowz['user_mobile_ime']; ?>">
         </div>
         <hr>
         
          
         <div class="ptag">
           <strong>Gebrauchsspuren <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="user_mobile_other_problem" class="ptaginput" value="<?php echo $rowz['user_mobile_other_problem']; ?>">
         </div>
         <hr>
         
               <div class="ptag">
           <strong>Zubehor <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text"  name="acco" class="ptaginput" value="<?php echo $rowz['acco']; ?>">
         </div>
         <hr>
         
          <div class="ptag">
           <strong>Bei CLS gekauft <span class="required_field">*</span> </strong>
           <div></div>
           <input type="radio" required name="cls_product" class="ptaginput" id="show" value="yes">&nbsp;Ja
           <input type="radio" required name="cls_product" class="ptaginput" id="no" value="no">&nbsp; nein
          
         </div>
         <hr>
         
           <script>
		$(document).ready(function() {
   $('input[name=cls_product]').click(function() {
       if($(this).attr('id') == 'show') {
            $('#show_hide').show();           
       }

       else {
            $('#show_hide').hide();   
       }
   });
});
		   </script>
         
         
           <div class="ptag" id="show_hide">
           <strong>Kaufdatum <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" name="user_mobile_buying_date" class="ptaginput" id="datepicker">
         </div>
         <hr>
         
          <div class="ptag">
           <strong>Betriebssystem <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" required name="user_mobile_os" class="ptaginput" value="<?php echo $rowz['user_mobile_os']; ?>">
         </div>
         <hr>
         
          <div class="ptag">
           <strong>Passwort <span class="required_field">*</span> </strong>
           <div></div>
           <input type="text" name="user_mobile_password" class="ptaginput" value="<?php echo $rowz['user_mobile_password']; ?>">
         </div>
         <hr>
         
          <div class="ptag">
           <strong>Garantie Hardware<span class="required_field">*</span> </strong>
           <div></div>
           <input type="radio" required name="user_mobile_warrenty" class="ptaginput" value="yes">&nbsp;Ja
           <input type="radio" required name="user_mobile_warrenty" class="ptaginput" value="no">&nbsp; nein
         </div>
         <hr>
         
        <div class="ptag">
           <strong>Wichtige Daten ? <span class="required_field"></span> </strong>
           <div></div>
           <input type="radio" required name="important" class="ptaginput" id="show" value="yes">&nbsp;Ja
           <input type="radio" required name="important" class="ptaginput" id="no" value="no">&nbsp; nein
          
         </div>
         <hr>
         
           <script>
		$(document).ready(function() {
   $('input[name=important]').click(function() {
       if($(this).attr('id') == 'show') {
            $('#show_hide2').show();           
       }

       else {
            $('#show_hide2').hide();   
       }
   });
});
		   </script>
         
         
           <div class="ptag" id="show_hide2">
           <strong>Wichtige Daten <span class="required_field">*</span> </strong>
           <div></div>
           <textarea name="user_important_data" class="ptaginput"></textarea>
         </div>
         <hr>
         
          <div class="ptag">
           <strong>Fehlerbeschreibung laut Kunde <span class="required_field">*</span> </strong>
           <div></div>
          <textarea class="ptaginput" name="user_mobile_problem" style="height:100px">
          <?php echo $rowz['user_mobile_problem']; ?>
          </textarea>
         </div>
         <hr>
 
             
          <div class="ptag">
           
           <div></div>
           <input type="submit" name="submit" value="Update"  class="btn btn-success"/>
         </div>
         <hr>
        
         </div>
         
         
         
      </div>
      
      </div>
       </form>
      <!--right side -->
      <div class="right_side line_clr">
       <div style="padding:10px;">
       Customer Searching Area..
       <hr>
       <div class="input-prepend" style="margin-left:30px;">
  <span class="add-on"> <i class="icon-search"></i> </span>
  <input class="span3" id="prependedInput" type="text" placeholder="Search" style="height:30px;">
</div>
<br>
<br>
 <blockquote>
  <p> Searching Customer Profile,Use Customer Unique ID or IME number or Customer Name.</p>
  <small>From <cite title="Source Title">Authority</cite></small>
</blockquote>
        </div>
      </div>
</div>
</body>
</html>
<?php } ?>