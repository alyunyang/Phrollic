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
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="default/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="variables.less" rel="stylesheet">
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, ‘load’, initialize);
    </script>
    <style>
    .container {
  padding-left: 15px;
  padding-right: 15px;
}

h4 {
  margin-top: 25px;
}
.row {
  margin-bottom: 20px;
}
.row .row {
  margin-top: 10px;
  margin-bottom: 0;
}
[class*="col-lg-"] {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: rgba(185,74,72,.15);
  border: 1px solid rgba(185,74,72,.2);
}
 #map_canvas {
        width: 500px;
        height: 400px;
      }
</style>
    </head>
		<body>
		    <script src="js/bsa.js"></script>

		<section id="navbar">
  
  <div class="navbar navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Phrollic</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Newsfeed</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#friends">Friends</a></li>
            <li><a href="#friends">Hit Up Someone</a></li>

            <li>
              <ul>
                 <div>
                
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
          <ul class="nav navbar-nav pull-right">
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
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class="container">

      
     
      <div class="row">
        <div class="col-6 col-sm-6 col-lg-6"><h1> Newsfeed</h1><br/></div>
        <div class="col-6 col-sm-6 col-lg-6">  <iframe width="550" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?safe=off&amp;q=notre+dame&amp;ie=UTF8&amp;hq=notre+dame&amp;t=m&amp;ll=48.852968,2.349902&amp;spn=0.014684,0.032015&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?safe=off&amp;q=notre+dame&amp;ie=UTF8&amp;hq=notre+dame&amp;t=m&amp;ll=48.852968,2.349902&amp;spn=0.014684,0.032015&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>  </div>
</div>
      </div>

    </div> <!-- /container -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

		
		
		</body>
</html>
<?php
}
?>