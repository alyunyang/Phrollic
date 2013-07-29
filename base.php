<?php
session_start();

$dbhost = "localhost";
$dbname = "phrollic";//name of the database
$dbuser = "root";//username that will be required to login
$dbpass = "QweRT9297";//password that will be required to login

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error:". mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>