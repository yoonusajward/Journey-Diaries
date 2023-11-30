<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
include "../db/logic.php";

$sql = "SELECT * FROM `blog_data`";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/path/to/your/css/style.css">
    <title>Blog List</title>
</head>
<body>
    <?php include 'navigation.php'; ?>

    <div class="container">
        <h1 class="text-center mt-5">BLOG LIST</h1>
        <div class="row mt-5">
            <?php foreach ($result as $article): ?>
                <div class="col-sm-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $article['title']; ?></h5>
                            <p class="card-text"><?php echo substr(urldecode($article['content']), 0, 200) . '...'; ?></p>
                            <a href="/pages/blog.php?id=<?php echo $article['id']; ?>" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
</body>
</html>
