<?php

    if(isset($_POST["email"])){
        $go = TRUE;
        $email = $_POST["email"];
        $password = $_POST["password"];
        

        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }
        /*
        else {
            echo "connedted <br>";
        }
        */

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
        /*
        else {
            echo "0 results";
        }
        */

        if ($go == TRUE) {
            $sql = "INSERT INTO `account`(`email`, `password`) VALUES ('$email', '$password')";

                            
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("New record created successfully")</script>';
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else {
            echo '<script>alert("email used")</script>';
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Index</title>

    <style>
        input {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        background-color: #04AA6D;
        color: white;
        }
    </style>

</head>
<body>
    
    <header>
        <div class="container_header">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo" class="logo">
        
            <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="sign_in.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div style="float: left; padding-left: 40%; padding-top: 2%;">
        <h1 class="login_title2">Register</h1>
        <form class="login_form2" method="POST">
            <label for="email">Email</label>
            <br>
            <input name="email" type="email" style="margin-top: 3%; margin-bottom: 5%; padding: 3%; width: 180px; font-style: italic;" placeholder="Email" required>
            <br>
            <label for="password_confirm">Password</label>
            <br>
            <input type="password" style="margin-top: 3%; margin-bottom: 5%; padding: 3%; width: 180px; font-style: italic;" minlength="6" placeholder="Password" id="password" required>
            <input name="password" type="password" style="margin-top: 3%; margin-bottom: 5%; padding: 3%; width: 180px; font-style: italic;" minlength="6" placeholder="Type password again" id="confirm_password" required>
            <br>
            
            <input type="submit" style="margin-top: 3%; margin-bottom: 5%; padding: 3%;" value="Register" onclick="return Validate()">

            <script src="js/script.js"></script>
        </form> 
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>



