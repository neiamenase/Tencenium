<?php
// GET event list 

// comes with a user level u


	//conn1 = mysqli_connect($servername, $username, $password);
	//$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	//echo "<p>servername: $servername | username $username | password: $password | database $database<p>";
	function getEvent(){
		$sql= "SELECT e.name as eventName, date, venue, location, g.name as groupName From event  e 
			    inner join `group` g on e.groupId = g.id
			    order by date DESC";

	    $result = connectDB($sql);
		//return $result;
		$temp = "<div class=\"divTable\"><div class=\"headRow\"> <div class=\"divCell\" align=\"center\">Name</div> <div  class=\"divCell\">Date</div> <div  class=\"divCell\">Location</div><div  class=\"divCell\">Group</div> </div>" ;
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        $temp = $temp . "<div class=\"divRow\"> <div class=\"divCell\">". $row["eventName"] .  "</div> <div class=\"divCell\">". $row["date"]. "</div> <div class=\"divCell\">" . $row["venue"] . "</div> <div class=\"divCell\">" . $row["location"] . "</div> <div class=\"divCell\">" . $row["groupName"]."</div> </div>";
	    }
	    	$temp = $temp . "</div>";
	    	return $temp;
		} else {
	    	echo "0 results";
		}
	}
       

    function connectDB($sql){
    	$servername = "localhost";
		$username = "id4908657_neiamenase";
		$password = "12345678";
		$database = "id4908657_utility";

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