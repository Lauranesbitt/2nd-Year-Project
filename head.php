<!-- database connection is being established -->
<?php
include_once 'classes/dbconnect.php';
session_start(); 
?>
	<!DOCTYPE html>
	<html>

	<head>
		<!-- Material Design Lite -->
		<script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
		<!-- Material Design icon font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<link rel="icon" href="https://itp-module-x14346081.c9users.io/images/header/logo2.png" type="image/png" sizes="16x16 32x32">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-blue.min.css" />
		<link type="text/css" rel="stylesheet" href="../css/footable.core.min.css" />
		<link type="text/css" rel="stylesheet" href="../css/calendar.css" />
		<link type="text/css" rel="stylesheet" href="../css/style.css" />
		<link type="text/css" rel="stylesheet" href="../css/landingPage.css" />
		<!-- custom icons via FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<title>Dragon Room Bookings</title>
	</head>

	<body>
		<!-- Always shows a header, even in smaller screens. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header ">
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<a href="https://itp-module-x14346081.c9users.io/index.php">
				  <span class="mdl-layout-title">
              <img src="https://itp-module-x14346081.c9users.io/images/header/logo2.png" alt="logo" style="width:15%;height:15%;"/>
              Dragon Room Booking
            </span>
					</a>
					<div class="mdl-layout-spacer"></div>
					<!-- Navigation. We hide it in small screens. -->
					<nav class="mdl-navigation mdl-layout--large-screen-only">
						<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/index.php">Available Rooms</a>
						<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/map.php">Floor Plan</a>

						<!-- Show 'Booking Manager' if user is loggged in-->
						<?php 
          if($_SESSION['admin']=="no"){
            ?>
						<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/bookings/bookingmanager.php">Booking Manager</a>
						<?php } ?>

						<!-- Show 'Admin Manager' if admin is loggged in-->
						<?php 
          if($_SESSION['admin']=="yes"){
            ?>
						<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/admin/roommanager.php">Room Manager</a>
						<?php } ?>

						<!-- Show 'Logout' if user/admin is loggged in-->
						<?php 
        if(isset($_SESSION['user'])!=""){
          ?>
						<a class="mdl-navigation__link" <p><strong><font color="white">Logged in as: <?php echo $_SESSION['user']; ?></font></strong></a></p>
						<a href="https://itp-module-x14346081.c9users.io/logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
						<?php } ?>

						<!-- Show 'Login' if user/admin is not loggged in-->
						<?php 
        if(isset($_SESSION['user'])==""){
          ?>
						<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/login.php">Login</a>
						<?php } ?>


					</nav>
				</div>
			</header>
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">DRM</span>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/index.php">Available Rooms</a>
					<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/map.php">Floor Plan</a>
					<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/login.php">Login</a>
				</nav>
			</div>
		
			<main class="mdl-layout__content">
				<div class="page-content">
					<!-- Your content goes here -->
				</div>
			</main>
			</h2>
		</div>
		
	  <div class="clearfix"></div>