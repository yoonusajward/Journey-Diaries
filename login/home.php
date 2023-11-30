<?php 
// Start the session to access session variables
session_start();

// Check if user is logged in
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
} else {
     // If not logged in, redirect to the login page
     header("Location:/index.php");
     exit();
}
 ?>
