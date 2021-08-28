<?php
    session_start();

    $t = $_POST['t'];

    $conn = mysqli_connect("localhost", "root", "123456", "nozuonodie");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT `name`, `price`, `image_url`, `image_url2`, `image_url3`, `image_url4`, `image_url5`, `image_url6`, `image_url7` FROM `products`";

    $result = $conn->query($sql);

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $go = FALSE;
        $e = $_SESSION['email'];

        while ($row = $result->fetch_assoc()) {
            if ($t == $row['name']) {
                $p = $row['price'];
                $go = True;
            }
        }

        if ($go == TRUE) {

        $sql2 = "INSERT INTO `cart`(`email`, `product`, `price`) VALUES ('$e','$t','$p')";
        $conn->query($sql2);

        echo '<script>alert("Product added")</script>';
        header("refresh:0.1; url=products.php");
        }
    }
    $conn->close();
?>