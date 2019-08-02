<?php
    require_once('mysqli_connection.php');
	session_start();

	$idNo = $_POST['txtidNo'];
	$password = $_POST['txtpassword'];

    $qry = "SELECT * FROM tbl_rc WHERE idNo='$idNo' and password='$password';";
    $result = mysqli_query($conn,$qry);
 
    if($result){
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION['idNo'] = $row['idNo'];
            $_SESSION['password'] = $row['password'];
            header('location:homepage.php');
        }else{
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');";
            echo "window.location.href = 'login.php';</script>";
        }
    }
    else{
        die(mysqli_error($conn));
    }
?>