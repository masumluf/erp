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
        
              <a href="adduser.php" class="btn btn-warning"> <i class="icon-plus "></i> Add Product</a>
              <a href="view.php" class="btn btn-success"> <i class="icon-list "></i> View All</a>
              <a href="http://localhost/erp/ticket.php" class="btn btn-primary boxer" data-boxer-height="460" data-boxer-width="500"> <i class="icon-share-alt"></i> Ticket</a>
              <a href="http://localhost/erp/remind.php" class="btn btn-info boxer" data-boxer-height="150" data-boxer-width="500"> <i class="icon-time"></i> Remind</a>
              <br><br>
              <a href="useradd.php" class="btn"> <i class="icon-edit"></i> Setting</a>
               <a href="cost.php" class="btn btn-success"> <i class="icon-edit"></i> Cost Estimate</a>
              
            <div>
            <br>
            </div>
              
              
               
                <a href="accept.php" class="btn btn-warning"> <i class="icon-ok"></i>Mannual Accept</a>
                
                <a href="pending.php" class="btn btn-primary"> <i class="icon-question-sign"></i> Pending List</a>
                
                 <a href="yeslist.php" class="btn btn-success"> <i class="icon-thumbs-up"></i> User Accept List</a>
                 <br><br/>
                <a href="nolist.php" class="btn btn-danger"> <i class="icon-thumbs-down"></i> Ignore List</a>
                 <a href="delivery.php" class="btn btn-primary"> <i class="icon-shopping-cart"></i> Billing</a>
               
                
               
          
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