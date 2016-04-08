
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
  
  
  Rooms Available:
  <?php
  "<table>"
    $res = json_decode($result, true);
    foreach($res as $item) { //foreach element in $arr
        echo $item['DESCRIPTION']; //etc
  "</table>"
    }
    
    
   /*  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["DESCRIPTION"]. "<br>";
    }
    } else {
    echo "0 results";
    }

    mysqli_close($con);*/
    ?>
  
  <?php
  /* while($result = mysqli_fetch_array($result)) {
                echo "\t<tr><td>".$row['DESCRIPTION']."</td></tr>\n";
            }
            mysqli_close($db);*/
  ?>
  
  
 <?php
   /* $result = getObjectArray();

     if (is_array($result)) {
     foreach($result as $res) {
     echo "Name:" . $res->DESCRPTION;
      }
      } else {
       echo 'no results';
      }*/
    ?>
    
   
<div>
<?php echo $search_output; ?>
</div>