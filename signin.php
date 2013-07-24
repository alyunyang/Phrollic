<?php include "base.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">    
<head>    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
<title>Log in</title>  
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="bootstrap.css" rel="stylesheet">
	<link href="bootstrap.min.css" rel="stylesheet">
    <link href="default/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootswatch.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="variables.less" rel="stylesheet">
    <link href="bootswatch.less" rel="stylesheet">
</head>    
<body>    
<div id="main">
 <h1>Member Login</h1>  
      
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>  
   
    
			<div id="nodetypeDialog" class="modal hide fade">

				<div class="modal-header">

					<a href="#" class="close" data-dismiss="modal">&times;</a>

					<h3 id="prompt">Sign In</h3>

					</div>

				<div class="modal-body">

					<div class="divDialogElements">

						<div class="divPopupMenu">

							<div class="input">
								<form class="form-search pull-right" method="post" action="signin.php" name="loginform" id="loginform">
								  <input type="text" class="input-small" name = "username" id = "username" placeholder="Username" style = "height:40px; width:150px;" data-toggle="tooltip" title="tooltip on second input!" type="text" placeholder="Focus me!" name="secondname">
          						  <input type="password" class="input-small" name = "password" id = "password" placeholder="Password"  style = "height:40px; width:150px;">
								</div>

							</div>

						</div>

					</div>

				<div class="modal-footer">

					<input class="btn" type = "reset" value = "Cancel">

					<button type="submit" class="btn btn-primary">Go</button>

					</div>

				</div>

			<div class="divButton">
			</form>

				<a data-toggle="modal" href="#nodetypeDialog" class="btn btn-primary btn-large" style = "margin-left: 5px;">Sign in</a>

				</div>

   <form class="well form-search span4" method="post" action="signin.php" name="loginform" id="loginform" style = "margin-left:300px;">
          <input type="text" class="input-small" name = "username" id = "username" placeholder="Username" style = "height:40px;">
          <input type="password" class="input-small" name = "password" id = "password" placeholder="Password"  style = "height:40px;">
          <button type="submit" class="btn">Go</button>
    </form>
      
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

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</body>  
</html>  
