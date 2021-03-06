<?php
if($_POST["message"]) {
    mail("yutongl3@illinois.edu", "Form to email message", $_POST["message"], "From: MoviePool@outlook.com");
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="carousel.css">
  <script src="carousel.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<title>Movie Pool | Reset Password</title>
<link rel="stylesheet" type="text/css" href="password.css">
</head>
<header>
	<nav class="navbar navbar-fixed-top">
	  <div class="container-fluid">
	  	<div class="navbar-header">
		  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      	</button>
	  		<a class="navbar-brand" href="index.html">Movie Pool</a>
	  	</div>
	  <div class="collapse navbar-collapse" id="myNavbar">
	  	<ul class="nav navbar-nav">
	  		<li><a href="ride.html">Find A Ride</a></li>
	  		<li><a href="drive.html">Become A Driver</a></li>
	  		<li><a href="contact.html">Contact Us</a></li>
	  	</ul>
	  	<ul class="nav navbar-nav navbar-right">
	  		<li id="right-nav"><a href="account.html">Login</a></li>
	  	</ul>
	  </div>
	</div>
  </nav>
</header>
<body>
  	<div class="container" id="pass-window">
		<div id="sc-password">
	  		<h1>Reset Password</h1>
	  		<div class="sc-container">
            <form method="post" action="password.php">
                <input type="text" name="message" placeholder="Email"></textarea>
                <input type="submit" value="Get New Password"/>
            </form>
	  		</div>
		</div>
	</div>
	<footer class="footer">
	<div class="container">
	<div class="row">
		<div class="col-md-8">
		<span class="pull-left">
			<p>MoviePool &copy; 2017</p>
		</span>
		</div>
		<div class="icons">
			<div class="col-md-4">
			<span class="pull-right">
			<a href="#"><img src="img/social/facebook.png" alt="Facebook"></a>
	      	<a href="#"><img src="img/social/twitter.png" alt="Twitter"></a>
	      	<a href="#"><img src="img/social/instagram.png" alt="Instagram"></a>
	      	<a href="#"><img src="img/social/mail.png" alt="Email"></a>
 			<a href="https://github.com/Polarpi/pyghack" target="_blank"><img src="img/social/github.png" alt="Github"></a>
 			</span>
	      	</div>
		</div>
	</div>
	</div>
</footer>
</body>
</html>
