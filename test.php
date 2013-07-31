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




 	<h1 class = "title" style = "font-size: 70px; margin-left: 450px;margin-top:-30px;color:#FF6600;">Phrollic</h1>
 	<img src="logo.svg" alt="logo" width="100" height="100" style = "margin-top: -100px;margin-left:700px;"> 
 	<br />
 	<small style = "margin-left:535px;font-size:20px;color:#fff;">Explore Together.</small>
    <br />
	<p style = "margin-right:1300px;margin-top:200px;font-size:20px;color:#fff">Show your Twitter and Facebook friends your location and invite them to hang out with you,whether it be casual trips to the shopping mall or luxurious vacations to Cancun. </p>
    <p style ="text-align:left;">Already have an Account?</p><a data-toggle="modal" href="#loginModal" class="btn btn-primary" style = "margin:0 auto;">Sign in</a>
  <!-- Modal -->
  <div class="modal fade in" id="loginModal" data-backdrop = "static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" style = "color:#FF6600">Sign in</h4>
        </div>
        <div class="modal-body">
          <a href="#" class="btn btn-info" style = "">Sign in with Twitter <img src = "twitter-icon.png" style = "margin-left:5px;"></img></a>
        <br />
         <small style = "font-size:10px;margin-left:50px;">OR</small>
         <br />
        <a href="#" class="btn btn-primary" style = "">Sign in with Facebook<img src = "facebook-icon.png" style = "margin-left:5px;"></img></a>
		 <p style = "margin-left:215px;margin-top:-130px;font-size:100px;">|</p>
        <form class = "span4 form" method = "post" action="<?php echo $_SERVER['PHP_SELF']?>" name="loginForm">
  		<div class="form-group">
      	<input type="text" class="form-control" name = "fbusername" id = "fbusername" placeholder = "Username" data-placement = "bottom" style = "height:40px;width:49%;margin-left:250px;margin-top:-125px;">
    	</div>
    	<br />
    	<div class="form-group">
      	<input type="password" class="form-control" name = "fbpassword" id = "fbpassword" placeholder = "Password" data-placement = "bottom" style = "height:40px;width:49%;margin-left:250px;margin-top:-10px;">
    	</div>
    <div class="checkbox"></div>
    	</div>
        	<input type = "reset" value = "Clear" class="btn btn-default" style = "margin-left:300px;margin-bottom:30px;">
        	<input type="hidden" name="Fblogin" id="Fblogin" value="true" />  
    		<input type="submit" class="btn btn-large btn-danger" value="Login" style = "margin-bottom:30px;"/> 
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
    	$('#Twitusername').tooltip({'trigger':'hover','title':'Your Twitter Username'});
    	$('#Twitpassword').tooltip({'trigger':'hover','title':'Your Twitter Password'});
    	
    </script>
</body>  
</html>

