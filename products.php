<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Products</title>
    <style>
        input {
            background: #f8f8f8;
            border: none;
            width: 200px;
            height: 200px;
            background-size: cover;
            background-position: center; 
            cursor: pointer;
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

    <h1 style="color: #af0000; text-align: center; font-size: 40px;">Products</h1>

    <?php
        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }
        $sql = "SELECT `name`, `price`, `image_url`, `image_url2`, `image_url3`, `image_url4`, `image_url5`, `image_url6`, `image_url7` FROM `products`";

        $result = $conn->query($sql);
            
        while ($row = $result->fetch_assoc()) {
            echo '<form style="margin-left: 3%; margin-right: 5%;" action = "product.php" method="POST">   
                <li style="float: left; display: block; margin-left: 15%; margin-top: 2%; list-style-type: none;">
                    <input name="t" type="hidden" value="'.$row['name'].'">    
                    <input style="background-image: url('.$row['image_url'].');" type="submit" value=" ">  
                    <p style="font-size: 20px; text-align: center;">'.$row['name'].'<br>$'.$row['price'].'</p>
                    
                    
                </li></form>';
        }
        $conn->close();
    ?>

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


