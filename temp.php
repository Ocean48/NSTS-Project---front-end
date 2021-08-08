<?php

    $link = mysqli_connect("localhost", "root", "123456", "nozuonodie");

    $result = mysql_query("SELECT `title` FROM `event`", $link);
    $num_rows = mysql_num_rows($result);

    echo "$num_rows Rows\n";

?>

<?php
$con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>