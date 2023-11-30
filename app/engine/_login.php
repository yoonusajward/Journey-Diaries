<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
?>

<?php

$email = $_POST['email'];
$pass1 = $_POST['pass1']; 

$qry = "SELECT * from user WHERE `email` = '$email' and `password` = '$pass1'";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($conn, $qry);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    session_unset();
    // session_destroy();
    session_start();
    echo "<br>User found and logged in<br>";
    echo "<br> <a href = '/' class='btn btn-primary'>Go Home</a>";
  }
} else {
  echo "Invalid username/password, Please try again!";
}

mysqli_close($conn);



?>