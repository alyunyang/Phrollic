<?php
session_start();

$dbhost = "localhost";
$dbname = "loginregister";//name of the database
$dbuser = "root";//username that will be required to login
$dbpass = "abusunjeev";//password that will be required to login

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error:". mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>