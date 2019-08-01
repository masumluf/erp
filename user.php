<?php
//require_once('auth.php');
require_once('bd/db.php');
error_reporting(0);

$id=$_GET['id'];

$results=mysql_query("SELECT * FROM `user` where user_id='$id' ");
while($rowz = mysql_fetch_array($results))
		{
			$check=$rowz['user_unique_id'];


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
         <i class="icon-tags"></i> <?php echo $rowz['user_last_name']; ?>
         <a class="btn btn-danger" href="refund.php?id=<?php echo $rowz['user_id']; ?>">Refund</a>
         <a class="btn btn-warning" href="update.php?id=<?php echo $rowz['user_id']; ?>">Edit</a>
          <a class="btn btn-success" href="#" val="<?php echo $rowz['user_id']; ?>" id="taken">Taken</a>
        <div id="result"></div> 
         <div class="tab">
        
            <table width="483" border="1" class="table">
 
  <tr>
    <td width="112">Vorname:</td>
    <td width="355">
    <?php echo $rowz['user_name']; ?>
    </td>
  </tr>
  <tr>
    <td>Nachname:</td>
    <td><?php echo $rowz['user_last_name']; ?></td>
  </tr>
  <tr>
    <td>
    Address:
    </td>
    <td><?php echo $rowz['user_address']; ?></td>
  </tr>
  <tr>
    <td>
    PLZ / Stadt:
    </td>
    <td><?php echo $rowz['user_zip_code']; ?></td>
  </tr>
  <tr>
    <td>
    User Mobile Number:
    </td>
    <td><?php echo $rowz['user_phone_number']; ?></td>
  </tr>
  <tr>
    <td>
    User Email Address:
    </td>
    <td><?php echo $rowz['user_email']; ?></td>
  </tr>
  <tr>
    <td>
    Mobile IME Number:
    </td>
    <td><?php echo $rowz['user_mobile_ime']; ?></td>
  </tr>
  <tr>
    <td>
    Gebrauchsspuren:
    </td>
    <td><?php echo $rowz['user_mobile_other_problem']; ?></td>
  </tr>
  <tr>
    <td>
    Zubehor:
    </td>
    <td><?php echo $rowz['acco']; ?></td>
  </tr>
  <tr>
    <td>
    Bei CLS gekauft:
    </td>
    <td><?php echo $rowz['cls_product']; ?></td>
  </tr>
  <tr>
    <td>Kaufdatum:</td>
    <td><?php echo $rowz['user_mobile_buying_date']; ?></td>
  </tr>
  <tr>
    <td>
    Fehlerbeschreibung laut Kunde:
    </td>
    <td><?php echo $rowz['user_mobile_problem']; ?></td>
  </tr>
  <tr>
    <td>
    Betriebssystem:
    </td>
    <td><?php echo $rowz['user_mobile_os']; ?></td>
  </tr>
  <tr>
    <td>
    Passwort:
    </td>
    <td><?php echo $rowz['user_mobile_password']; ?></td>
  </tr>
  <tr>
    <td>
    Garantie Hardware:
    </td>
    <td><?php echo $rowz['user_mobile_warrenty']; ?></td>
  </tr>
  <tr>
    <td>
    Wichtige Daten:
    </td>
    <td><?php echo $rowz['user_important_data']; ?></td>
  </tr>
  <tr>
    <td>
    Abholung platz From:
    </td>
    <td><?php echo $rowz['user_mobile_taking_from']; ?></td>
  </tr>
  <tr>
    <td>
    Reparaturauftragsnummer:
    </td>
    <td><?php echo $rowz['user_unique_id']; ?></td>
  </tr>
  <tr>
    <td>Test Kostet </td>
    <td><?php echo $rowz['amounts']; ?></td>
  </tr>
  <tr>
    <td>Rechnungsnummer:</td>
    <td><?php echo $rowz['user_bill_number']; ?></td>
  </tr>

</table>
<hr>
<?php
		}
?>
<hr>
<strong>Refund List</strong>
<hr>
<table width="483" border="1" class="table">
  <tr bgcolor="#A6A6A6">
    <td width="27%">Refund Date</td>
    <td width="34%">Manager Name</td>
    <td width="39%">Problem</td>
  </tr>
  <?php 
$results=mysql_query("SELECT * FROM `refund` where user_id='$check' ");
$i=0;
while($rowz = mysql_fetch_array($results))
		{ 
		 $i++; 
?>
  <tr>
    <td><?php echo $rowz['refund_date']; ?></td>
    <td><?php echo $rowz['manager']; ?></td>
    <td><?php echo $rowz['problem']; ?></td>
     
	<?php
		if($i==0)
		echo "No Refund Record Found";
		?>
  </tr>
  <?php } ?>
</table>


<hr>

<strong>Billing List</strong>
<hr>
<table width="483" border="1" class="table">
  <tr bgcolor="#FFCC33">
    <td width="27%">Amount</td>
    <td width="34%">Duration</td>
    <td width="39%">Problem</td>
    <td width="39%">Technician</td>
  </tr>
  <?php 
$results=mysql_query("SELECT * FROM `cost` where user_id='$check' ");
$i=0;
while($rowz = mysql_fetch_array($results))
		{ 
		 $i++; 
?>
  <tr>
    <td><?php echo $rowz['amount']; ?></td>
    <td><?php echo $rowz['duration']; ?></td>
    <td><?php echo $rowz['problem']; ?></td>
    <td><?php echo $rowz['tec_name']; ?></td>
     
	<?php
		if($i==0)
		echo "No Refund Record Found";
		?>
  </tr>
  <?php } ?>
</table>

<hr>
<strong>Accept Bill</strong>
<hr>
<table width="483" border="1" class="table">
  <tr bgcolor="#00CC66">
    <td width="27%">Bill Number</td>
    <td width="34%">Amount</td>
    <td width="39%">Date</td>
  </tr>
  <?php 
$results=mysql_query("SELECT * FROM `accept_bill` where user_id='$check' ");
$i=0;
while($rowz = mysql_fetch_array($results))
		{ 
		 $i++; 
?>
  <tr>
    <td><?php echo $rowz['bill_number']; ?></td>
    <td><?php echo $rowz['amount']; ?></td>
    <td><?php echo $rowz['billingdate']; ?></td>
   
     
	<?php
		if($i==0)
		echo "No Record Found";
		?>
  </tr>
  <?php } ?>
</table>

              
            <div>
            <br>
            </div>
              
              
               
                
               
                
               
          
        </div>
      
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
<script>
$("#taken").on("click", function() {
	var id=$('#taken').attr('val');
	
		
$.post('taken.php',{customer_id:id},function(response){
	//console.log(response);

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