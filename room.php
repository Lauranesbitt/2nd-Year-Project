<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php'; include_once 'bookings/addRoom.php';


session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in to view this page.');</script>";
 echo "<script>window.location = 'login.php';</script>";
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-addbooking']))
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
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Add a Room to our Database</h3>
        <h6>(Admin only)-remove after</h6></br>
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
          <input name="capacity" type="number" default value="1" maxlength="3" required=""></p>
          
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
          
          </br><input type="submit" name="btn-addroom" value="Create" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </section><!-- section end -->
    </div><!-- column end -->
    <div class="mdl-cell mdl-cell--4-col"></div>
  </div>

<?php include 'footer.php'; ?>