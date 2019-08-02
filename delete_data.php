<?php
	require_once('mysqli_connection.php'); 

	if(isset($_GET['userid'])){
		$userid=trim($_GET['userid']);
		$qry = "DELETE FROM tbl_form WHERE id=$userid;";
		$res=mysqli_query($conn,$qry);
		if($res){
			header('location:form_data.php');
		}else{
			die("Unable to fetch data from the database".mysqli_error($conn));
		}
	}else{
		die("Invalid!");
	}
?>