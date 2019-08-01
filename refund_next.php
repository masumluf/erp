<?php
//error_reporting(0);
require_once('bd/db.php');

	$date=date("Y-m-d");
	$id=$_POST['user_id'];
	$manager=$_POST['manager'];
	$prb=$_POST['problem'];
	
	
	mysql_query("INSERT INTO `refund` ( `user_id`, `problem`, `refund_date`, `manager`) VALUES ('$id', '$prb', '$date', '$manager')")or die('Something is wrong we are trying to fix it soon'.mysql_error());
?>
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
         <i class="icon-tags"></i> Quick Task
         
         <div class="tab">
        
           <div class="btn-success" style="padding:10px; color:#fff">
            Sucessfull Updated data
           </div>
               
                
               
          
         </div>
         <br>
         <blockquote>
  <p> Technical Person Can't access Some Area.</p>
  <small>From <cite title="Source Title">Authority</cite></small>
</blockquote>
         
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