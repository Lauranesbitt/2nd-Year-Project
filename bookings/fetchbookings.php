 <?php  
include_once 'classes/dbconnect.php';
    
    function getBookings(){
        $con = $this->connect();
        $query = "SELECT DESCRIPTION FROM rooms";
        
        $res = mysqli_query($con, $query); //query for result
        
		if(mysqli_num_rows($res) > 0){ // checks if number of rows in query is greater than 0
			//$rows = array();//create a new array object
			
			while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){ //loop on the query and add result to array
				$rows[] = $row;
			}
			return $rows; //return array
		}
		else{
			return false; //else return false
		}
		$this->close();//close connection
    }*/
    } 
    

?>
