
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
<table>
  <tr>
    <th>Rooms Available:</th>
    <td><?php echo $result;?></td>
  </tr>
    
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
              <thead>    
              Only dynamic functions on homepage - no images </p>
              Needs to look similar to this?
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Room No.</th>
                  <th>Description</th>
                  <th>Capacity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="mdl-data-table__cell--numeric">1.11</td>
                  <td>Lorem ipsum dolor sit amet, consectetur.</td>
                  <td>30 persons</td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--numeric">2.1</td>
                  <td>Fusce nec ante eu ipsum interdum egestas</td>
                  <td>30 persons</td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--numeric">1.2</td>
                  <td>Pellentesque purus leo, euismod venenatis</td>
                  <td>30 persons</td>
                </tr>
              </tbody>
            </table>
        </div>
    
</table>

<div>
<?php echo $search_output; ?>
</div>
