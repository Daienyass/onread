<?php
	$conn=mysqli_connect("localhost:3306", "root", "", "db_rc");
		if(mysqli_connect_error($conn)){
			die("Error in connecting to the database");
		}
?>