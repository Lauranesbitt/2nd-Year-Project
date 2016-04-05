<?php

if(!mysql_connect("localhost","x14346081",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("c9"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?> 
       
   

<?php include 'header.php';?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Reset Password</h3>
        <hr/>
        <!-- forgot password form -->
        <form action="forget.php" method="post">
Enter you email ID: <input type="text" name="email"><br>
<input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" value="Send New Password"><br>
<br>

 <p><a href="resetpassword.php" onclick="resetpassword.php" id="forget">Change Current Password</a></p>
</form>


 <?php
        $email = $_POST['email'];
        
        $submit = $_POST['submit'];
        
  
        if ($submit){
            
            $email_check =mysql_query("SELECT * FROM registered WHERE email='$email'");
            $count = mysql_num_rows($email_check);
            
            if ($count !=0){
                //generate a new password
                $random = rand(72891, 92729);
                $new_password = $random;
                
                //create a copy of the new password 
                
                $email_password = $new_password;
                
                // encrypt the new password
                $new_password = md5($new_password);
                
                //update the db
                mysql_query("update user set password='".$new_password."'WHERE email='".$email."'");
                
             //send the password
                $subject="Login Information";
                $message ="Your password has been changeed to $email_password";
                $from = "From:example@example.com";
                
                mail($email, $subject, $message,$from);
                echo "your new password has been emailed to you";
                
                
    
            }
            else{
                echo "This email does not exist";
            }
        }
        ?>








         </section><!-- section end-->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>
          
<?php include 'footer.php'; ?>