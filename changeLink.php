<?php include_once 'classes/dbconnect.php'; include_once 'Change.php'; ?>
<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php' ?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col"></div>
    <!-- Registration section -->
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Change Password</h3>
        <hr/>
        <!-- form start -->
        <form id="" method="post">
          <!-- row 1 -->
         
           
          <!-- row 2 -->
          <
            <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="password">Enter Your new Password:</label><br/>
              <input type="password" name="password" required="" placeholder="P@55w0rd" /><br/>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <label for="confirmpassword">Confirm Password:</label><br/>
              <input type="password" name="confirmpassword" required="" placeholder="P@55w0rd" /><br/>
            </div>
          </div>
          <!-- row 4 -->
          <br/><br/><button name="submit1" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Reset</button><br/><br/>
        </form><!-- ./Reset form end -->
      </section><!-- ./section end -->
    </div><!-- ./ column end -->
    <div class="mdl-cell mdl-cell--3-col"></div>
  </div>
  
 
<?php include 'footer.php'; ?>