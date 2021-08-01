<?php
    $user = 'root';
    $pass ='123456';
    $host = 'localhost';
    $db = 'nozuonodie';

    $conn = new mysqli($host, $user, $pass, $db);

  if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>