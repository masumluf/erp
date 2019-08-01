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
    <style>
	em{
    background-color: yellow
}

	.headcolor{
		background-color:#ffffff;
 filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffffff, endColorstr=#c2c2c2);
 background-image:-moz-linear-gradient(top, #ffffff 0%, #c2c2c2 100%);
 background-image:-webkit-linear-gradient(top, #ffffff 0%, #c2c2c2 100%);
 background-image:-ms-linear-gradient(top, #ffffff 0%, #c2c2c2 100%);
 background-image:linear-gradient(top, #ffffff 0%, #c2c2c2 100%);
 background-image:-o-linear-gradient(top, #ffffff 0%, #c2c2c2 100%);
 background-image:-webkit-gradient(linear, right top, right bottom, color-stop(0%,#ffffff), color-stop(100%,#c2c2c2));

}
div.pagination {
	padding: 3px;
	margin: 3px;
}

div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
	
	text-decoration: none; /* no underline */
	color: #000099;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;

	color: #000;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
		
		font-weight: bold;
		background-color: #000099;
		color: #FFF;
	}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #EEE;
	
		color: #DDD;
	}
	
table { border-collapse: collapse; }
    th, td { padding: 5px; }
    th { border-bottom: 2px solid #999; background-color: #eee; vertical-align: bottom; }
    td { border-bottom: 1px solid #ccc; }

    /* filter-table specific styling */
    td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }

    /* special filter field styling for this example */
    .input-filter-container { position: fixed; top: 1em; right: 1em; border: 2px solid #66f; background-color: #eef; padding: 0.5em; }
</style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
      <h4>Service Accepted Customer List</h4>
      </div>
      
      <div class="quick_menu">
         <i class="icon-list"></i> List Of All Customer
         <div style="padding:10px;"><input type="text" id="search" placeholder="Search by Unique ID or Name" style="width:420px; height:30px; border:1px solid #414141"></div>
         <div class="tab">
         
         <table width="600" border="1" class="table">
         <tbody id="fbody">
  <tr class="headcolor">
    <td>&nbsp;</td>
    <td>Customer ID</td>
    <td>Customer Name</td>
    <td>Customer Email</td>
    <td>Action</td>
  </tr>
  <tr id="checktable">
  <?php
error_reporting(0);
	/*
		Place code to connect to your DB here.
	*/

	include('bd/db.php');	// include your code to connect to DB.

	$tbl_name="";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM user ";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	
	/* Setup vars for query. */
	$targetpage = "view.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];;
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM user WHERE user_accept='1' LIMIT $start, $limit ";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">< previous</a>";
		else
			$pagination.= "<span class=\"disabled\">< previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">next ></a>";
		else
			$pagination.= "<span class=\"disabled\">next ></span>";
		$pagination.= "</div>\n";		
	}
?>

	<?php
		while($row = mysql_fetch_array($result))
		{
	
		// Your while loop here
		
	
	?>


	
    <td><input type="checkbox" name="user_check[]" value="<?php echo $row['user_id']; ?>"></td>
    <td><?php echo $row['user_unique_id']; ?></td>
    <td><?php echo $row['user_name']; ?></td>
    <td><?php echo $row['user_email']; ?></td>
    <td><a href="user.php?id=<?php echo $row['user_id']; ?>">View User</a></td>
  </tr>
  
  <?php } ?>
  </tbody>
</table>
<?php echo $pagination; ?>
         
         </div>
         <br>

    <script language="javascript" type="text/javascript">
$("#search").keyup(function() {
	var rows = $("#fbody").find("tr").hide();
	var data = this.value.split(" ");
	$.each(data, function(i, v) {
		rows.filter(":contains('" + v + "')").show();
	});
});
</script>
         
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