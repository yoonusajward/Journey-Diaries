<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<script async src="https://cse.google.com/cse.js?cx=1739d3cf32e47407e">
</script>
<div class="gcse-search"></div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="/path/to/your/css/style.css">

    <!-- Add CSS for animations -->
    <style>
    /* Fade-in animation for the welcome message */
    .welcome-message {
        opacity: 0;
        animation: fadeIn 1s ease-in-out forwards;
    }

    /* Slide-in animation for blog cards */
    .blog-card {
        transform: translateY(100%);
        animation: slideIn 1s ease-in-out forwards;
    }

    /* Add styles for the background container */
    .background-container {
        background-image: url('../img/T1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 500px;
        /* Adjust the height as needed */
        position: relative;
        /* Add this to make child elements position relative to this container */
    }

    /* Add styles for the background image overlay */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        /* Adjust the overlay color and opacity */
        z-index: -1;
        /* Place the overlay behind other content */
    }

    /* Center the welcome message horizontally and vertically */
    .welcome-message {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 60px;
        opacity: 0;
        /* Start with zero opacity */
        animation: fadeIn 2s ease-in-out forwards bounce 1s;
    }

    /* Add scaleIn animation for the welcome message */
    @keyframes scaleIn {
        from {
            transform: scale(0.8);
        }

        to {
            transform: scale(1);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(100%);
        }

        to {
            transform: translateY(0);
        }
    }

    /* Add bounce animation for the welcome message */
    @keyframes bounce {
        to {
            transform: translateY(-10px);
        }
    }
    </style>
</head>

<body>

    <!-- Add the "background-container" class for the background image -->
    <div class="background-container">
        <!-- Add an overlay to create a dark background effect -->
        <div class="overlay"></div>
        <div class="container">
            <!-- Add the "welcome-message" class for the fade-in animation -->
            <h1 class="text-center welcome-message">Welcome to Travel Blog Website</h1>
        </div>
    </div>

    <?php
    $sql = "SELECT * FROM `blog_data` LIMIT 6";
    $result = mysqli_query($con, $sql);
    ?>

    <div class="container mt-5">
        <h1 class="text-center">What's New</h1>
        <div class="row mt-3">
            <?php
            $delay = 0;
            foreach ($result as $article) {
                // Add the "blog-card" class for the slide-in animation with a delay
                echo '<div class="col-sm-4 blog-card" style="animation-delay: ' . $delay . 's;">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">' . $article['title'] . '</h5>
                            <p class="card-text">' . substr(urldecode($article['content']), 0, 200) . '...' . '</p>
                            <a href="/pages/blog.php?id=' . $article['id'] . '" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>';
                $delay += 0.2; // Increase the delay for each card
            };
            ?>
        </div>
    </div>
    <!-- JavaScript to trigger the animations -->
    <script>
    // Trigger the animations when the page is loaded
    window.addEventListener('load', function() {
        const welcomeMessage = document.querySelector('.welcome-message');
        const blogCards = document.querySelectorAll('.blog-card');

        setTimeout(() => {
            welcomeMessage.style.animationPlayState = 'running';
        }, 500);

        blogCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.animationPlayState = 'running';
            }, 1000 + index * 200);
        });
    });
    </script>
</body>

</html>

<?php
} else {
    header("Location: /index.php");
    exit();
}

include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
?>