<?php include "base.php"; ?>   
<html xmlns="http://www.w3.org/1999/xhtml">    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
  
<title>Registration</title>  
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
		<meta content="0;index.php" http-equiv="refresh"> 
      
    <?php  
}  
?>  
  
</div>  
</body>  
</html>  