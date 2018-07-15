<!DOCTYPE html>
<html>
<head>
<title>SDD306 - Final Project</title>
<?php include 'core.inc.php'; ?>
<?php include("handles/db_connect.php"); ?>
<?php include("handles/login.php"); ?>
<?php include("class_lib.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 

//if id is not set, display login form, else, dispaly the number generator
if (!isset($_SESSION['id']) && empty($_SESSION['id']) && empty($_SESSION['username'])) {
	include("login_form.php"); 
} else {
	//INCLUDE THE NUMBER GEN HERE!!!!
	include 'number_generator.php';
}


?>


<footer></footer>

<?php mysqli_close($conn); ?>

</body>
</hmtl>