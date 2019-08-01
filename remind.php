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