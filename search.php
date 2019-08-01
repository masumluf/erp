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
      <div class="middle_side line_clr" style="width:800px;">
      <div style="margin-left:20px;">
      <h4>Welcome To Cls-Computer.de ERP System</h4>
      </div>
      
      <div class="quick_menu">
         <i class="icon-tags"></i>Search Result
         
         <div class="tab">
        
         <?php 
		 $id=$_POST['search'];
		 
		 require_once('bd/db.php');
		 
		 	$i=0;

$query = "SELECT * FROM user	WHERE user_email='$id' || user_name='$id'|| user_unique_id='$id'|| user_phone_number='$id'|| user_zip_code='$id'";
	 
$result = mysql_query($query) or die(mysql_error());


// Print out the contents of each row into a table 
while($row = mysql_fetch_array($result)){
	
	$key=$row['user_name'].">".$row['user_email'].">".$row['user_unique_id'];
	$key_id=$row['user_id'];
	$i++;


		 ?>    
           
         
       <ul style="list-style:none;">  
   
       
       <li> <a href="user.php?id=<?php echo $key_id; ?>"><?php echo $key; ?></a> </li>
       
       
       </ul>  
         
         <?php } ?>
           <ul style="list-style:none;">  
       <?php
	     if($i==0)
		 echo "<li>Sorry Nothing Found</li>";
		 exit;
	   ?>

       </ul>  
          
         </div>
         <br>
         
         
      </div>
      
      </div>
      
<!--right side --></div>
</body>
</html>