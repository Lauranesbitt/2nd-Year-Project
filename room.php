<?php include_once 'admin/addRoom.php';


session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in to view this page.');</script>";
 echo "<script>window.location = 'login.php';</script>";
}
include_once 'classes/dbconnect.php';

if( $_POST )
{
  $con = mysql_connect("localhost","x14346081","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("c9", $con);

  $room = $_POST['room'];
  $location = $_POST['location'];
  $capacity = $_POST['capacity'];
  $type = $_POST['type'];
$description = $_POST['description'];

  $room = mysql_real_escape_string($room);
  $location = mysql_real_escape_string($location);
  $capacity = mysql_real_escape_string($capacity);
  $type = mysql_real_escape_string($type);
$description = mysql_real_escape_string($description);

 

  $query = "INSERT INTO `c9`.`rooms` (`room`, 'location',`capacity`, `type`,
        `description`) VALUES (NULL, '$room',
        '$location', '$capacity', '$type','$description');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}?>
<!-- Add a New Room -->
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Add a New Room</h3>
        <hr/>
<?php
$con = mysql_connect("localhost","x14346081","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("c9", $con);
 
$sql="INSERT INTO rooms (room, location,capacity,type,description)
VALUES
('$_POST[room]','$_POST[location]','$_POST[capacity]','$_POST[type]','$_POST[description]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>

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
           
           <input name = "submit" type = "submit" 
                              id = "submit" value = "Submit">
        </form>
        
        
                              
        
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
        <?php
          if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'x14346081';
            $dbpass = '';
            
            $con = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
            else{
            $room = $_POST['room'];
            $location = $_POST['location'];
            $capacity = $_POST['capacity'];
            $type = $_POST['type'];
            $description = $_POST['description'];
            
            
            
            $sql = "UPDATE rooms ". "SET room = '$room' ";
               $sql = "UPDATE rooms ". "SET location = '$location' " ;
               $sql = "UPDATE rooms ". "SET capacity = '$capacity' ";
               $sql = "UPDATE rooms ". "SET type = '$type' ";
               $sql = "UPDATE rooms ". "SET description= '$description' "; 
             
            mysql_select_db('c9');
            $retval = mysql_query( $sql, $con );
            
            if(! $retval ) {
               die('Could not update data: ' .mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($con);
         }
          }  
           
         else{   ?>
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
              1.<input type="file" name="image" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light"></p>
            
            
            <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                 
            
        </form></p></br>
        <?php
             }      
    ?>
         
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
        <?php
            mysql_connect("localhost", "x14346081", "") 
            or die("Connection Failed"); 
            mysql_select_db("c9")
            or die("Connection Failed"); 
            
            $room = $_POST['room']; $query = "delete from rooms where room = '".$room."'"; 
            if(mysql_query($query)){ 
              echo "deleted";
              
            } else{
              echo "fail";
              
            } 
               
            

          ?>
          <form method = "post">
         <label for="room">Room Name:</label></br>
          <input name="room" type="text" placeholder="eg. SCR3" required=""></p>
         <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
   </form>
    </section>
  </div>
      
  <div class="mdl-cell mdl-cell--3-col"></div>
</div>
<!-- End Delete Room -->

