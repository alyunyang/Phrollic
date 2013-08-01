<?php 
include_once("base.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">    
<head>    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
<title>Phrollic</title>  
	<link href="style.css" rel = "stylesheet" />
	<link href="dist/css/bootstrap.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="default/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <style>
    .navbar.transparent{
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.5);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}
.well{
	border-radius: 5px 5px 5px 5px;
 	border-width:0px;
}
	.container{
		height:10px;
	}
	.jumbotron{
	color:white;
	background-color:rgba(0,0,0,0.0);
	margin-left: -15px;
	margin-top:200px;
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
  	#push,
  	#footer-wrapper{
  		
  		height:60px;
  	}
	#footer-wrapper{
		 opacity: 1;
  		 background-color: rgba(0,0,0,0.6);
	}
	
	.texts{
		text-align:center;
		color: #ababab;
		margin-top: 20px;
	}
	.alert{
	margin-top: 200px;
	}
	
    </style>
</head>    
<body background="skyline.jpg" style = "padding: 50px;">  
<div class = "wrapper">
   <div class="navbar transparent navbar-fixed-top">
      <div class="container">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#" style = "font-weight: bold;font-size:30px;color:#FF6600;margin-top:5px;">Phrollic</a>
        <div class="nav-collapse collapse">
         	<div class = "pull-right">
         	 <img src="logo.svg" alt="logo" width="75" height="75" style = "margin-top: -5px;"> 
         	</div>
        </div>
      </div>
    </div>

  </div>
</div>

 	<?php
 	//LOGIN FORM
 	//sees if login button has been pressed and if the user is already logged in
 
//checksif the login button is pressed and if the username and password text boxes have been filled
if($_POST['loginSubmit'] && $_POST['loginSubmit'] == true && !empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);//grabs username
	$password = md5(mysql_real_escape_string($_POST['password']));//grabs password and hashes it
	
	$checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."'AND Password = '".$password."'"); //compares entered text to info in the database
	if(mysql_num_rows ($checklogin) == 1)//if data matches
	{
		$row = mysql_fetch_array($checklogin);
		$email = $row['Email'];
		
		$_SESSION['Name'] = $name;
		$_SESSION['Username'] = $username;
		$_SESSION['Email'] = $email;
		$_SESSION['LoggedIn'] = 1;
		?>
		<meta http-equiv="refresh" content="0;admin.php">
		<?
		
}  
    else//if data doesn't match  
    {  
    	?>
    		<a class="close" data-dismiss="alert" href="#">&times;</a>
    		<script>
    			
    			history.back();
    		</script>
          <?php
    }  
} 
 
else //default form  
{  
    ?>  
      </div> 
     <br />
     <br />
    <form class = "span4 well form-inline" method = "post" action="<?php echo $_SERVER['PHP_SELF']?>" name="loginForm" style = "margin-left:30px;">
  <fieldset>
    <legend style = "color:#FF6600;"><strong>Sign in</strong></legend>
    <div class="form-group">
      <input type="text" class="form-control" name = "username" id = "username" placeholder = "Username" data-placement = "bottom" style = "height:40px;width: 49%;>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name = "password" id = "password" placeholder = "Password" data-placement = "bottom" style = "height:40px;width: 49%;>
    </div>
    <div class="checkbox">
    <input type="hidden" name="loginSubmit" id="loginSubmit" value="true" />  
    <input type="submit" class="btn btn-success" style = "margin-top: 20px;margin-left:130px;" value="Login"/>  
  </fieldset>
</form>
  
   <?php  
}  
?>  
 	
 	

</div>
       <div class="span5">
        <div class = "jumbotron" style = "margin-top: 150px;">
         <h3>Welcome to Phrollic.</h3>
        </div>
        </div>
        
