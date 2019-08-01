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
  <div class="middle_side line_clr" style="width:860px">
      <div style="margin-left:20px;">
      <h4>Welcome To Cls-Computer.de ERP System</h4>
      </div>
      
      <div class="quick_menu">
         <i class="icon-shopping-cart"></i> Delivery Process
         
         <div class="tab">
         <table width="650" height="185" border="1" class="table">
          <form method="post" action="finished.php">
  <tr>
    <td colspan="3" bgcolor="#003333">
   <b style="color:#fff">User ID</b> <input type="text" name="id" required>
    </td>
    <td>Amount</td>
  </tr>
  <tr>
 
    <td width="140">Problem Name:</td>
    <td colspan="2">
    <textarea name="prb" style="width:400px; height:50px;" required>
    </textarea>
    </td>
    <td width="245">
    <input type="text" name="amount" required  style="height:50px;">
    </td>
  </tr>
  <tr>
    <td>Device 1</td>
    <td width="173"><input type="text" name="device1"  style="height:50px;"></td>
    <td width="92"><input type="text" name="qun1" style="height:50px;"></td>
    <td><input type="text" name="amount1" style="height:50px;"></td>
  </tr>
   <tr>
    <td>Device 2</td>
    <td width="173"><input type="text" name="device2"  style="height:50px;"></td>
    <td width="92"><input type="text" name="qun2" style="height:50px;"></td>
    <td><input type="text" name="amount2" style="height:50px;"></td>
  </tr>
  <tr>
    <td>Device 3</td>
    <td width="173"><input type="text" name="device3"  style="height:50px;"></td>
    <td width="92"><input type="text" name="qun3" style="height:50px;"></td>
    <td><input type="text" name="amount3" style="height:50px;"></td>
  </tr>
   <tr>
     <td>Device 4</td>
     <td width="173"><input type="text" name="device4"  style="height:50px;"></td>
     <td width="92"><input type="text" name="qun4" style="height:50px;"></td>
     <td><input type="text" name="amount4" style="height:50px;"></td>
   </tr>
   <tr>
     <td colspan="3">
     <div style="float:right">Bill Number</div>
     </td>
     <td>
     <input type="text" name="bill" style="height:50px;" required>
     </td>
   <tr>
    <td colspan="3">&nbsp;</td>
    <td><input type="submit" value="Continue" class="btn btn-primary"></td>
    </form>
  </tr>
</table>

         </div>
         <br>
  
         
      </div>
      
      </div>
      
<!--right side --></div>
</body>
</html>

