<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php'; include_once 'bookings/addBooking.php'; ?>
 
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Book a room</h3>
        <hr/>
        <!-- add booking form -->
        <form method="post"> 
        
          <label for="name">Name:</label></br>
          <input name="name" type="text" required=""></br>
          
          <label for="description">Description:</label></br>
          <textarea name="description" rows="6" cols="32" maxlength="150" required=""/></textarea></br>
          
          <label for="date">Date:</label></br>
          <input name="date"  type="date" required=""></br>
          
          <label for="capacity">Capacity:</label></br>
          <input name="capacity" type="number" required=""></br>
          
          </br><input type="submit" name="btn-addbooking" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
        </form>
      </section><!-- section end -->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>