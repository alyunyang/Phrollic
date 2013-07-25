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
	.footer{
		 opacity: 1;
  		 background-color: rgba(0,0,0,0.6);

	}
	.texts{
		margin-left: 490px;
		color: grey;
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

</div>
       <div class="span4">
        <div class = "jumbotron">
         <h3>Welcome to Phrollic .</h3>
        </div>
        </div>
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
   <footer class = "footer">
      <div class = "texts">
      <small><a href = "about.php" style = "text-decoration: none;">About </a></small>
      <small><a href = "developers.php"  style = "text-decoration: none; padding-left:10px;">Developers </a></small>
      <small><a href= "documentation.php"  style = "text-decoration: none; padding-left:10px;">Documentation </a></small>
      <small>&copy 2013 Phrollic</small>
      </footer>
      </div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</body>  
</html>

