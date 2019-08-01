<html>
<head>
    <title>
       Cls-Computer.De
    </title>
    <link href="fonts.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
     <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
     <script type="text/javascript" src="assets/js/jquery.js"></script>
     <style>
	 #result{
		 width:50%;
		 padding:10px;
		 color:#fff;
		}
	 </style>


</head>
<body class="nn">

<div class="navbar-inner login_screen">
    <div class="container">
       <div class="login_container">
           <div class="login_side_div">
            <div class="log_heading"></div>
            <div class="login_pad">
            <br>
            <div class="login_screen_head">Administrator</div>
            <br/><div class="clearfix"></div>
               <div class="line_break">
               <p>  <div id="result"></div>  </p>
                   <strong>User Name:</strong>
                   <p>
                   
                     <input type="text" name="username2" id="user_name_login" placeholder="Username" class="login_input" required>
                   </p>
                   <strong>Password:</strong>
                   <p>
                 <input type="password" name="password" id="user_password_login" placeholder="Password" class="login_input" required></p>
                   <p><input type="checkbox" name="username"> Remember me. </p>
                   <p> <a href="#" id="login" class="btn btn-primary"> Login</a> </p>
               </div>
           </div>
           </div>
       </div>
    </div>
</div>

 <script type="text/javascript">
	   $('#login').on('click',function(){
		   var user_name_log=$('#user_name_login').val();
		   var user_password_log=$('#user_password_login').val();
		   		  
		   //console.log(user_country);
		    
		   if( user_name_log.length==0 && user_password_log.length==0 ){
			   alert("missing field");
			   return false;
			}
			
			 if( user_name_log.length>0 && user_password_log.length>0 ){
			   $('#result').css("background-color","#0C6").html("Wait We are going...").show("slow");
			}
			
			$.post("log_check.php", {user_name_log:user_name_log,user_pass_log:user_password_log},  function(response) {
				
				if(response=="ok"){
					window.location.href = "http://localhost/erp/admin.php";
				}else{
					$('#result').css("background-color","#C00").html(response).show("slow");
					
				}
           
             });
			
		});
		
		
	   </script>
</body>
</html>