<?php
	$db_host= "localhost";
	$db_user= "root";
	$db_pass= "";
	$db_base= "melody";
	$db_table = "users";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_base);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>