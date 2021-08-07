<?php

    $email = $_POST["email_s"];
    $password = $_POST["password_s"];

    $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
            
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    else {
        echo "connedted <br>";
    }
    $sql = "SELECT `email`, `password` FROM `account`";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            if ($email == $row['email']) {
                if ($password == $row['password']) {
                    echo "True <br>";
                    break;
                }
                else {
                    echo "wrong password <br>";
                    break;
                }
            }
            else {   //if email is new
                echo "this is a new email <br>";
            }
        }
    } 
    else {
          echo "0 results";
    }

    echo "end";
    $conn->close();
?>

