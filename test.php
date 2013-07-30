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
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate-custom.css" rel="stylesheet">
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
	
	.texts{
		text-align:center;
		color: #ababab;
		margin-top: 20px;
	}
	.h1{
	height:100px;
	margin-left:20px;
	}
	
    </style>
</head>    
<body background="skyline.jpg" style = "padding: 50px;">  
<div class = "wrapper">
   <div class="navbar transparent navbar-fixed-bottom">
      <div class="container">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
	    <div class = "texts">
	  <small><a href = "about.php" style = "text-decoration: none;">About </a></small>
      <small><a href = "developers.php"  style = "text-decoration: none; padding-left:10px;">Developers </a></small>
      <small><a href= "documentation.php"  style = "text-decoration: none; padding-left:10px;">Documentation </a></small>
      <small>&copy 2013 Phrollic</small>
      </div>
         	</div>
        </div>
      </div>
    </div>

  </div>
</div>



 	<h1 class = "title" style = "font-size: 70px; margin-left: 450px;margin-top:-30px;color:#FF6600;">Phrollic</h1>
 	<img src="logo.svg" alt="logo" width="100" height="100" style = "margin-top: -87px;margin-left:700px;"> 
 	<hr style = "width:20%;margin-top:-5px;background:#999;">
 	<small style = "margin-left:535px;font-size:20px;">Explore Together.</small>
    <br />
    <!--
    <button class="btn btn-info" style = "margin-top: 50px;margin-left:350px;">Sign in with Twitter <img src = "twitter-icon.png" style = "margin-left:5px;"></img></button>-->
    <!-- Button trigger modal -->
  <a data-toggle="modal" href="#twitterModal" class="btn btn-info" style = "margin-top: 50px;margin-left:350px;">Sign in with Twitter <img src = "twitter-icon.png" style = "margin-left:5px;"></img></a>

  <!-- Modal -->
  <div class="modal fade in" id="twitterModal" data-backdrop = "static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Sign In With Twitter <img src = "twitter-icon.png" style = "margin-left:5px;"></img></h4>
        </div>
        <div class="modal-body">
          <form class = "span4 form-inline" method = "post" action="<?php echo $_SERVER['PHP_SELF']?>" name="loginForm">
  		<fieldset>
    	<div class="form-group">
      <input type="text" class="form-control" name = "Twitusername" id = "Twitusername" placeholder = "Username" data-placement = "bottom" style = "height:40px;width:49%;>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name = "Twitpassword" id = "Twitpassword" placeholder = "Password" data-placement = "bottom" style = "height:40px;width:49%;>
    </div>
    <div class="checkbox"></div>
  </fieldset>
        </div>
        <br />
        <br />
        <br />
        	<input type = "reset" value = "Clear" class="btn btn-default" style = "margin-left:300px;margin-bottom:30px;">
        	<input type="hidden" name="Twitterlogin" id="Twitter" value="true" />  
    		<input type="submit" class="btn btn-large btn-info" value="Login" style = "margin-bottom:30px;"/> 
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    <h3 style = "text-align:center;">OR</h3>
	<a data-toggle="modal" href="#fbModal" class="btn btn-primary" style = "margin-top: -99px;margin-left:680px;">Sign in with Facebook<img src = "facebook-icon.png" style = "margin-left:5px;"></img></a>

  <!-- Modal -->
  <div class="modal fade in" id="fbModal" data-backdrop = "static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Sign In With Facebook<img src = "facebook-icon.png" style = "margin-left:5px;"></img></h4>
        </div>
        <div class="modal-body">
          <form class = "span4 form-inline" method = "post" action="<?php echo $_SERVER['PHP_SELF']?>" name="loginForm">
  		<fieldset>
    	<div class="form-group">
      <input type="text" class="form-control" name = "fbusername" id = "fbusername" placeholder = "Username" data-placement = "bottom" style = "height:40px;width:49%;>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name = "fbpassword" id = "fbpassword" placeholder = "Password" data-placement = "bottom" style = "height:40px;width:49%;>
    </div>
    <div class="checkbox"></div>
  </fieldset>
        </div>
        <br />
        <br />
        <br />
        	<input type = "reset" value = "Clear" class="btn btn-default" style = "margin-left:300px;margin-bottom:30px;">
        	<input type="hidden" name="Fblogin" id="Fblogin" value="true" />  
    		<input type="submit" class="btn btn-large btn-primary" value="Login" style = "margin-bottom:30px;"/> 
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
    	$('#name').tooltip({'trigger':'hover','title':'John Doe'});
    	$('#email').tooltip({'trigger':'hover','title':'john.doe@example.com'});
    	$('#Twitusername').tooltip({'trigger':'hover','title':'Your Twitter Username'});
    	$('#Twitpassword').tooltip({'trigger':'hover','title':'Your Twitter Password'});
    	$('#fbusername').tooltip({'trigger':'hover','title':'Your Facebook Username'});
    	$('#fbpassword').tooltip({'trigger':'hover','title':'Your Facebook Password'});
    	
    	$('#twitterModal').addClass('animated flipInX');
    	$('#fbModal').addClass('animated flipInX');
		
    	
    </script>
</body>  
</html>

