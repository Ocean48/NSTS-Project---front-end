<?php
    $go = TRUE;
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
            
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    else {
        echo "connedted <br>";
    }

    $sql = "SELECT `email` FROM `account`";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            if ($email == $row['email']) {
                $go = FALSE;
                break;
            }
            else {   //if email is new
                $go = TRUE;
            }
        }
    } 
    else {
          echo "0 results";
    }

    if ($go == TRUE) {
        $sql = "INSERT INTO `account`(`email`, `password`) VALUES ('$email', '$password')";

                        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
        echo "email used";
    }

    $conn->close();
?>
