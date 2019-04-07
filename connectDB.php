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

		$resArr = [];
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	$resArr[] = $row;
	    	}
	    	return json_encode($resArr);
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
			if (!$conn->set_charset("utf8")) {
			    printf("Error loading character set utf8: %s\n", $conn->error);
			    exit();
			} 
		    //echo "Connected successfully <br>"; 
			return $conn->query($sql);

		} catch(PDOException $e) {    
	   		 echo "Connection failed: " . $e->getMessage();
	    }
    }
?>