<?php
//REGISTRATION FORM
//checks if register button is pressed and if username and password boxes have been filled
if($_POST['registerSubmit'] && $_POST['registerSubmit'] == true && !empty($_POST['username']) && !empty($_POST['password']))
{
		$name = mysql_real_escape_string($_POST['name']);//grabs name
		$username = mysql_real_escape_string($_POST['username']);//grabs username
		$password = mysql_real_escape_string($_POST['password']);//grabs password
		$email = mysql_real_escape_string($_POST['email']);//grabs email
		$confirmpass = mysql_real_escape_string($_POST['password2']);
		
		//checks if username is already in the database
		$checkuser = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
		if(mysql_num_rows($checkuser) == 1)
		{
			?>
				<script>
					alert("Sorry, that username is taken.");
					history.back();
				</script>
			<?php
		}
		//checks if email is already in the database
		$checkemail = 'SELECT * FROM users WHERE email = "' . $email . '" LIMIT 1';
		$result = mysql_query($checkemail);
		if(mysql_num_rows($result) == 1)
		{
			?>
				<script>
					alert("Sorry, that email is already associated with an account");
					history.back();
				</script>
			<?php
		}
		//checks if passwords match
		elseif(!($password == $confirmpass))
		{
			?>
				<script>
					alert("The passwords did not match.");
					history.back();
				</script>
			<?
		}
		//checks to see if email is valid
		elseif(filter_var($email, FILTER_VALIDATE_EMAIL) != true)
		{
			?>
				<script>
					alert("Please enter a valid email.");
					history.back();
				</script>
			<?
		}
		elseif(strlen($username) < 4)
		{
			?>
				<script>
					alert("Usernames must be greater than or equal to 4 characters.");
					history.back();
				</script>
			<?
		}
		elseif(strlen($password) < 6)
		{
			?>
				<script>
					alert("Passwords must be greater than or equal to 6 characters.");
					history.back();
				</script>
			<?
		}
		//if registration passes all validation
		else
		{
			$hashedpass = md5($password);//hashing password afterwards so that it can be compared to the confirm password
			//insert info into database
			$registerquery = mysql_query("INSERT INTO users(Name,Username,Password,Email) VALUES('".$name."','".$username."','".$hashedpass."','".$email."')" );
			//if successfully registered
			if($registerquery)
			{	
				?>
				<script>
				alert("You successfully registered!");
				history.back();
				</script>
				<?php
			}
			//if not successfully registered
			else
			{
				?>
					<script>
					alert("Sorry, your registration failed.");
					history.back();
					</script>
				<?php
			}
		}
		
}
else//default form
{
	?>
      <br />
       <form class = "span4 well" style = "margin-left: 850px;margin-top: -340px;" method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerForm" id="registerForm" >
  <fieldset>
    <legend style = "color:#FF6600;"><small>New to Phrollic?</small><strong> Sign up </strong></legend>
     	<div class = "form-group">
    	<input type = "text" class = "form-control" name = "name" id = "name" placeholder = "Full Name" data-placement = "left" /> <br />
   
    	<input type="text" class = "form-control" name="email" id="email" placeholder = "Email" data-placement = "left" /><br />

       	<input type="text" class = "form-control" name="username" id="username" placeholder = "Username" data-placement = "left" /><br /> 
       

        <input type="password" class = "form-control" name="password" id="password" placeholder="Password"/><br />

       
        <input type="password" class = "form-control" name="password2" id="password2" placeholder = "Confirm Password"/><br /> 
    
        <br/>
        
        <input type="hidden" name="registerSubmit" id="registerSubmit" value="true" />  
        <input type="submit" name="register" id="register" value="Register" class="btn btn-success" style = "margin-left:130px;" />
        </div>
  </fieldset>
</form>
      <?php
}
?>
<div id="push"></div>
</div>
 <div id="footer-wrapper" style = "position:fixed;bottom:0;">
      <div class="container">
      <div  class = "texts">
      <small><a href = "about.php" style = "text-decoration: none;">About </a></small>
      <small><a href = "developers.php"  style = "text-decoration: none; padding-left:10px;">Developers </a></small>
      <small><a href= "documentation.php"  style = "text-decoration: none; padding-left:10px;">Documentation </a></small>
      <small>&copy 2013 Phrollic</small>
      </footer>
      </div>
      </div>
      </div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
    	$('#name').tooltip({'trigger':'hover','title':'John Doe'});
    	$('#email').tooltip({'trigger':'hover','title':'john.doe@example.com'});
    	$('#username').tooltip({'trigger':'hover','title':'Username'});
    	$('#password').tooltip({'trigger':'hover','title':'Password'});
    </script>
</body>  
</html>

