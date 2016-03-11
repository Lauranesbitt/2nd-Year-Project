
<?php include_once 'classes/dbconnect.php'; include_once 'classes/register.php'; ?>
<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php' ?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col"></div>
    <!-- Registration section -->
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>User Registration</h3>
        <hr/>
        <!-- form start -->
        <form id="" method="post">
          <!-- row 1 -->
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="firstname">First name:</label><br/>
              <input type="text" name="firstname" class="required" placeholder="John" />
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <label for="lastname">Last Name:</label><br/>
              <input type="text" name="lastname" class="required" placeholder="Smith" />
            </div>
          </div>
          <!-- row 2 -->
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="email">Email:</label><br/>
              <input type="text" name="email" class="required" placeholder="name@gmail.com" /><br/>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <label for="username">Username:</label><br/>
              <input type="text" name="username" class="required" placeholder="name@gmail.com" /><br/>
            </div>
          </div>
          <!-- row 3 -->
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="password">Password:</label><br/>
              <input type="password" name="password" class="required" placeholder="p@55w0rd" /><br/>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <label for="confirmpassword">Confirm Password:</label><br/>
              <input type="password" name="confirmpassword" class="required" placeholder="p@55w0rd" /><br/>
            </div>
          </div>
          <!-- row 4 -->
          <br/><br/><button name="btn-signup" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Register</button><br/><br/>
        </form><!-- ./Registration form end -->
      </section><!-- ./section end -->
    </div><!-- ./ column end -->
    <div class="mdl-cell mdl-cell--3-col"></div>
  </div>
  </div>
<?php include 'footer.php'; ?>