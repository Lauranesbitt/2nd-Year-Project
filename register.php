<!DOCTYPE html>
<?php include 'header.php'?>

<html>

<head>
  <link type='text/css' rel='stylesheet' href='style.css' />
  <title>Register</title>
</head>

<body>

  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--1-col">1</div>
    <div class="mdl-cell mdl-cell--3-col">
      <div id="register" style="float:right" "border-style: solid" "border-width: 20px" "padding=10px">
        <div class="header">
          <h3><a href="login.php">Login</a> Register</h3>
        </div>

        <form id="reg" action="index.php" method="post">
          <label for="firstname">First name:</label>
          </br>
          <input type="text" name="firstname" class="required" placeholder="John" />
          </p>

          <label for="lastname">Last Name:</label>
          </br>
          <input type="text" name="lastname" class="required" placeholder="Smith" />
          </p>

          <label for="username">Personal Email:</label>
          </br>
          <input type="text" name="username" class="required" placeholder="name@gmail.com" />
          </p>

          <label for="orgemail">Organisation Email:</label>
          </br>
          <input type="text" name="orgemail" class="required" placeholder="name@student.ncirl.ie" />
          </p>

          <label for="phone">Phone:</label>
          </br>
          <input type="text" name="phone" placeholder="087 1234567" />
          </p>

          <label for="code">Admin Passcode: (if applicable)</label>
          </br>
          <input type="text" name="code" placeholder="E2R5E" />
          </p>

          <label for="password">Password:</label>
          </br>
          <input type="password" name="password" class="required" placeholder="Pa55w.rd" />
          </p>

          <label for="password">Confirm password:</label>
          </br>
          <input type="password" name="password" class="required" placeholder="Pa55w.rd" />
          </p>

          <button id="registerbutton" type="submit">Register</button>
        </form>
      </div>
    </div>


</body>

</html>