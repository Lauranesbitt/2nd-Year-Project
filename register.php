<!DOCTYPE html>
<?php include 'header.php'?>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>Register</title>
  </head>
  <body>
    <div id="register" style="float:right">
      <div class="header">
        <h3><a href="login.php">Login</a> Register</h3>
      </div>
      
      <form id="reg" action="index.php" method="post">
          <label for="firstname">First name:</label></br>
          <input type="text" name="firstname" /></p>
          
          <label for="lastname">Last Name:</label></br>
          <input type="text" name="lastname" /></p>
          
          <label for="username">Email:</label></br>
          <input type="text" name="username" /></p>
          
          <label for="password">Password:</label></br>
          <input type="text" name="password" /></p>
          
          <label for="password">Confirm password:</label></br>
          <input type="text" name="password" /></p>
          
           <input type="submit" value="Register" />
       
          <!--<input type="submit" value="User Login" /></p>-->
      </form>
    </div>
  </body>
</html>