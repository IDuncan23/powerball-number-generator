<?php

//set values from form into variables for easier use and perform SQL Injection protection methods
$username = $_POST['username'];
$username = stripslashes($username);
$username = mysqli_real_escape_string($conn, $username);
$password = $_POST['password'];
$password = md5($password);
$password = stripslashes($password);
$password = mysqli_real_escape_string($conn, $password);

//select data from where the user's name matches the username in the database
$sql = 
"SELECT id, username, password, 
set1wb1, set1wb2, set1wb3, set1wb4, set1wb5, set1pb,
set2wb1, set2wb2, set2wb3, set2wb4, set2wb5, set2pb,
set3wb1, set3wb2, set3wb3, set3wb4, set3wb5, set3pb,
set4wb1, set4wb2, set4wb3, set4wb4, set4wb5, set4pb,
set5wb1, set5wb2, set5wb3, set5wb4, set5wb5, set5pb
FROM users 
WHERE username='$username' AND password='$password'";

$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);

//if username and password fields are entered, run code
if (isset($_POST['username']) && isset($_POST['password'])) {
	//if query is true, run code
	if ($query) {
		//if 1 row returns, establish SESSION variables equal to the logged in user's data
		if ($rows == 1) {

			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['set1wb1'] = $row['set1wb1'];
			$_SESSION['set1wb2'] = $row['set1wb2'];
			$_SESSION['set1wb3'] = $row['set1wb3'];
			$_SESSION['set1wb4'] = $row['set1wb4'];
			$_SESSION['set1wb5'] = $row['set1wb5'];
			$_SESSION['set1pb'] = $row['set1pb'];
			$_SESSION['set2wb1'] = $row['set2wb1'];
			$_SESSION['set2wb2'] = $row['set2wb2'];
			$_SESSION['set2wb3'] = $row['set2wb3'];
			$_SESSION['set2wb4'] = $row['set2wb4'];
			$_SESSION['set2wb5'] = $row['set2wb5'];
			$_SESSION['set2pb'] = $row['set2pb'];
			$_SESSION['set3wb1'] = $row['set3wb1'];
			$_SESSION['set3wb2'] = $row['set3wb2'];
			$_SESSION['set3wb3'] = $row['set3wb3'];
			$_SESSION['set3wb4'] = $row['set3wb4'];
			$_SESSION['set3wb5'] = $row['set3wb5'];
			$_SESSION['set3pb'] = $row['set3pb'];	
			$_SESSION['set4wb1'] = $row['set4wb1'];
			$_SESSION['set4wb2'] = $row['set4wb2'];
			$_SESSION['set4wb3'] = $row['set4wb3'];
			$_SESSION['set4wb4'] = $row['set4wb4'];
			$_SESSION['set4wb5'] = $row['set4wb5'];
			$_SESSION['set4pb'] = $row['set4pb'];
			$_SESSION['set5wb1'] = $row['set5wb1'];
			$_SESSION['set5wb2'] = $row['set5wb2'];
			$_SESSION['set5wb3'] = $row['set5wb3'];
			$_SESSION['set5wb4'] = $row['set5wb4'];
			$_SESSION['set5wb5'] = $row['set5wb5'];
			$_SESSION['set5pb'] = $row['set5pb'];							

			//if row results are less than one, no data matached and user should try again or register
		} elseif ($rows < 1) {

			echo "No user with those credentials was found in the database.";

		} else {

			echo "Error: Uh oh! Something went wrong!";

		}

	} else {

		echo "Error: the query passed was invalid.";

	}

}

?>