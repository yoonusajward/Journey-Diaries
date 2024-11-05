<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <form action="signup-check.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>First Name</label>
        <input type="text" name="fname" placeholder="First Name"><br>

        <label>Last Name</label>
        <input type="text" name="lname" placeholder="Last Name"><br>

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Re Password</label>
        <input type="password" name="re_password" placeholder="Re_Password"><br>

        <button type="submit">Sign Up</button>
        <a href="/index.php" class="ca">Already have an account?</a>
    </form>
</body>

</html>