<?php 
// Start the session to access session variables
session_start(); 

// Include the database connection
include "db_conn.php";

// Check if username and password are provided via POST request
if (isset($_POST['uname']) && isset($_POST['password'])) {

	// Function to validate and sanitize user input
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	// Validate and sanitize the provided username and password
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	// Check if either username or password is empty
	if (empty($uname)) {
		header("Location: /index.php?error=User Name is required");
	    exit();
	} else if(empty($pass)) {
        header("Location: /index.php?error=Password is required");
	    exit();
	} else {
        // Query to check if the provided credentials match a record in the database
		$sql = "SELECT * FROM users WHERE user_name='$uname'";
		$result = mysqli_query($conn, $sql);
        
		if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

		// Check if a matching record is found
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            // Verify the password
            if (password_verify($pass, $row['password'])) {
            	// Set session variables upon successful login
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: /homepage.php");
		        exit();
            } else {
				header("Location: /index.php?error=Incorrect Username or Password");
		        exit();
			}
		} else {
			header("Location: /index.php?error=Incorrect Username or Password");
	        exit();
		}
	}
} else {
	// Redirect to the login page if no POST data is provided
	header("Location:/index.php");
	exit();
}