<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>News</title>
    <style>
        input {
            height: 35px;
            width: 100%;
            border: none;
            box-sizing: border-box;
            font-size: 20px;
            text-align: left;
            padding-left: 1%;
        }

        input[type=submit] {
            background-color: #d0fcfc;
            color: #180101;
        }

        input:hover {
            text-decoration: underline;
            color: #0b00e3;
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

    <h1 style="color: #af0000; text-align: center; font-size: 40px;">News</h1>

        <?php

            $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                    
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);

            }
            $sql = "SELECT `title`, `short_info`, `main_description`, `upload_date`, `image_url` FROM `event`";

            $result = $conn->query($sql);

            $count = mysqli_num_rows($result);
            
            while ($row = $result->fetch_assoc()) {
                echo '<form style="background-color: #e0fcfc; margin-left: 5%; margin-right: 5%;" action = "event.php" method="POST">
                <li style=" margin-top: 2%; list-style-type: none;">
                    <input name="t" type="submit" value="'.$row['title'].'">
                        <ul>
                            <li style="list-style-type: none; padding-right: 0.25%;">'.substr($row['short_info'],0, 250).'</li>
                                <ul>
                                <li style="list-style-type: none; padding-top: 0.25%; padding-bottom: 1%; padding-left: 80%;"> Uploaded: '.$row['upload_date'].'</li>
                                </ul>
                        </ul>
                </li></form>';
            }
            $conn->close();
        ?>

    <br>
    
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


