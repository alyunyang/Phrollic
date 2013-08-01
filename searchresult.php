<?php
include "base.php";
?>
<html>
<head>
<?php
if(isset($_GET['username']))
{
	$username = $_GET['username'];
	$userquery = mysql_query("SELECT * FROM users WHERE username = '".$username."'") or die("The query could not be completed.Please try again.");
	if(mysql_num_rows($userquery) != 1)
	{
		die("That username could not be found!");
	}
	while($row = mysql_fetch_array($userquery, MYSQL_ASSOC))
	{
		$name = $row['Name'];
		$dbusername = $row['Username'];
	}
	if($username != $dbusername)
	{
		die("There has been a fatal error. Please try again.");
	}
	
	?>
<title><?php echo $name?>'s Profile</title>
</head>
<body>


<h2><?php echo $name ?>'s Profile </h2>
<table>
<tr><td>Name :</td><td><?php echo $name?></td></tr>
<tr><td>Username :</td><td><?php echo $dbusername?></td></tr>
</table>
	
<?php
}else die("You need to specify a username");
?>
</body>
</html>