<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

<style>
    /* Custom CSS for this page */
    .about-container {
        text-align: center;
        padding: 20px;
    }

    .about-text {
        text-align: center;
        font-size: 18px;
    }

    .whatsapp-btn {
        text-decoration: none;
    }

    .whatsapp-btn button {
        padding: 10px 20px;
        background-color: #25d366;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .about-image {
        max-width: 100%;
        height: auto;
        margin-top: 20px;
    }
</style>

<br><br>

<div class="container about-container">
    <h1 class="text-center">ABOUT US</h1><br>
    <div class="about-text">
        <p>
            Welcome to our travel blog! We are a passionate group of travelers who love to explore the world's wonders and share our adventures with you. Our journey began with a shared love for discovering new places, trying new cuisines, and immersing ourselves in diverse cultures.
        </p>
        <p>
            Our mission is to inspire and empower fellow adventurers like you to embark on unforgettable journeys. Through our blog, we aim to provide valuable travel tips, destination recommendations, and captivating stories from our own experiences. Whether you're a solo traveler, a couple seeking romantic getaways, or a family looking for exciting vacations, we have something for everyone.
        </p>
        <p>
            We believe that travel is not just about visiting new locations; it's about creating lasting memories and forging connections with people and places. Join us on this incredible expedition as we explore the beauty of our planet, one destination at a time.
        </p>
    </div>
    <div class="mt-4">
        <a href="https://api.whatsapp.com/send?phone=+94760840008&text=Hi, For more details 'Continue to Chat' &source=&data=" class="whatsapp-btn">
            <button>WhatsApp Me</button>
        </a>
    </div>
    <img src="../img/T1.jpg" alt="9 arch bridge" class="about-image">
</div>

<br><br>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
