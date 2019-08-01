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
    <link href="assets/css/jquery.fs.boxer.css" rel="stylesheet">
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.fs.boxer.js"></script>
<script>
			$(document).ready(function() {
				$(".boxer").not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer();

				$(".boxer.boxer_fixed").boxer({
					fixed: true
				});

				$(".boxer.boxer_top").boxer({
					top: 50
				});

				$(".boxer.retina").boxer({
					retina: true
				});

				$(".boxer.boxer_format").boxer({
					formatter: function($target) {
						return '<h3>' + $target.attr("title") + "</h3>";
					}
				});

				$(".boxer.boxer_object").click(function(e) {
					e.preventDefault();
					e.stopPropagation();

					$.boxer( $('<div class="inline_content"><h2>More Content!</h2><p>This was created by jQuery and loaded into the new Boxer instance.</p></div>') );
				});

				$(".boxer.boxer_mobile").boxer({
					mobile: true
				});
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
      <h4>Welcome To Cls-Computer.de ERP System</h4>
      </div>
      
      <div class="quick_menu">
         <i class="icon-tags"></i> Manuual User Accept
         
         <div class="tab">
        
             <table width="400" border="1" align="center">
  <tr>
    <td class="btn btn-primary">Mannual Accept</td>
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
    <input type="radio" name="user_accept" id="accept" value="yes" /> Yes
    
      <input type="radio" id="accept" name="user_accept" value="no" /> no
    </td>
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
	var agree=$('input[name=user_accept]:checked').val();
	
	if( customer_id.length>0){
		       $('#result').hide();			   
			    $('#result').css('background-color','#C8C8C8 ').html("Updating ..").show("slow");
				
			}
			else{
			  $("#result").css('background-color','red').text("Missing Field").show();
			  return false;
			}
		
$.post('send_accept.php',{customer_id:customer_id,agree:agree},function(response){	 
		 if(response==1){
			 $("#result").css('background-color','#0C3').text("Information Has Been Updated").show();
		 }
	else{
			 $("#result").css('background-color','red').text("Failed").show();
			
		 }
		 
});
	
});
</script>
          
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