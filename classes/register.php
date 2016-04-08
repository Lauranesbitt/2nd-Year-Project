<!--Register SQL-->
<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already registered and logged in');</script>";
 echo "<script>window.location = 'index.php';</script>";
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $firstname = mysql_real_escape_string($_POST['firstname']);
 $lastname = mysql_real_escape_string($_POST['lastname']);
 $username = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 
 if(mysql_query("INSERT INTO registered(firstname,lastname,username,email,password) VALUES('$firstname','$lastname','$username','$email','$password')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>