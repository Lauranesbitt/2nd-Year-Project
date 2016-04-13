<?php include_once 'admin/addRoom.php';

session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in to view this page.');</script>";
 echo "<script>window.location = 'login.php';</script>";
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-addbooking'])) //add room or add booking
{
 $NAME = mysql_real_escape_string($_POST['NAME']);

 if(mysql_query("INSERT INTO bookings(name) VALUES ('$NAME')"))
 {
        echo"<script>alert('successfully added room');</script>";
 }
 else
 {
        echo"<script>alert('error while adding your room...');</script>";
 }
}?>

<!-- Add a New Room -->
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Add a New Room</h3>
        <hr/>
        <!-- add booking form -->
        <form method="post"> 
    
          <label for="room">Room Name/Number:</label></br>
          <input name="room" type="text" placeholder="eg. SCR3" required=""></p>
    
          <label for="location">Location:</label></br>
            <select name="location">
              <option value="">Select Floor...</option>
              <option value="Ground Floor">Ground Floor</option>
              <option value="1st Floor">1st Floor</option>
              <option value="2nd Floor">2nd Floor</option>
              <option value="3rd Floor">3rd Floor</option>
              <option value="4th Floor">4th Floor</option>
            </select>
            </p>
          
          <label for="capacity">Seating Capacity:</label></br>
          <input name="capacity" type="number" default value="1" min="1" max="100" maxlength="3" required=""></p>
          
          <label for="type">Room Type:</label></br>
          <input name="type" type="text" placeholder="eg. Computer Lab" required=""></p>
          
          <label for="description">Room Specifications:</label></br>
          <textarea name="description" placeholder="eg. 70 computers available" rows="6" cols="32" maxlength="150" required=""/></textarea></p>
          
          <label for="photo">Upload Room Photo:</label></br>
          <?php
            ini_set('mysql.connect_timeout',300);
            ini_set('default_socket_timeout',300);
            ?>
            
            1.<input type="file" name="image" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"></p>
            2.<input type="submit" name="submit" value="Upload" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"/>
        </form>
        
            <?php
                if(isset($_POST['submit'])){
                    if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                        echo "Please select an image.";
                    }
                    else{
                        $image= addslashes($_FILES['image']['tmp_name']);
                        $name= addslashes($_FILES['image']['name']);
                        $image= file_get_contents($image);
                        $image= base64_encode($image);
                        saveimage($name,$image);
                    }
                }
                //displayimage();
                function saveimage($name,$image){
                    $con=mysql_connect("localhost","x14346081","");
                    mysql_select_db("c9",$con);
                    $qry="insert into images (name,image) values ('$name','$image')";
                    $result=mysql_query($qry,$con);
                    if($result){
                        echo "<br/>Image uploaded.";
                    }
                    else{
                        echo "<br/>Image not uploaded.";
                    }
                }
                function displayimage(){
                    $con=mysql_connect("localhost","x14346081","");
                    mysql_select_db("c9",$con);
                    $qry="select * from images";
                    $result=mysql_query($qry,$con);
                    while($row = mysql_fetch_array($result)){
                        echo '<img height="300" width="300" src="data:image,base64,'.$row[2].' "> ';
                    }
                    mysql_close($con);
                    }
            ?>
          
          </br><input type="submit" name="btn-addroom" value="Add Room" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </section><!-- section end -->
    </div><!-- column end -->
    
    <div class="mdl-cell mdl-cell--4-col"></div>
</div>
<!-- End Add a New Room -->

<!-- Update Room Info -->
<div class="mdl-grid panel2">
  <div class="mdl-cell mdl-cell--3-col"></div>
  
  <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
    <section class="login-register">
       <h3>Update Room Info</h3>
        <hr/>
      
      <form method="post"> 
    
          <label for="room">Room:</label></br>
            <select name="location">
              <option value="">Select Room...</option>
              <option value="1st Floor">SCR3</option>
              <option value="2nd Floor">3.02</option>
              <option value="3rd Floor">3.03</option>
              <option value="4th Floor">3.04</option>
            </select>
            </p>
          
          <label for="capacity">Update Seating Capacity:</label></br>
          <input name="capacity" type="number" min="1" max="300" maxlength="3"></p>
          
          <label for="type">Update Room Type:</label></br>
          <input name="type" type="text" placeholder="eg. Computer Lab"></p>
          
          <label for="description">Update Room Specifications:</label></br>
          <textarea name="description" placeholder="eg. 70 computers available" rows="6" cols="32" maxlength="150"/></textarea></p>
          
          <label for="photo">Update Room Photo:</label></br>
          <?php
            ini_set('mysql.connect_timeout',300);
            ini_set('default_socket_timeout',300);
            ?>
            
            1.<input type="file" name="image" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"></p>
            2.<input type="submit" name="submit" value="Upload" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"/>
        </form></p></br>
          
          <input type="submit" name="btn-updateroom" value="Update Room" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    </section>
  </div>
      
  <div class="mdl-cell mdl-cell--3-col"></div>
</div>
<!-- End Update Room Info -->

<!-- Delete Room -->
<div class="mdl-grid panel2">
  <div class="mdl-cell mdl-cell--3-col"></div>
  
  <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
    <section class="login-register">
       <h3>Delete Room</h3>
        <hr/>
      
      <form method="post"> 
    
          <label for="room">Room:</label></br>
            <select name="location">
              <option value="">Select Room...</option>
              <option value="1st Floor">SCR3</option>
              <option value="2nd Floor">3.02</option>
              <option value="3rd Floor">3.03</option>
              <option value="4th Floor">3.04</option>
            </select>
            </p>
          
          <input type="submit" name="btn-deleteroom" value="Delete Room" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    </section>
  </div>
      
  <div class="mdl-cell mdl-cell--3-col"></div>
</div>
<!-- End Delete Room -->