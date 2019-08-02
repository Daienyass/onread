<?php
    require_once('mysqli_connection.php');
    if(isset($_POST['btn'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $IDno = $_POST['IDno'];
        $term = $_POST['term'];
        $schoolyear = $_POST['schoolyear'];
        $grades = $_POST['grades'];
        $yes = $_POST['yes'];
        $no = $_POST['no'];
        $one = $_POST['one']; 
        $two = $_POST['two'];
        $reason = $_POST['reason'];
        $promise = $_POST['promise'];
        
        $sql = "INSERT INTO tbl_form
            SET firstname = '$firstname',
            lastname = '$lastname',
            IDno = '$IDno',
            term = '$term',
            schoolyear = '$schoolyear',
            grades = '$grades',
            yes = '$yes',
            no = '$no',
            one = '$one',
            two = '$two',
            reason = '$reason',
            promise = '$promise';";
        
        $result = mysqli_query($conn, $sql);
        
        if($result){
			if(mysqli_affected_rows($conn)>0){
				header('location:form_data.php');
			}else{
				echo 'Not Added.';
			}
		}else{
			die(mysqli_error($conn));
		}
	}else{
		die(mysqli_error($conn));
	}
?>