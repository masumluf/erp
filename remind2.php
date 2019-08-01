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
<link rel="stylesheet" href="assets/css/bootstrap.css">
<style>
#result{
	padding:10px;
	color:#fff;
}
</style>

<script type="text/javascript" src="assets/js/jquery.js"></script>
<table width="400" border="1" align="center">
  <tr>
    <td class="btn btn-primary">Customer Reminder</td>
  </tr>
  <tr>
    <td height="32">
    <div id="result"></div>
    </td>
  </tr>
  <tr>
    <td height="37" align="center"><input type="text" id="remind" style="width:250px;" /></td>
  </tr>
  <tr>
    <td height="37" align="center">
    
    <a href="#" id="click" class="btn btn-primary">Remind</a>
    </td>
  </tr>
</table>
<script>
$("#click").on("click", function() {
	var customer_id=$('#remind').val();
	
	if( customer_id.length>0){
		       $('#result').hide();			   
			    $('#result').css('background-color','#C8C8C8 ').html("Sending Ticket..").show("slow");
				
			}
			else{
			  $("#result").css('background-color','red').text("Missing Field").show();
			  return false;
			}
		
$.post('send_remind.php',{customer_id:customer_id},function(response){
	//console.log(response);
	
	if(response==0){
			 $("#result").css('background-color','red').text("User Not Found").show();
			
		 }
		  
		   if(response==2){
			 $("#result").css('background-color','red').text("mail not sent").show();
			
		 }
		 
		 if(response==1){
			 $("#result").css('background-color','#0C3').text("Ticket Has Been Sent").show();
			
		 }
		 
});
	//console.log(customer_id);
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