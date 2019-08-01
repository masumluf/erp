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
         <i class="icon-tags"></i> User Adding Area.
         
         <div class="tab">
        
             <table width="441" align="center" border="1" class="table">
  <tr>
    <td colspan="2" class="btn btn-primary">
    <div >Add User</div>
    </td>
    </tr>
  <tr>
    <td width="147" height="44">UserName</td>
    <td width="278">
    <input type="text" name="username" id="username" required />
    
    </td>
  </tr>
  <tr>
    <td height="43">
    Password
    </td>
    <td>
    <input type="text" name="password" id="pass" required />
    </td>
  </tr>
  <tr>
    <td height="45">User Type</td>
    <td>
    <input type="radio" name="type" value="1" > Manager
    <input type="radio" name="type" value="0" > Technical Person
    </td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td>
    <div id="result"></div>
    </td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td>
    <a href="#" id="click" class="btn btn-success">Create User</a>
    </td>
  </tr>
</table>

<script>                
   $("#click").on("click", function() {
	var name=$('#username').val();
	var pass=$('#pass').val();
	var role=$('input[name=type]:checked').val();
	//console.log(email_noti);
	
	if( name.length>0 && pass.length>0  ){
		       $('#result').hide();			   
			    $('#result').css('background-color','#0C3').html("Creating User..").show("slow");
				
			}
			else{
			  $("#result").css('background-color','red').text("Missing Field").show();
			  return false;
			}
		
$.post('make_user.php',{name:name,pass:pass,role:role},function(response){
		 
		 if(response==1){
			 $("#result").css('background-color','#0C3').text("User Has Been Created").show();
			
		 }else{
			  $("#result").css('background-color','red').text("Something is wrong").show();
	  }
		 
});
	//console.log(customer_id);
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