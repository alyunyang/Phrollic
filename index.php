<?php 
include_once("base.php");

?>

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
  	#wrap {
  		min-height:100%;
  		height: auto !important;
  		height: 100%;
  		margin: 0 auto -60px;
  	}
  	#push,
  	#footer{
  		height:60px;
  	}
	#footer{
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
    		<script>
    			alert("Could not find username/password!");
    			history.back();
    		</script>
          <?php
    }  
} 
 
else //default form  
{  
    ?>  
      </div> 
       <div class="row-fluid pricing-table pricing-three-column">
        <div class="span4 plan">
          <div class="plan-name-bronze">
            <h2>Login</h2>
          </div>
           <p><form  method="post" action="<?php echo $_SERVER['PHP_SELF']?>" name="loginForm">
           		
          <input type="text" class="input-small" name = "username" id = "username" placeholder="Username" style = "height:40px;width: 49%;">
          
          <input type="password" class="input-small" name = "password" id = "password" placeholder="Password"  style = "height:40px;width: 49%;">
         
          <br/>
          <input type="hidden" name="loginSubmit" id="loginSubmit" value="true" />  
          <input type="submit" class="btn btn-large btn-success" value="Login"/>  
    </form></p>
    <br/> <br/> <br/> 
  
   <?php  
}  
?>  
 	
 	

</div>
       <div class="span4">
        <div class = "jumbotron">
         <h3>Welcome to Phrollic .</h3>
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
		 <div class="span4 plan">
          <div class="plan-name-gold">
            <h2>Register</h2>
          </div>
          <p>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerForm" id="registerForm">  
    <fieldset> 
        
    	<label for ="name"></label><input type = "text" name = "name" id = "name" placeholder = "Full Name" style = "height:40px;"/> <br />
    	<label for="email"></label><input type="text" name="email" id="email" placeholder = "Email" style = "height:40px;"/><br />  
        <label for="username"></label><input type="text" name="username" id="username" placeholder = "Username" style = "height:40px;"/><br />  
        <label for="password"></label><input type="password" name="password" id="password" placeholder="Password" style = "height:40px;"/><br /> 
        <label for="password2"></label><input type="password" name="password2" id="password2" placeholder = "Confirm Password" style = "height:40px;" /><br /> 
        <br/>
        <input type="hidden" name="registerSubmit" id="registerSubmit" value="true" />  
        <input type="submit" name="register" id="register" value="Register" class="btn btn-large btn-success" />  
    </fieldset>  
    </form>  
    </p>
        </div>
      </div>
      <?php
}
?>
<div id="push"></div>
 <div id="footer">
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</body>  
</html>

