<?php
    session_start();
	
	$e = $_SESSION['email'];

	$conn = mysqli_connect("localhost", "chen2d_test", "123456", "chen2d_test");
                        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "DELETE FROM `cart` WHERE email = '$e'";

    $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Home</title>
    <script>
        var timeleft = 5;
        var downloadTimer = setInterval(function(){
        if(timeleft < 0){
            <?php
                header("refresh:7; url=home.html");
            ?>
        } else {
            document.getElementById("countdown").innerHTML = "Jump to home page in " + timeleft + " seconds";
        }
        timeleft -= 1;
        }, 1000);
    </script>
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
    
    
    <div style="text-align: center; color: #d11111;" id="countdown"></div>
    <h1 style="text-align: center; color: #d11111; padding: 10%;">Thank You For Choosing Us!<br>Your Order Is On The Way</h1>

    <footer class="container_footer">
        <div class="footer_logo">
            <img src="images/logo.png" alt="logo">
        </div>
        <h2 class="footer_comp_name">NTST-Tech Development Ltd.</h2>
        <div class="contact_us">
            <a style="color: #e9e9e9; text-decoration: none; font-size: x-large; font-weight: bold;" href="contact.html"><li>CONTACT US</li></a>
            <li style="background: url(images/tel.png) no-repeat 0; padding-left: 12%;">(123)456-7890</li>
            <li style="background: url(images/email.png) no-repeat 0; padding-left: 12%;">email@gmail.com</li>
        </div> 
        <div class="follow_us">
            <li style="font-size: x-large; font-weight: bold;">FOLLOW US</li>
            <li style="background: url(images/facebook.png) no-repeat; background-position: -2.5%; padding-left: 16%; margin: 3px 0;"><a class="social_link" href="">Fackbook</a></li>
            <li style="background: url(images/twitter.png) no-repeat; background-position: -1%; padding-left: 16%; margin: 3px 0;"><a class="social_link" href="">Twitter</a></li>
            <li style="background: url(images/instgram.png) no-repeat; background-position: 1%; padding-left: 16%; margin: 3px 0;"><a class="social_link" href="">Instagram</a></li>
        </div>
        
        <p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
    </footer>
</body>
</html>
