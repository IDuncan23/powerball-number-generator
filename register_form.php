<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/

session_start();

include("handles/db_connect.php");

//if session id is not set and empty run code
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {

	//if both registration fields are filled, run code
	if(isset($_POST['username']) && isset($_POST['password'])) {

		//set POST values to variables and run through security
		$username = $_POST['username'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($conn, $username);
		$password = $_POST['password'];
		$password = md5($password);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($conn, $password);

		//use query to check if there is a user already named the same as the user entered
		$sql_check = "SELECT * FROM users WHERE username='$username'";
		$query_check = mysqli_query($conn, $sql_check);
		echo mysqli_error($conn);
		$rows_check = mysqli_num_rows($query_check);

		//if results resturn any rows, that user already exists and guest has to choose new username
		if ($rows_check > 0) {

			echo "<li>Uh oh, there is already an account with that username. 
			Please choose a different name.";

			//if query is true and no results are returned, enter new row of data into the database
		} elseif ($query_check && $rows_check == 0) {

			$sql_reg = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

			if ($query_reg = mysqli_query($conn, $sql_reg)){

				header("Refresh: 3; url=index.php"); /* Redirect browser */
				echo "<li>Register success! Redirecting to login page...";

			} else {

				echo "<li>Sorry, we couldn't register you at this time. Please try again later.";
				echo mysqli_error($conn);
			}

			//if query fails, echo SQL error
		} else {

			echo mysqli_error($conn);

		}

	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>SDD306 - Final Project - Register</title>
<?php include("handles/db_connect.php"); ?>
<?php include("class_lib.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>

		Please enter a username and password followed by clicking the submit button to sign up for use of the Poweball Number Generator.

	</header>	

<section class="pbgContainer">

	<div class="powerballGen">

		<span id="numGenTitle">Power Ball</span><br>
		<span id="numGenTitleSub">Number Generator</span><br><br>

		<form action="register_form.php" method="POST">
			
			<div class="numberSets">

				Username: <input type="text" name="username" value="" required/> 
				Password: <input type="password" name="password" value="" required/><br />

			</div>

			<input type="submit" name="register" value="Register"/> 

		</form>

		<div id="numGenPrint"><h5>Already have an account? <a href='index.php'>Login here!</a></h5></div>		

	</div>

</section>	



<?php mysqli_close($conn); ?>

</body>
</hmtl>	