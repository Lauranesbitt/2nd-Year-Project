<?php
  include_once '../api/DbBookings.php';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  $search_output = "";
  
  $db = new DbBookings();
  
  $result = $db->viewBookings();
  if($result != false){
    $result = json_encode($result);
  }else{
    echo "Server error, please contact server administrator";
  }
  
?>
<!--<h1> SELECT SOMETHING </h1>
<form action='<?php /*echo $_SERVER['PHP_SELF'];*/ ?>' method='post' name='form_filter' >

    <select name="value">
        <option value="all">All</option>
        <option value="Fitzgerald">Fitzgerald</option>
        <option value="Herring">Herring</option>
    </select>
	
    <br />
	
    <input type='submit' value = 'Filter'>

</form>-->

<!-- My Bookings -->
    <section class="login-register"> 
    <!-- Heading --> 
    <form name="search_form" method="POST" action="display_viewBookings.php">
  
        Search: <input type="text" name="search_box" value="" />
        <input type="submit" name="search" value="Search the table">
      
    </form>
    <!--
    <h2>Bookings</h2>
    <a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Book a Room</a></p>
    -->
<!-- End Heading --> 
   <table id="mytable" class="footable mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp full-width">
     <thead>
        <tr>
          <th data-sort-initial="descending" colspan='3' class='mdl-data-table__cell--non-numeric'>Room</th>
          <th data-sort-initial="ascending" data-sort-ignore="true" colspan='3' class='mdl-data-table__cell--non-numeric'>Capacity</th>
          <th  colspan='6' class='mdl-data-table__cell--non-numeric'>Date</th>
          <th data-sort-initial="ascending" data-type="numeric" colspan='6' class='mdl-data-table__cell--numeric'>Time</th>
        </tr> 
      </thead>
      <tbody>
        
        <!-- Show only bookings -->
        <?//php 
        if(isset($_SESSION['user'])!=""){
          ?>
         <a class="mdl-navigation__link" <p><strong><font color="white">Logged in as: <?php echo $_SESSION['user']; ?></font></strong></a></p>
         <a href="https://itp-module-x14346081.c9users.io/logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
      <?//php } ?>
      
      <?php
//      where (($_SESSION['user'])=="userID")
        $res = json_decode($result, true);
        foreach($res as $item) { //foreach element in $arr
            echo "
            <tr>
              <td  colspan='3' class='mdl-data-table__cell--non-numeric'>".$item['ROOM']."</td>
              <td  colspan='3' class='mdl-data-table__cell--non-numeric'>".$item['CAPACITY']."</td>
              <td colspan='6' class='mdl-data-table__cell--non-numeric'>".$item['DATE']."</td>
              <td colspan='6' class='mdl-data-table__cell--numeric'>".$item['TIME']."</td>
            </tr>
            ";//etc
        } ?>
        </tbody>
     </table>
     <!-- End Available Rooms Table -->
        </section>
        
<!-- End My Bookings -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/footable.js" type="text/javascript"></script>
<script src="../js/footable.sort.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function () {
		$('.footable').footable({
            breakpoints: {
            mamaBear: 1200,
            babyBear: 600
            }
        });
	});
</script>
