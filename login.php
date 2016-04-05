
<?php
include_once 'classes/dbconnect.php';
session_start();

if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already logged in');</script>";
 echo "<script>window.location = 'index.php';</script>";
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM registered WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['username'];
  header('booking.php');
  echo "<script type='text/javascript'>alert('You're logged in!');</script>";
 }
 else
 {
  ?>
        <script>alert('Wrong details entered, please try again!');</script>
        <?php
 }
 
}
?>
<?php include 'header.php';?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>User Login</h3>
        <hr/>
        <!-- login form -->
        <form id="loginform" action="" method="post">
          <label for="username">Username/Email:</label><br/>
          <input type="text" name="email" class="required" placeholder="name@example.com" /><br/>
          
          <label for="password">Password:</label><br/>
          <input type="password" name="password" class="required" placeholder="Pa55w.rd" /><br/><br/>
          
          <button type="submit" name="btn-login" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Login</button><br/><br/>
          
          <label for="remember">Remember login:</label>
          <input type="checkbox" value="remember" /></p>
          
          <p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>
          
        </form><!-- ./login form end -->
      </section><!-- section end-->
    </div><!-- column end -->
    
    
    <div class="mdl-cell mdl-cell--4-col">
        <!--<section class="login-register">
          <a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register</a>
        </section><!-- section end--> 
    </div>
  </div>
  
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
          <a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register</a>
      </section><!-- section end-->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>
  
<?php include 'footer.php'; ?>