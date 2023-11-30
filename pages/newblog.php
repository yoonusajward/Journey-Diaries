<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';

if (isset($_POST['submit'])) {
    $blog_title = $_POST['blog-title'];
    $blog_article = $_POST['blog-article'];
    $sql = "INSERT INTO `articles` (title, body) VALUES ('$blog_title', '$blog_article')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<div class="alert alert-success my-1 alert-dismissible fade show" role="alert">
                Successfully added your blog article.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } else {
        die(mysqli_error($con));
    }
}
?>

<br>

<form method="post">
    <div class="mb-3">
        <label for="blog-title" class="form-label">Blog Title</label>
        <input type="text" class="form-control" id="blog-title" name="blog-title" autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="blog-article" class="form-label">Blog Article</label>
        <textarea class="form-control" id="blog-article" rows="3" name="blog-article" autocomplete="off" required></textarea>
    </div>
    <div>
        <button class="btn btn-primary" type="submit" name="submit">Submit Article</button>
    </div>
</form>

<br>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
?>
