<?php
    if(isset($_POST["email_s"])){
        $email = $_POST["email_s"];
        $password = $_POST["password_s"];

        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }
        /*
        else {
            echo "connedted <br>";
        }
        */
        $sql = "SELECT `email`, `password` FROM `account`";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                if ($email == $row['email']) {
                    if ($password == $row['password']) {
                        echo '<script>alert("True")</script>';
                        break;
                    }
                    else {
                        echo '<script>alert("wrong password")</script>';
                        break;
                    }
                }
                /*
                else {   //if email is new
                    echo "this is a new email <br>";
                }
                */
            }
        } 
        /*
        else {
            echo "0 results";
        }
        */
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
                    <li><a href="products.html">Products</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="sign_in.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div style="float: left; padding-left: 45%; padding-top: 2%;">
        <h1 class="login_title">Sign in</h1>
        <form class="login_form" method="POST">
            <label for="user_name">Email</label>
            <br>
            <input name="email_s" type="email" style="margin-top: 5%; margin-bottom: 8%; padding: 5%; width: 180px; font-style: italic;" placeholder="Email" required>
            <br>
            <label for="password">Password</label>
            <br>
            <input name="password_s" type="password" style="margin-top: 5%; margin-bottom: 8%; padding: 5%; width: 180px; font-style: italic;" placeholder="Password" required>
            <br>
            <input type="submit" style="margin-top: 5%; margin-bottom: 8%; padding: 5%;" value="Sign in">
            <a href="register.php">Registe Today!</a>
        </form> 
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>


