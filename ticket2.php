<?php
//require_once('auth.php');
?>
<html>
<head>
    <title>
       Cls-Computer.De
    </title>
    <link href="fonts.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
   

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
      <h4>Welcome To Cls-Computer.de ERP System</h4>
      </div>
      
      <div class="quick_menu">
         <i class="icon-tags"></i> Quick Task
         
         <div class="tab">
        
         <link rel="stylesheet" href="assets/css/bootstrap.css">
<style>
#result{

}
</style>

<script type="text/javascript" src="assets/js/jquery.js"></script>

<table width="200" border="1" class="table" style="margin-top:20px;">
  <tr>
    <td colspan="2">
    <div class="btn-primary" style="padding:10px;">CLS-Computer Online Ticket</div>
    </td>
  </tr>
  <tr>
    <td width="49%">Customer ID</td>
    <td width="51%"> <input type="text" id="user_id" name="user_id" required> </td>
  </tr>
  <tr>
    <td>Problem</td>
    <td>
    <textarea id="user_problem" required>
    </textarea>
    </td>
  </tr>
  <tr>
    <td>Technician Name</td>
    <td>
     <select name="cnt_number" id="cnt_number">
    <?php
require_once('bd/db.php');
error_reporting(0);


$results=mysql_query("SELECT username FROM `auth` where role='0'");
while($rowz = mysql_fetch_array($results))
		{
?>
   
      <option><?php echo $rowz['username']; ?></option>
    
    <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input type="text" id="amount" required /></td>
  </tr>
  
  <tr>
    <td>Duration</td>
    <td><input type="text" id="duration" required /></td>
  </tr>
  <tr>
    <td>Sent Email ?</td>
    <td>
    <input type="radio" id="email_noti"  value="yes" name="email_noti" />Yes
    <input type="radio" id="email_noti"  value="no" name="email_noti" />No
    </td>
  </tr>
  <tr>
    <td>
      <div id="result">
    </div>
    </td>
    <td> <a href="#" id="click" class="btn btn-primary">Send Ticket...</a>
    
  
     </td>
  </tr>
</table>
<script>

$("#click").on("click", function() {
	var customer_id=$('#user_id').val();
	var phone=$('#cnt_number').val();
	var amount=$('#amount').val();
	var duration=$('#duration').val();
	var problem=$('#user_problem').val();
	var vat=$('input[name=vat]:checked').val();
	var email_noti=$('input[name=email_noti]:checked').val();
	console.log(email_noti);
	
	if( customer_id.length>0 && phone.length>0 && amount.length>0 && duration.length>0 && problem.length>0 ){
		       $('#result').hide();			   
			    $('#result').css('background-color','#0C3').html("Sending Ticket..").show("slow");
				
			}
			else{
			  $("#result").css('background-color','red').text("Missing Field").show();
			  return false;
			}
		
$.post('send_ticket.php',{customer_id:customer_id,phone:phone,amount:amount,duration:duration,problem:problem,email_noti:email_noti,vat:vat},function(response){
		 console.log(response);
		 if(response==0){
			 $("#result").text("Ticket already has been sent by other").show();
		 }
		  
		   if(response==2){
			 $("#result").css('background-color','red').text("mail not sent").show();
			
		 }
		 
		 if(response==1){
			 $("#result").css('background-color','#0C3').text("Ticket Has Been Sent").show();
			
		 }
		 
});
	
});
</script>
              
            <div>
            <br>
            </div>
              
           
                
               
          
         </div>
         <br>
  
      </div>
      
      </div>
      
      <!--right side -->
      <div class="right_side line_clr">
       <div style="padding:10px;">
       Customer Searching Area..
       <hr>
       <div class="input-prepend" style="margin-left:30px;">
   <form method="post" action="search.php">
  <span class="add-on"> <i class="icon-search"></i> </span>
  
  <input class="span3" name="search" id="prependedInput" type="text" placeholder="Search" style="height:30px;">
  </form>
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