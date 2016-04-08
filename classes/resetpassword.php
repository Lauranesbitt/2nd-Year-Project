<?php
//This code runs if the form has been submitted
if (isset($_POST['submit']))
{




// checks if the username is in use
$check = mysql_query("SELECT * FROM registered WHERE email = '$email'")or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 == 0) {
$error[] = 'Sorry, we cannot find your account details please try another email address.';
}

// if no errors then carry on
if (!$error) {

$query = mysql_query("SELECT * FROM registered WHERE email = '$email' ")or die (mysql_error());
$r = mysql_fetch_object($query);

//create a new random password

$password = substr(md5(uniqid(rand(),1)),3,10);
$pass = md5($password); //encrypted version for database entry

//send email
$to = "$email";
$subject = "Account Details Recovery";
$body = "Hi $r->username, nn you or someone else have requested your account details. nn Here is your account information please keep this as you may need this at a later stage. nnYour username is $r->username nn your password is $password nn Your password has been reset please login and change your password to something more rememberable.nn Regards Site Admin";
$additionalheaders = "From: <user@domain.com>rn";
$additionalheaders .= "Reply-To: noprely@domain.com";
mail($to, $subject, $body, $additionalheaders);

//update database
$sql = mysql_query("UPDATE registered SET password='$pass' WHERE email = '$email'")or die (mysql_error());
$rsent = true;


}// close errors
}// close if form sent

//show any errors

if ($rsent == true){
    echo "<p>You have been sent an email with your account details to $email</p>n";
    } else {
    echo "<p>Please enter your e-mail address. You will receive a new password via e-mail.</p>n";
    }

?>

