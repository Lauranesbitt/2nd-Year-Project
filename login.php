<!DOCTYPE html>
<?php include 'database.php'; ?>
<?php include 'header.php'?>
<html>
<head>
  <link type='text/css' rel='stylesheet' href='style.css' />
  <title>Login</title>
</head>

<body>
  <div id="login" style="float:right" "border-style: solid"  "border-width: 20px" "padding=10px">
     <!--"border-color:#b4bbe4"-->
    <!--#3f51b5-->
    <div class="header">
        <h3>Login <a href="register.php">Register</a></h3>
    </div>
      <form id="reg" action="index.php" method="post">
        <label for="username">Username/Email:</label></br>
        <input type="text" name="username" /></p>
        <!--value placeholder="Username/Email"-->

        <label for="password">Password:</label></br>
        <input type="password" name="password"/></p>
        <!--value placeholder="Password"-->

        <input type="submit" value="Login" />

        <label for="remember">Remember login:</label>
        <input type="checkbox" value="remember" />
      </form>
    </div>
  </div>
</body>

</html>