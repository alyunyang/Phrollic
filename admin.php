<?php 
include "base.php";
?>
<?php  
if(!empty($_SESSION['LoggedIn']))  
{  
	$name = $_SESSION['Name'];
?>
<html>
	<head>
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
		    <script src="js/bsa.js"></script>

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
        <a class="brand" href="index.html#" style = "color: orange; font-weight:bold;margin-left:2px;">Phrollic</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="#"><a  rel="tooltip"  target="_blank" href="admin.php" title="Check out whats going on" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);">Newsfeed</a></li>
            <li class ="#"><a rel="tooltip"  target="_blank" href="profile.php" title="View your profile" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);">Profile</a></li>
            <li class = "#"><a  rel="tooltip"  target="_blank" href="friends.php" title="View your friends" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);">Friends</a></li>
            <li class = "#"><a rel="tooltip"  target="_blank" href="hangout.php" title="Ask someone to hang with you" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);">Hit Someone Up</a></li>
            
		</ul>
          <ul class="nav">
            
            <li class="dropdown">
              <a  rel="tooltip"  target="_blank" title="Search" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class = "icon-search icon-white"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <div class="span3 offset1">
                
      <form class="form-search"  action = "searchresult.php" method = "GET">
        <div class="control-group">
          	<input type="text" class="input-medium search-query" id = "username" name ="username" style = "height:37px;margin-top:7px;">
          	<input type = "submit" class = "btn" id = "submit" name = "submit" value = "Search">
        </div>
      </form>
    </div>
              </ul>
            </li>
          </ul>
          
              </div>
              </ul>
           
         
          
          <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a  rel="tooltip"  target="_blank" title="View/Change your settings" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);" href="#" class="dropdown-toggle" data-toggle="dropdown"><?="@".$_SESSION['Username']?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html#">Account Settings</a></li>
                <li><a href="index.html#">Security</a></li>
                <li class="divider"></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
      </div>
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>

		
		
		</body>
</html>
<?php
}
?>