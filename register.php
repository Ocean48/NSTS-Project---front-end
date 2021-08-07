<?php

    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
            
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    else {
        echo "connedted <br>";
    }
    $sql = "INSERT INTO `account`(`email`, `password`) VALUES ('$email', '$password')";

                    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
