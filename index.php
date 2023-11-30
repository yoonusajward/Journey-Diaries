<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <h1>JOURNEY DIARIES</h1>
    <br>
    <form action="/login/login.php" method="post">
        <h2>LOGIN FORM</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="uname">User Name</label>
        <input type="text" id="uname" name="uname" placeholder="User Name"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="/login/signup.php" class="ca">Create an account</a>
    </form>

    <br><br><br>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    ?>

</body>

</html>
