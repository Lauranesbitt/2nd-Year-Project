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
        <h3>Change Password</h3>
        <hr/>
        <!-- login form -->
        <form id="loginform" action="" method="post">
          <label for="username">Username/Email:</label><br/>
          <input type="text" name="email" class="required" placeholder="name@example.com" /><br/>
          <label for="lastname">Last Name:</label><br/>
              <input type="text" name="lastname" required="" placeholder="Smith" />
          
          <button type="submit" name="btn-login" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Reset</button><br/><br/>
          
          
        </form><!-- ./login form end -->
      </section><!-- section end-->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>
  
<?php include 'footer.php'; ?>