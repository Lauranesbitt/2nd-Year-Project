
<?php
  
   //include a javascript file
   echo "<script type='text/javascript' src='passscript.js'></script>";
?>
<?php

if(!mysql_connect("localhost","x14346081",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("c9"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
if(isset($_POST['changePass']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM registered WHERE email='$email'");
 $row=mysql_fetch_array($res);
if($_POST["cpassword"] == $row["password"]) {
mysql_query("UPDATE users set password='" . $_POST["npassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?> 
    
 
    
<?php include 'header.php' ?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col"></div>
    <!-- form -->
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
      <section class="changepass">
        <h3>Change Password</h3>
        <hr/>
        <!-- form start -->
    <form name="frmChange" method="post" action=""onSubmit="return validatePassword()">
          <div class="mdl-cell mdl-cell--6-col">
              <label for="email">Email:</label><br/>
              <input type="email" name="email" required="" placeholder="name@gmail.com" /><br/>
            </div>
          
          
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="cpassword">Current Password:</label>
              <input type="password" name="cpassword" required="" placeholder="p@55w0rd" />
            </div>
          
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="npassword">New Password:</label>
              <input type="password" name="npassword" required="" placeholder="p@55w0rd" />
            </div>
            
            <div class="mdl-cell mdl-cell--6-col">
              <label for="confirmpassword">Confirm New Password:</label>
              <input type="password" name="confirmpassword" required="" placeholder="p@55w0rd" />
            </div>
          </div>
          <!-- row 4 -->
          <br/><br/><button name="changePass type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Reset</button><br/><br/>
          
         
        </form><!-- ./change password end -->
        
        
        
        
        
         
 </section><!-- ./section end -->
    </div><!-- ./ column end -->
    <div class="mdl-cell mdl-cell--3-col"></div>
  </div>
  </div>
<?php include 'footer.php'; ?>
