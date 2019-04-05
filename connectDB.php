<?php
// GET event list 

// comes with a user level u

$servername = "localhost";
$username = "id4908657_neiamenase";
$password = "12345678";
$database = "id4908657_utility";
$event = "event";

try{
	getEvent();

}catch(PDOException $e) {    
	echo "Connection failed: " . $e->getMessage();
}

	//conn1 = mysqli_connect($servername, $username, $password);
	//$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	//echo "<p>servername: $servername | username $username | password: $password | database $database<p>";
	function getEvent(){
		$sql= "SELECT e.name as eventName, date, venue, location, g.name as groupName From event  e 
	    inner join `group` g on e.groupId = g.id
	    order by date DESC";

	    $result = connectDB($sql);
		
		if ($result->num_rows > 0) {
		    echo "<table ><tr><th>Name</th><th>Date</th><th>Venue</th><th>Location</th><th>Group</th></tr>";
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>".$row["eventName"]."</td><td>".$row["status"]."</td><td>".$row["isDrawEvent"]."</td><td>".$row["date"]."</td><td>".$row["year"]."</td><td>".$row["venue"]."</td><td>".$row["location"]."</td><td>".$row["groupName"]."</td></tr>";
	    }
	    	echo "</table>";
		} else {
	    	echo "0 results";
		}
	}

    function connectDB($sql){
    	try {
	    	$conn = new mysqli($servername, $username, $password, $database);
			if ($conn->connect_error) {
		    	die("Connection failed: " . $conn->connect_error);
			} 
		    //echo "Connected successfully <br>"; 
			return $conn->query($sql);

		} catch(PDOException $e) {    
	   		 echo "Connection failed: " . $e->getMessage();
	    }
    }
?>