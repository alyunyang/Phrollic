<?php include "base.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">    
<head>    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
<title>Phrollic</title>  
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="bootstrap.css" rel="stylesheet">
	<link href="bootstrap.min.css" rel="stylesheet">
    <link href="default/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootswatch.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="variables.less" rel="stylesheet">
    <link href="bootswatch.less" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <style>
    .navbar.transparent .navbar-inner {
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    box-shadow: 30px 0px;
    background-color: rgba(0,0,0,0.3);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}
	.navbar{
		height:30px;
	}
	.jumbotron{
	color: white;
	margin-left: 30px;
	margin-top: 195px;
	font-weight:bold;
	}
	.plan-name-bronze {
 	 	padding: 20px;
  		color: #fff;
  		background-color: #FF6600;
  		-moz-border-radius: 5px 5px 0 0;
  		-webkit-border-radius: 5px 5px 0 0;
  		border-radius: 5px 5px 0 0;
	 }
	 .plan-name-gold {
  padding: 20px;
  color: #fff;
  background-color: #FF6600;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
  } 
	.footer{
		 opacity: 1;
  		 background-color: rgba(0,0,0,0.6);

	}
	.texts{
		margin-left: 490px;
		
	}
	
    </style>
</head>    
<body background="skyline.jpg">  
<section id="navbar">
  
  <div class="navbar">
<div class="navbar navbar-fixed-top">
<div class="navbar transparent">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#" style = "color:#FF6600; font-weight:bold;margin-left:2px;">Phrollic</a>
        <div class = "navbar pull-right">
         <img src="logo.svg" alt="logo" width="100" height="100" style = "margin-top: -10px;"> 
         </div>
        <div class="nav-collapse">
         
          <ul class="nav">
            
           
          </ul>
          
              </div>
              </ul>
           
         
          
         
        </div><!-- /.nav-collapse -->
      </div>
      </div>
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	?>
	<meta content="0;admin.php" http-equiv="refresh"> 
	<?php
	
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	
	$checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."'AND Password = '".$password."'"); 
	if(mysql_num_rows($checklogin) == 1)
	{
		$row = mysql_fetch_array($checklogin);
		$email = $row['EmailAddress'];
		
		$_SESSION['Name'] = $name;
		$_SESSION['Username'] = $username;
		$_SESSION['EmailAddress'] = $email;
		$_SESSION['LoggedIn'] = 1;
		
}  
    else  
    {  
    	?>
    		<script>
    			alert("Could not find username/password!");
    			history.back();
    		</script>
          <?php
    }  
} 
 
else  
{  
    ?>  
        </div> 
       <div class="row-fluid pricing-table pricing-three-column">
        <div class="span4 plan">
          <div class="plan-name-bronze">
            <h2>Login</h2>
          </div>
           <p><form  method="post" action="index.php" name="loginform" id="loginform" >
          <input type="text" class="input-small" name = "username" id = "username" placeholder="Username" style = "height:40px;">
          <input type="password" class="input-small" name = "password" id = "password" placeholder="Password"  style = "height:40px;">
          <br/>
          <button type="submit" class="btn btn-success">Go</button>
    </form></p>
    <br/> <br/> <br/> 

</div>
  
   <?php  
}  
?>    
	 

        <div class="span4">
        <div class = "jumbotron">
         <h3>Welcome to Phrollic .</h3>
        </div>
        </div>
