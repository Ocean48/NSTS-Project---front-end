<?php

    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("refresh:0.1; url=account.php");
        exit();
    }
    else {
        if(isset($_POST["email_s"])){
            $go = TRUE;
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
                            $_SESSION['loggedin'] = true;
                            $_SESSION['email'] = $email;
                            header("refresh:1; url=home.html");
                            exit();
                        }
                        else {
                            $go = FALSE;
                            break;
                        }
                    }
                    else {   //if email is new
                        $go = False;
                    }
                }
            } 
            /*
            else {
                echo "0 results";
            }
            */
            if ($go == FALSE) {
                echo '<script>alert("wrong email or password")</script>';
            } 

            $conn->close();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Sign in</title>

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

    <div style="float: left; padding-left: 45%; padding-top: 2%;">
        <h1>Sign in</h1>
        <form method="POST">
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
    
    <br style="clear: both;"><br style="clear: both;"><br style="clear: both;">

    <footer class="container_footer">
        <div class="footer_logo">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo">
        </div>
        <h2 class="footer_comp_name">NTST-Tech Development Ltd.</h2>
        <div class="contact_us">
            <li style="font-size: x-large; font-weight: bold;">CONTACT US</li>
            <li style="background: url(https://i.ibb.co/3pm5jWx/tel.png) no-repeat 0; padding-left: 12%;">(123)456-7890</li>
            <li style="background: url(https://i.ibb.co/WHscy1Q/email.png) no-repeat 0; padding-left: 12%;">email@gmail.com</li>
        </div> 
        <div class="follow_us">
            <li style="font-size: x-large; font-weight: bold;">FOLLOW US</li>
            <li style="background: url(https://i.ibb.co/nwDgBmM/facebook.png) no-repeat; background-position: -2.5%; padding-left: 16%; margin: 3px 0;"><a class="social_link" href="">Fackbook</a></li>
            <li style="background: url(https://i.ibb.co/LDwsPN2/twitter.png) no-repeat; background-position: -1%; padding-left: 16%; margin: 3px 0;"><a class="social_link" href="">Twitter</a></li>
            <li style="background: url(https://i.ibb.co/5L5rHhq/instgram.png) no-repeat; background-position: 1%; padding-left: 16%; margin: 3px 0;"><a class="social_link" href="">Instagram</a></li>
        </div>
        
        <p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
    </footer>

</body>
</html>


