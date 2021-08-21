<?php
    if(isset($_POST["email_s"])){
        $go = TRUE;
        $email = $_POST["email_s"];
        $password = $_POST["password_s"];
        

        $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }
        $sql = "SELECT `email`, `password` FROM `account`";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($email == $row['email']) {
                    
                }
            }
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
    <title>Account</title>

    <style>
        .table1 {
            width: 60%;
            margin-left: 9%;
            margin-top: 5%;
        }

        .table1, th, td {
            height: 50px;
            border: 1px solid grey;
            border-collapse: collapse;
            font-size: larger;
        }

        .table2 {
            clear: both;
            width: 90%;
            margin-left: 5%;
        }

        .table2, th, td {
            height: 50px;
            border: 1px solid grey;
            border-collapse: collapse;
            font-size: larger;
        }

        input {
            width: 50%; 
            margin-left: 25%; 
            border: none; 
            background-color: #d9f9f9; 
            height: 40px; 
            font-size: 20px;
        }

        input:hover {
            background-color: #aaffff; 
        }

        .out {
            margin-top: 3%;
            margin-right: 5%;
            float: right;
            width: 10%; 
            border: none; 
            background-color: #d9f9f9; 
            height: 50px; 
            font-size: 28px;
        }

        .checkout {
            margin-top: 3%;
            margin-left: 46%;
            width: 10%; 
            border: none; 
            background-color: #ffbb29; 
            height: 60px; 
            font-size: 30px;
            
        }

        .checkout:hover {
            background-color: #ff9d1c; 
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

    <h1 style="color: #af0000; padding-left: 5%; font-size: 40px;">Account</h1>

    <table class="table1">
        <tr>
            <td style="padding-left: 1%;">Email:
                <?php
                    session_start();
                    $e = $_SESSION['email'];
                    echo $e;
                ?>
            </td>
            <td>
            <?php
                echo '<form action = "edit_account.php" method="POST">
                    <input type="hidden" name="e" value="'.$e.'">
                    <input type="submit" value="Edit Info">
                </form>';
            ?>
            </td>
        </tr>
        <?php
        echo '<form action = "sign_out.php">
            <input class="out" type="submit" value="Sign out">
        </form>';
        ?>
    </table>



    <br><br><br>

    <table class="table2">
        <tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");
                        
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
            
                }
                $sql = "SELECT `email`, `product`, `price` FROM `cart`";
            
                $result = $conn->query($sql);
                
                $go = FALSE;
                
                echo '<tr>
                <td width: 40% style="padding-left: 1%;">Product</td>
                <td width: 40% style="padding-left: 1%;">Price</td>
                <td width: 20%> </td>
                </tr>';

                while ($row = $result->fetch_assoc()) {
                    if ($e == $row['email']) {
                        echo '<tr><td style="padding-left: 1%; font-size: large;">'.$row['product'].'</td>
                        <td style="padding-left: 1%; font-size: large;">$'.$row['price'].'</td>
                        <td><form action = "delete_cart.php" method="POST">
                        <input type = "hidden" name = "e" value = "'.$row['email'] .'">
                        <input type = "hidden" name = "p" value = "'.$row['product'] .'">
                        <input type = "submit" value = "delete">
                        </form></td></tr>';
                        $go = TRUE;
                    }
                }
            ?>
        </tr>
    </table>
    <?php
        if ($go == TRUE){
            echo '<form action = "checkout.php">
                <input class="checkout" type="submit" value="Checkout">
            </form>';
        }
    ?>

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