<?php
//if both username and password are inputted  
if(!empty($_POST['username']) && !empty($_POST['password']))  
{  
	//grabs inputted values
    $name = mysql_real_escape_string($_POST['name']);
    $username = mysql_real_escape_string($_POST['username']);   
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']); 
    $password2 = mysql_real_escape_string($_POST['password2']);   
      
      //checks database if the username is already there
    $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");  
    
    //$checkemail = mysql_query("SELCET * FROM users WHERE EmailAddress = '".$email."'");
    //$row = mysql_fetch_row($checkemail);

     //if name is not inputted
     if(empty($_POST['name']))
     {
	    ?>
       <script>
       		alert("Please enter a valid name.");
       		history.back();
       </script>
       <?php
     }
     //name must be greater than or equal to 2 characters
     elseif(strlen($name) < 2)
     {
	     ?>
       <script>
       		alert("Names must be greater than or equal to 2 characters.");
       		history.back();
       </script>
       <?php
     }
     //if email is not inputted
     elseif(empty($_POST['email']))
     {
	      ?>
       <script>
       		alert("Please enter an email.");
       		history.back();
       </script>
       <?php

     }
     //checks if email is valid
      elseif(filter_var($email,FILTER_VALIDATE_EMAIL) != true)
     {
     	?>
	     <script>
	     	alert("The email <?php echo $_POST['email']?> is not valid");
	     	history.back();
	     </script>
	     <?php
     }
     /*elseif(!isset($row['email']) !=true)
     {
	      ?>
       <script>
       		alert("The email<?php echo $_POST['email']; ?> is already registered.");
       		history.back();
       </script>
       <?php
     } */
     
     //checks if username is already registered
     elseif(mysql_num_rows($checkusername) == 1 )  
     {  
       ?>
       <script>
       		alert("The username <?php echo $_POST['username']; ?> is already registered.");
       		history.back();
       </script>
       <?php
     } 
     //checks if username is less than 6 characters
     elseif(strlen($username) < 4)
     {
	     ?>
       <script>
       		alert("Usernames must be greater than or equal to 4 characters.");
       		history.back();
       </script>
       <?php
     }
     //checks if password is less than 6 characters
     elseif(strlen($password) < 6)
     {
	     ?>
       <script>
       		alert("Passwords must be greater than or equal to 6.");
       		history.back();
       </script>
       <?php
     }
     elseif($_POST['password'] != $_POST['password2'])
     {
	     ?>
	     <script>
	     	alert("Passwords did not match");
	     	history.back();
	     </script>
	     <?php
     }
     else  
     {  
     	$securepass = md5($password); //hashing password after the inputted value has been validated
     	
        $registerquery = mysql_query("INSERT INTO users (Name, Username, Password, EmailAddress) VALUES('".$name."','".$username."', '".$securepass."', '".$email."')");//enter into database  
        
        //successful registration
        if($registerquery)  
        {  ?>
            <div id="nodetypeDialog" class="modal hide fade">

				<div class="modal-header">

					<a href="#" class="close" data-dismiss="modal">&times;</a>

					</div>

				<div class="modal-body">

					<div class="divDialogElements">

						<div class="divPopupMenu">
							<p>You successfully created your account! Exit out to login.</p>
						</div>

					</div>

				<div class="modal-footer">

					<input class="btn" type = "reset" value = "Cancel">

					<button type="submit" class="btn btn-primary">Go</button>

					</div>

				</div>

			<div class="divButton">
			</form>

				</div>
            <?php
        }  
        else //unsuccessful registration 
        {  
            echo "<h1>Error</h1>";  
        }         
     }  
}  
//default registration form
else  
{  

	?>
		 <div class="span4 plan">
          <div class="plan-name-gold">
            <h2>Register</h2>
          </div>
          <p>
          <form method="post" action="index.php" name="registerform" id="registerform">  
    <fieldset> 
    	<label for ="name"></label><input type = "text" name = "name" id = "name" placeholder = "Full Name" style = "height:40px;"/> <br />
    	<label for="email"></label><input type="text" name="email" id="email" placeholder = "Email" style = "height:40px;"/><br />  
        <label for="username"></label><input type="text" name="username" id="username" placeholder = "Username" style = "height:40px;"/><br />  
        <label for="password"></label><input type="password" name="password" id="password" placeholder="Password" style = "height:40px;"/><br /> 
        <label for="password2"></label><input type="password" name="password2" id="password2" placeholder = "Confirm Password" style = "height:40px;" /><br /> 
        <br/>
        <input type="submit" name="register" id="register" value="Register" class="btn btn-success" />  
    </fieldset>  
    </form>  
    </p>
        </div>
      </div>
      
      
    <?php  
}  
?>
   <footer class = "footer">
      <div class = "texts">
      <small><a href = "about.php">About |</a></small>
      <small><a href = "developers.php">Developers |</a></small>
      <small><a href= "documentation.php">Documentation </a></small>
      <small>&copy 2013 Phrollic</small>
      </footer>
      </div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</body>  
</html>  
