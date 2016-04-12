
<?php
include 'api/DbBookings.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
$search_output = "";

$db = new DbBookings();

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
  
  
  <h2>Rooms Available: </h2>
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
  
 
    
   
<div>
<?php echo $search_output; ?>
</div>