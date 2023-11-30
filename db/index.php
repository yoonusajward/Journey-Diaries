<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
?>

<?php
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>

        <div class="container mt-5">
            <!-- Display any info -->
            <?php if(isset($_REQUEST['info'])){ ?>
                <?php if($_REQUEST['info'] == "added"){?>
                    <div class="alert alert-success" role="alert">
                        Post has been added successfully
                    </div>
                <?php }?>
            <?php } ?>

            <!-- Create a new Post button -->
            <div class="text-center">
                <div class="d-flex mt-2 justify-content-center align-items-center">
                        <a href="/pages/index.php" class="btn btn-dark">Return</a>
                        <a href="create.php" class="btn btn-dark d-grid gap-2 col-3 mx-auto">Blog Creation</a>
                </div>
            </div>

            <!-- Display posts from database -->
            <div class="row">
                <?php foreach($query as $q){ ?>
                    <div class="col-12 col-xl-4 d-flex justify-content-center">
                        <div class="card mb-2 mt-5" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $q['title'];?></h5>
                                <p class="card-text"><?php echo substr(urldecode($q['content']), 0, 200);?>...</p>
                                <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-secondary">Show More <span class="text-white">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

    </body>
</html>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
?>
