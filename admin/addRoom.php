<?php
session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in to view this page.');</script>";
 echo "<script>window.location = 'login.php';</script>";
}
include_once '../classes/dbconnect.php';

if(isset($_POST['btn-addroom']))
{
 $room = mysql_real_escape_string($_POST['room']);
 $location = mysql_real_escape_string($_POST['location']);
 $capacity = mysql_real_escape_string($_POST['capacity']);
 $type = mysql_real_escape_string($_POST['type']);
 $description = mysql_real_escape_string($_POST['description']);
 //$photo = mysql_real_escape_string($_POST['photo']);
 if(mysql_query("INSERT INTO rooms(room, location, capacity, type, description) VALUES ('$room','$location','$capacity','$type','$description')"))
 {
        echo"<script>alert('Your room has been added successfully.');</script>";
 }
 else
 {
        echo"<script>alert('Sorry, there was an error adding that room.');</script>";
 }
}
?>