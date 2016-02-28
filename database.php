<?php
$servername = "localhost";
$username = "root";
$password = "";


$link = mysqli_connect($servername , $username, $password);

if(!$link){
    die('Could not connect: ' . mysqli_connect_error());
    
}
echo 'Connected successfully';
mysqli_close($link);

?>
