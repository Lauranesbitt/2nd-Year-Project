<!-- database connection is being established -->
<?php include_once 'classes/dbconnect.php';
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="images/logo2.png" type="image/png" sizes="16x16 32x32">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-blue.min.css" />
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
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="index.php">
        <span class="mdl-layout-title">
          <img src="images/logo2.png" alt="logo" style="width:15%;height:15%;"/>
          Dragon Room Booking
        </span>
      </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
      <a class="mdl-navigation__link" href="login.php">Login</a>
      <a class="mdl-navigation__link" href="register.php">Register</a>
      <a class="mdl-navigation__link" href="booking.php">Bookings</a>
      </nav>
    </div>
  </header>
  <!-- content open -->
  <main class="mdl-layout__content">
    <div class="page-content">
      <!-- if logged in, username will appear -->
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
      <h2 class="centered">
        Logged in as: <?php echo "".$_SESSION['user']; ?>&nbsp;&nbsp;<a href="logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
      </h2></div>
  </div>