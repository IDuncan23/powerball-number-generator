<?php 

//set database credentials equal to variables for easy use
$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$dbname = "sdd306Final";

//start database connection with credentials
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//if connection success, echo connected
if ($conn) {
	//echo "<li>Connected to database succesfully!";
//if connection fails, echo an error to connect
} else {
	echo "<li>Error: Failed to connect to database...";
}

?>