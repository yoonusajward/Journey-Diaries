<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';

// Check if 'id' parameter is set and valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $articleId = $_GET['id'];

    // Fetch the article based on the provided ID
    $sql = "SELECT * FROM `blog_data` WHERE `id`=$articleId";
    $article = mysqli_query($con, $sql);

    // Check if the article exists
    if ($article && mysqli_num_rows($article) > 0) {
        $article = mysqli_fetch_assoc($article);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $article['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center"><?php echo $article['title']; ?></h2>
        <div class="mt-4">
            <p class="text-justify"><?php echo substr(urldecode($article['content']), 0, 200); ?></p>
        </div>
    </div>
<?php
    } else {
        // Article not found
        echo '<div class="container mt-4"><p class="text-center">Article not found.</p></div>';
    }
} else {
    // 'id' parameter not provided or invalid
    echo '<div class="container mt-4"><p class="text-center">Invalid request.</p></div>';
}
?>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 fixed-bottom">
        <p>&copy; <?php echo date("Y"); ?> Journey Diaries</p>
    </footer>
    <!-- Footer -->
    <!-- JavaScript and other script includes can go here -->
</body>
</html>
