<!--Project3CreateDatabase.php-->
<xml version = "1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Daniel Sepe</title>
	<h3>Assignment 11</h3>
</head>
<body>

<?php

$lnk = mysqli_connect("localhost", "Daniel", "password");
if (!$lnk) {
	die("Not Connected: " . mysqli_connect_error($lnk)) . '<br /';
}

if (mysqli_query($lnk,"CREATE DATABASE Project3Base")) { // inventory and attributes (tables) of new cars
	echo "Database created successfully!" . '<br />';
} else echo "Error: " . mysqli_error($lnk) . '<br />';

mysqli_close($lnk);

?>

<br />

<a href="http://codd.cs.gsu.edu/~dsepe1/">
	Click here to return to dsepe1's homepage.
</a>

</body>
</html>
