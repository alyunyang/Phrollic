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
</head>    
<body background="skyline.jpg">  
<section id="navbar">
  
  <div class="navbar">
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html#" style = "color: orange; font-weight:bold;margin-left:2px;">Phrollic<sup>&copy;</sup></a>
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
  
<div id="main">
 <br/><br/><br/><br/><br/>
   
      

  
</div> 

 
 
      <div class="row-fluid pricing-table pricing-three-column">
        <div class="span4 plan">
          <div class="plan-name-bronze">
            <h2>Login</h2>
          </div>
           <p><form  method="post" action="" name="loginform" id="loginform" >
          <input type="text" class="input-small" name = "username" id = "username" placeholder="Username" style = "height:40px;">
          <input type="password" class="input-small" name = "password" id = "password" placeholder="Password"  style = "height:40px;">
          <br/>
          <button type="submit" class="btn">Go</button>
    </form></p>
    <br/> <br/> <br/> 
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
      
  
   <?php  
}  
?>  
        </div>
        
        <div class="span4 plan">
          
         <img src="phrollicicon.svg" alt="logo" width="300" height="300">
        </div>
        <div class="span4 plan">
          <div class="plan-name-gold">
            <h2>Register</h2>
          </div>
          <p>
          <form method="post" action="register.php" name="registerform" id="registerform">  
    <fieldset> 
    	<label for = "name"></label><input type = "text" name = "name" id = "name" placeholder = "Full Name" style = "height:40px;/> <br />
    	<label for="email"></label><input type="text" name="email" id="email" placeholder = "Email" style = "height:40px;/><br />  
        <label for="username"></label><input type="text" name="username" id="username" placeholder = "Username" style = "height:40px;/><br />  
        <label for="password"></label><input type="password" name="password" id="password" placeholder="Password" style = "height:40px;/><br /> 
        <label for="password2"></label><input type="password" name="password2" id="password2" placeholder = "Confirm Password" /><br /> 
        <br/>
        <input type="submit" name="register" id="register" value="Register" class="btn" />  
    </fieldset>  
    </form>  
    </p>
    
    
        </div>
      </div>
     
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
    
    
   
</body>  
</html>  
