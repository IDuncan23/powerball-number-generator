<?php 

/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/

require '../core.inc.php';
require './db_connect.php';
require '../class_lib.php';

//Setting and retrieving numbers for the #1 Powerball lottery set
$numberSetOne = new numbers();
$numberSetOne->set_whiteballs();
$numberSetOne->set_powerball();
$numberSetTwo = new numbers();
$numberSetTwo->set_whiteballs();
$numberSetTwo->set_powerball();
$numberSetThree = new numbers();
$numberSetThree->set_whiteballs();	
$numberSetThree->set_powerball();
$numberSetFour = new numbers();
$numberSetFour->set_whiteballs();
$numberSetFour->set_powerball();
$numberSetFive = new numbers();
$numberSetFive->set_whiteballs();
$numberSetFive->set_powerball();

//this sections sets the numbers created from the methods and puts each into its own variable for easy use
$set1wb1 = $numberSetOne->wbArray[0];
$set1wb2 = $numberSetOne->wbArray[1];
$set1wb3 = $numberSetOne->wbArray[2];
$set1wb4 = $numberSetOne->wbArray[3];
$set1wb5 = $numberSetOne->wbArray[4];
$set1pb = $numberSetOne->powerball[0];

$set2wb1 = $numberSetTwo->wbArray[0];
$set2wb2 = $numberSetTwo->wbArray[1];
$set2wb3 = $numberSetTwo->wbArray[2];
$set2wb4 = $numberSetTwo->wbArray[3];
$set2wb5 = $numberSetTwo->wbArray[4];
$set2pb = $numberSetTwo->powerball[0];

$set3wb1 = $numberSetThree->wbArray[0];
$set3wb2 = $numberSetThree->wbArray[1];
$set3wb3 = $numberSetThree->wbArray[2];
$set3wb4 = $numberSetThree->wbArray[3];
$set3wb5 = $numberSetThree->wbArray[4];
$set3pb = $numberSetThree->powerball[0];

$set4wb1 = $numberSetFour->wbArray[0];
$set4wb2 = $numberSetFour->wbArray[1];
$set4wb3 = $numberSetFour->wbArray[2];
$set4wb4 = $numberSetFour->wbArray[3];
$set4wb5 = $numberSetFour->wbArray[4];
$set4pb = $numberSetFour->powerball[0];

$set5wb1 = $numberSetFive->wbArray[0];
$set5wb2 = $numberSetFive->wbArray[1];
$set5wb3 = $numberSetFive->wbArray[2];
$set5wb4 = $numberSetFive->wbArray[3];
$set5wb5 = $numberSetFive->wbArray[4];
$set5pb = $numberSetFive->powerball[0];

//if the generate button is clicked, run code
if (isset($_POST['generate'])) {

	//insert newly generated numbers into the MySQL database
	$sql = 
	"UPDATE users
	SET set1wb1=$set1wb1, set1wb2=$set1wb2, set1wb3=$set1wb3, set1wb4=$set1wb4, set1wb5=$set1wb5, set1pb=$set1pb,
		set2wb1=$set2wb1, set2wb2=$set2wb2, set2wb3=$set2wb3, set2wb4=$set2wb4, set2wb5=$set2wb5, set2pb=$set2pb,
		set3wb1=$set3wb1, set3wb2=$set3wb2, set3wb3=$set3wb3, set3wb4=$set3wb4, set3wb5=$set3wb5, set3pb=$set3pb,
		set4wb1=$set4wb1, set4wb2=$set4wb2, set4wb3=$set4wb3, set4wb4=$set4wb4, set4wb5=$set4wb5, set4pb=$set4pb,
		set5wb1=$set5wb1, set5wb2=$set5wb2, set5wb3=$set5wb3, set5wb4=$set5wb4, set5wb5=$set5wb5, set5pb=$set5pb
	WHERE id='$_SESSION[id]'";

	//run MySQL query to inset data into database
	$query = mysqli_query($conn, $sql);

	//if query is true, run code
	if ($query) {

		//once code runs, redirect browser to index page.php
		header("Refresh: 3; url=../index.php"); /* Redirect browser */
		$_SESSION['set1wb1'] = $set1wb1;
		$_SESSION['set1wb2'] = $set1wb2;
		$_SESSION['set1wb3'] = $set1wb3;
		$_SESSION['set1wb4'] = $set1wb4;
		$_SESSION['set1wb5'] = $set1wb5;
		$_SESSION['set1pb'] = $set1pb;
		$_SESSION['set2wb1'] = $set2wb1;
		$_SESSION['set2wb2'] = $set2wb2;
		$_SESSION['set2wb3'] = $set2wb3;
		$_SESSION['set2wb4'] = $set2wb4;
		$_SESSION['set2wb5'] = $set2wb5;
		$_SESSION['set2pb'] = $set2pb;
		$_SESSION['set3wb1'] = $set3wb1;
		$_SESSION['set3wb2'] = $set3wb2;
		$_SESSION['set3wb3'] = $set3wb3;
		$_SESSION['set3wb4'] = $set3wb4;
		$_SESSION['set3wb5'] = $set3wb5;
		$_SESSION['set3pb'] = $set3pb;		
		$_SESSION['set4wb1'] = $set4wb1;
		$_SESSION['set4wb2'] = $set4wb2;
		$_SESSION['set4wb3'] = $set4wb3;
		$_SESSION['set4wb4'] = $set4wb4;
		$_SESSION['set4wb5'] = $set4wb5;
		$_SESSION['set4pb'] = $set4pb;
		$_SESSION['set5wb1'] = $set5wb1;
		$_SESSION['set5wb2'] = $set5wb2;
		$_SESSION['set5wb3'] = $set5wb3;
		$_SESSION['set5wb4'] = $set5wb4;
		$_SESSION['set5wb5'] = $set5wb5;
		$_SESSION['set5pb'] = $set5pb;				

		//if query is false, display error
	} else {

		echo "<li>Error: the query passed was invalid.";
		echo mysqli_error($conn);

	}

} else {

	echo "Error: Numbers weren't able to be generated.";

}

?>

<!DOCTYPE html>
<html>
<head>
<title>SDD306 - Final Project - Generating numbers...</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

<header>

Generating numbers. Please wait...

</header>

<?php mysqli_close($conn); ?>

</body>
</hmtl>

