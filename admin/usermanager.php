<?php include '../header.php';
if($_SESSION['admin']=="no")
{
 echo "<script>alert('You must be logged-in as an admin to view this page.');</script>";
 echo "<script>window.location = 'https://itp-module-x14346081.c9users.io/index.php';</script>";
}?>

<?php include_once 'addRoom.php'; ?>

<div class="mdl-grid panel2">
	<div class="mdl-cell mdl-cell--2-col"></div>
	<div class="mdl-cell mdl-cell--8-col">
		<h2>User Manager</h2>
		You can use this page to manage registered users and their bookings.
  </div>
	<div class="mdl-cell mdl-cell--2-col"></div>
</div>

<?php include '../bookings/fetchRegistered.php'; ?>

<?php include '../footer.php' ?>

<!-- Heading -->
<!--<div class="mdl-grid">
        <div class="mdl-cell mdl-cell--5-col"></div>
        <div class="mdl-cell mdl-cell--2-col">
          <?//php 
            //if($_SESSION['user']!="" && $_SESSION['admin']=="yes"){
              ?>
              Admin View</p>
              <a href="https://itp-module-x14346081.c9users.io/room.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Add a New Room</a>
          <?//php } ?>  
        </div>
        <div class="mdl-cell mdl-cell--5-col"></div>
      </div>-->
     