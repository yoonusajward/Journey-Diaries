<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>
<?php include "logic.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <?php foreach($query as $q) { ?>
        <form method="POST">
            <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title" value="<?php echo $q['title'] ?>">
            <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="20"><?php echo urldecode($q['content']) ?></textarea>
            <button class="btn btn-danger" name="update"><span>Update</span></button>
        </form>
        <br>
        <button class="btn btn-warning ml-0" onclick="confirmCancel()">Cancel</button>
    <?php } ?>    
</div>
<br><br>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

<script>
    function confirmCancel() {
        if (confirm("Are you sure you want to cancel? Any unsaved changes will be lost.")) {
            window.location.href = "/db/index.php"; // Redirect to the index page on confirmation
        }
    }
</script>

</body>
</html>
