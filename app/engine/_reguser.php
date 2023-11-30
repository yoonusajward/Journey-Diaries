<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
?>

<?php 

$salt = "I am a Traveller";

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$hash = md5($email.$salt);


$qry = "INSERT INTO `user` (`uid`, `uhash`, `fname`, `lname`, `dob`, `email`, `password`) 
VALUES ('', '$hash', '$firstname', '$lastname', '$dob', '$email', '$pass1')";   

if ($pass1===$pass2){

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
try{
    if (mysqli_query($conn, $qry)) {
            echo "<br>New record created successfully<br>";
        } else {
            echo "<br>Something went wrong. Try again latter<br>";
        }
}
catch(error $e)  {
    echo"Something went wrong. Try again latter";
}
        mysqli_close($conn); 
}
else{
        echo'Passwords do not match!. Try Again';
}
    echo "<br> <a href = '/' class='btn btn-primary'>Go Home</a>"   


?>