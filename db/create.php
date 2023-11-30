<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

<?php include 'logic.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3 text-center">
    <h1>Create a blog post</h1>
</div>

<div class="container mt-3">
    <form method="POST">
        <div class="form-group">
            <input type="text" placeholder="Title for your blog" class="form-control col-5 mx-auto text-center bg-dark" name="title" autocomplete="off" required>
        </div>
        <div class="form-group">
            <textarea name="content" class="form-control bg-dark" cols="30" rows="15" placeholder="Write your blog here" autocomplete="off" required></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-success" name="new_post">Submit Blog</button>
            <a href="/db/index.php" class="btn btn-danger ml-3">Cancel</a>
        </div>
    </form>
</div>

<br><br>
</body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
