<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>event</title>
    
</head>
<body>
    <header>
        <div class="container_header">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo" class="logo">
            
            <nav>
                <ul>
                    <li><a href="../home.html">Home</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../products.html">Products</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="../contact.html">Contact</a></li>
                    <li><a href="sign_in.php">Account</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <button class="event_button" onclick="window.location.href='news.php'">☚<span style="font-size:x-large;"><b>Back</b></span></button>

    <p>Event</p>
    
    <footer class="container_footer">
        <div class="footer_logo">
            <img src="https://i.ibb.co/vq7sysz/logo.png" alt="logo">
        </div>
        <h2 style="padding-top: 1%; padding-left: 1%; font-size: xx-large;">NTST-Tech Development Ltd.</h2>
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


<?php
    $t = $_POST['t'];
    echo $t;

    $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    $sql = "SELECT `title`, `info`, `date` FROM `news`";

    $result = $conn->query($sql);


?>