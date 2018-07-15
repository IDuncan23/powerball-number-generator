<?php
session_start();
session_destroy();
//once session is destroyed, browser will be redirected to index.php
header("Refresh: 3; url=index.php"); /* Redirect browser */


?>

<!DOCTYPE html>
<html>
<head>
<title>SDD306 - Final Project - Logging out...</title>
<?php include 'core.inc.php'; ?>
<?php include("handles/db_connect.php"); ?>
<?php include("class_lib.php"); ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
<!-- Notice to the user they have sucessefully logged out -->
You have successfully logged out. Redirecting to home page...

</header>

<?php mysqli_close($conn); ?>

</body>
</hmtl>