<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['re_password'])
    && isset($_POST['email'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $email = validate($_POST['email']);

    $user_data = 'uname=' . $uname . '&fname=' . $fname . '&lname=' . $lname . '&email=' . $email;

    // Validate required fields
    if (empty($uname) || empty($pass) || empty($re_pass) || empty($fname) || empty($lname) || empty($email)) {
        header("Location: signup.php?error=All fields are required&$user_data");
        exit();
    }

    if ($pass !== $re_pass) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    }

    // Hash the password
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE user_name='$uname' OR email='$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=The username or email is already taken, try another&$user_data");
        exit();
    } else {
        // Insert the new user into the database
        $sql2 = "INSERT INTO users(user_name, password, fname, lname, email) VALUES('$uname', '$pass', '$fname', '$lname', '$email')";
        $result2 = mysqli_query($conn, $sql2);

        if (!$result2) {
            die("Error inserting data: " . mysqli_error($conn));
        }

        header("Location: signup.php?success=Your account has been created successfully");
        exit();
    }

} else {
    header("Location: signup.php");
    exit();
}
?>