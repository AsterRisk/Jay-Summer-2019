

<?php
	session_start();
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	// Create database
	$sql = "CREATE DATABASE EMPLOYEES";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}



  	function printDate()
    {
      	$day = date("D");
        $date = date("j");
        $month = date("M");
        $year = date("Y");
      	$hour = date("H");
      	$minute = date("i");
  
  		echo $day."  ".  $month." ". $date.", ". $year .", \n". "<h2> $hour : $minute </h2>";
    }
	
?>  

