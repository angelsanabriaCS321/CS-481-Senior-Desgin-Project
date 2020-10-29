<?php
// session_start();
if( (isset($_SESSION['loggedIn']))){
  header("Location: homepage.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="navbar">
		<label for="toggle-1" class="toggle-menu">
			<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</label>
		<nav>
			<ul>
				<!-- <li><a href="#logo">Home</a></li> -->
        <li><a href="#index">Home</a></li>
        <li><a href="#worlddata">World-Data</a></li>
        <li><a href="#usdat">US-Data</a></li>
        <li><a href="#about">About</a></li>


			</ul>
		</nav>
    </div>
