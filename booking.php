<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php'; include_once 'bookings/addBooking.php'; ?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Book a Room</h3>
        <hr/>
        <!-- add booking form -->
        <form method="post"> 
 
          <label for="room">Room:</label></br>
            <select name="room">
              <option value="">Select...</option>
              <option value="SCR3">SCR3</option>
              <option value="3.02">3.02</option>
              <option value="3.03">3.03</option>
              <option value="3.04">3.04</option>
              <option value="Theatre 3">Theatre 3</option>
            </select>
            </p>
            
          <label for="capacity">Seats Required:</label></br>
          <input name="capacity" type="number" default value="1" maxlength="3" required=""></p>

          <label for="date">Date:</label></br>
          <input name="date"  type="date" required=""></p>
          
          <label for="time">Time:</label></br>
          <input name="time"  type="time" required=""></p>
          
          <label for="requirements">Special Requirements:</label></br>
          <textarea name="requirements" rows="6" cols="32" maxlength="150" required=""/></textarea></p>
          
          </br><input type="submit" name="btn-addbooking" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
        </form>
      </section><!-- section end -->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>
  
  <?php include 'footer.php'; ?>