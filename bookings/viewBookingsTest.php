<?php
  include 'api/DbBookingsTest.php';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  $search_output = "";
  
  $db = new DbBookingsTest();
  
  $result = $db->viewBookings();
  if($result != false){
    $result = json_encode($result);
  }else{
    echo "did not work";
  }

// if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
// 	// run code if condition meets here
// 	$searchquery = preg_replace('#[^a-z 0-9?!]#i', '', $_POST['searchquery']);
// 	if($_POST['filter1'] == "Whole Site"){
// 		$sqlCommand = "(SELECT id, page_title AS title FROM pages WHERE page_title LIKE '%$searchquery%' OR page_body LIKE '%$searchquery%') UNION (SELECT id, blog_title AS title FROM blog WHERE blog_title LIKE '%$searchquery%' OR blog_body LIKE '%$searchquery%')";
// 	} else if($_POST['filter1'] == "Pages"){
// 		$sqlCommand = "SELECT id, page_title AS title FROM pages WHERE page_title LIKE '%$searchquery%' OR page_body LIKE '%$searchquery%'";
// 	} else if($_POST['filter1'] == "Blog"){
// 		$sqlCommand = "SELECT id, blog_title AS title FROM blog WHERE blog_title LIKE '%$searchquery%' OR blog_body LIKE '%$searchquery%'";
// 	}
	
// 	include_once("connect_to_projects.sql");
//         $query = mysql_query($sqlCommand) or die(mysql_error());
// 	$count = mysql_num_rows($query);
// 	if($count > 1){
// 		$search_output .= "<hr />$count results for <strong>$searchquery</strong><hr />$sqlCommand<hr />";
// 		while($row = mysql_fetch_array($query)){
// 	            $id = $row["id"];
// 		    $title = $row["title"];
// 		    $search_output .= "Item ID: $id - $title<br />";
//                 } // close while loop
// 	} else {
// 		$search_output = "<hr />0 results for <strong>$searchquery</strong><hr />$sqlCommand";
// 	}
// }
?>
<!--<h2>Search the Exercise Tables</h2>
<form method="get">
  Search: <input name="searchquery" type="text" size="70" maxlength="88">
  <input name="getBookings" type="submit">
  <br><br>
  Search In:
  <select name="filter">
    <option value="all">All booking</option>
    <option value="floor">Floor</option>
    <option value="name">Name</option>
  </select>
</form>-->


<!--<table>
  <tr></tr>
    <th>Rooms Available:</th>
    <td><?php //echo $result;?></td>
  </tr>
</table>-->
  
 <!-- Heading --> 
<h2>Available Rooms</h2>
To make a booking, select a room or click the button below:</p>
<a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Book a Room</a></p>
<!-- End Heading --> 
  
<!-- My Bookings -->
<div class="mdl-grid panel2">
  <div class="mdl-cell mdl-cell--2-col"></div>
  
  <div class="mdl-cell mdl-cell--8-col mdl-shadow--2dp">
    <section class="login-register">
    	
      
      <!-- Available Rooms Table -->
      	<label>Game</label>
					<select id="room" class="select width-12" name='room'>
						<option>Choose Type</option>
						<option value='Computer'>Computer Room</option>
						<option value='Class'>Classroom</option>
					</select>
      <table class="roomList">
        <tr>
          <th colspan='3'>Room</th>
          <th colspan='3'>Type</th>
          <th colspan='6'>Description</th>
        </tr>
      <?php
      
        $res = json_decode($result, true);
        foreach($res as $item) { //foreach element in $arr
            echo "
                
            <tr>
              <td colspan='3'>".$item['ROOM']."</td>
              <td colspan='3'>".$item['TYPE']."</td>
              <td colspan='6'>".$item['DESCRIPTION']."</td>
            </tr>
            ";//etc
        }
        
        /*while($result = $row->fetch_array()) {
    				echo "
    				    <tr>
    	    		    	<td>".$result["DESCRIPTION"]."</td>
    	    		    	</tr>
    	    	    ";
    	    	}
    			$con->close();*/
        ?>
     </table>
     <!-- End Available Rooms Table -->
          
        </section>
      </div>
      
  <div class="mdl-cell mdl-cell--2-col"></div>
</div>
<!-- End My Bookings -->

<!--  -->
<div>
  <?php echo $search_output; ?>
</div>
<!--  end -->

<!----------------------------------- Testing --------------------------------->
<!-- content section -->
<section id="content">
	<!-- container -->
	<div class="container filtersAndList">
		<row centered>
			
			<?//php
				include 'tournaments/filter.php';
			?>
			
			<!-- tournament list -->
			<column class="bothColumns" cols="9">
				<!--Desktop Version Start-->
				<div class="tournamentContainer xs-hidden">			
					<div class="tournamentsList">
						<div class="oneTournament tournamentListHeader">
										<row>
											<column cols="1"></column>
											<column cols="4"><div class="width-12 giveMinWidth">Room</div></column>
											<column cols="2"><div class="width-12 giveMinWidth">Type</div></column>
											<column cols="1" class="sm-hidden"><div class="width-12 giveMinWidth">Description</div></column>
											<column cols="1"><div class="width-12 giveMinWidth">Players</div></column>
											<column cols="3"><div class="width-12 giveMinWidth">Start date</div></column>											
										</row>						
						</div>			
						<div class="dataFillUp">		
							
						</div>
						</div>	
					<div class="bottomNavigator">
						<row centered>			
							<ul class="pagination" centered>
								<li centered><a href="javascript:firstPage()" id="firstPage" href="#">|&larr;</a></li>
								<li centered><a href="javascript:prevPage()" id="prevPage" href="#">&larr;</a></li>
								<li centered><span id="currentPage"></span> of <span id="totalPages"></span></li>
								<li centered><a href="javascript:nextPage()" id="nextPage" href="#">&rarr;</a></li>
								<li centered><a href="javascript:lastPage()" id="lastPage" href="#">&rarr;|</a></li>
							</ul>
						</row>
					</div>	
				</div>	
				<!--Desktop Version End -->
				
				<!--Mobile Version Start -->
				<div class="sm-hidden-up blockCoverage">
					<div class="mobileDataFillUp">
						
					</div>
					<div class="bottomNavigatorM">	
						<div class="myPagination">							
								<a href="javascript:firstPage()" id="firstPageM" > <div class="colorChange mobilePagination">|&larr;</div></a>
								<a href="javascript:prevPage()" id="prevPageM"><div class="colorChange mobilePagination">&larr;</div></a>
								<div class="mobilePagination1" id="currentPageM"></div>
								<div class="mobilePagination1">of</div>
								<div class="mobilePagination1" id="totalPagesM"></div>
								<a href="javascript:nextPage()" id="nextPageM"><div class="colorChange mobilePagination" centered>&rarr;</div></a>
								<a href="javascript:lastPage()" id="lastPageM"><div class="colorChange mobilePagination" centered>&rarr;|</div></a>
						</div>
					</div>	
				</div>
				<!--Mobile Version End -->
				
			</column> <!-- ./tournaments list end -->
		</row><!-- ./row end -->
	</div>	<!-- ./ container end -->
</section><!-- content end -->
  
  <div class="mdl-cell mdl-cell--2-col"></div>
</div>

<!----------------------------------- Testing --------------------------------->
