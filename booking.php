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
            <select name="room" required="">
              <option value="">Select...</option>
              <option value="SCR3">SCR3</option>
              <option value="3.02">3.02</option>
              <option value="3.03">3.03</option>
              <option value="3.04">3.04</option>
              <option value="Theatre 3">Theatre 3</option>
            </select>
            </p>
            
          <label for="capacity">Seats Required:</label></br>
          <input name="capacity" width="300px" type="number" default value="1" min="1" max="100" maxlength="3" required=""/></p>

          <label for="date">Date:</label></br>
          <input name="date"  type="date" cols="50" required=""/></p>
          
          <label for="time">Time:</label></br>
          <input name="time"  type="time" cols="50" required=""/></p>
          
          <label for="requirements">Special Requirements:</label></br>
          <textarea name="requirements" placeholder="eg. Wheelchair accessibility" rows="6" cols="50" maxlength="150"/></textarea></p>
          <!-- rows="6" cols="32" maxlength="150"/></textarea></p> -->
          
          </br><input type="submit" name="btn-addbooking" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
        </form>
      </section><!-- section end -->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>