<?php
	$oe = $_POST['old_email'];
	$ne = $_POST['new_email'];
	$np = $_POST['password'];


	$conn = mysqli_connect("localhost", "chen2d_test", "123456", "chen2d_test");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `account` SET "; 
    $sql2 = "UPDATE `cart` SET `email` = '$ne' WHERE email = '$oe'"; 

    if(strlen($ne) > 0){
    	$sql = $sql."`email` = '".$ne."'";
        $conn->query($sql2);
    }

    if(strlen($np) > 0){
    	if(strlen($ne) > 0){
    		$sql = $sql.", ";
    	}
    	$sql = $sql."`password` = '".$np."'";
    }

    $sql = $sql." WHERE email = '".$oe."';";

    if(strlen($ne) > 0 OR strlen($np) > 0){
    	$conn->query($sql);
    }

    session_start();
    $_SESSION['email'] = $ne;
    header('Location: account.php');
?>