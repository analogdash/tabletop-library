<?php
session_start();
echo '
<!DOCTYPE html>
<html lang=en>

<head>
	<title>Tabletop Library</title>
	<meta charset="UTF-8">
	<meta name="description" content="A library for boardgames!">
	<meta name="keywords" content="tabletop">
	<meta name="author" content="Dash Castellano">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable = no">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- some extra scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.0.2/bootstrap-slider.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- BEGIN VANILLA BOOTSTRAP MENU BAR -->
<!-- oh my god, building a website is so easy nowadays -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">The Table Top Library</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="collection.php"><span class="glyphicon glyphicon-search"></span> Collection</a></li>
        <li><a href="rental.php">Game Room Rental</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		';

## Changes right navbar depending on user log in status
		if ($_SESSION){
			include 'conndb.php';
			$retrieve = "SELECT username FROM users WHERE userid='".$_SESSION["loggedinuserid"]."';";
			$result = mysqli_query($link, $retrieve);
			$row = mysqli_fetch_assoc($result);
			$username = $row["username"];

echo '

        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Admin Tools
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="newgame.php">New Game</a></li>
          <li><a href="#">Amenities</a></li>
        </ul>
      </li>
';

			echo '
			
		<li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> '.$username.'</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li
			Your username is '.$username.'<br>';

			mysqli_close($link); 
		}
		else {		
			echo '

        <li><a href="newuser.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
		}

echo '
		</ul>
    </div>
  </div>
</nav>

<div id="holder">
';


?>