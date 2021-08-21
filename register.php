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

                            
            if ($conn->query($sql) == TRUE) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("refresh:1; url=home.html");
                exit();
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
    <title>Register</title>

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
                    
                    <li><a href="products.php">Products</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="sign_in.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div style="float: left; padding-left: 40%; padding-top: 2%;">
        <h1>Register</h1>
        <form method="POST">
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

    <br style="clear: both;"><br style="clear: both;"><br style="clear: both;">

    <footer class="container_footer">
        <div class="footer_logo">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo">
        </div>
        <h2 class="footer_comp_name">NTST-Tech Development Ltd.</h2>
        <div class="contact_us">
            <a style="color: #e9e9e9; text-decoration: none; font-size: x-large; font-weight: bold;" href="contact.html"><li>CONTACT US</li></a>
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



