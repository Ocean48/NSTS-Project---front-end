<?php
	
	$e = $_POST['e'];
    $p = $_POST['p'];

	$conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "DELETE FROM `cart` WHERE email = '$e' AND product = '$p' LIMIT 1";

    $conn->query($sql);
    header("refresh:0.1; url=account.php"); 
?>