<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="\homepage.php">
            <img src="\img\JD Logo.png" alt="Logo" height="40">
            Journey Diaries
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="\homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\pages\index.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="\pages\about.php">About</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" id="logoutLink">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.getElementById("logoutLink").addEventListener("click", function(e) {
        e.preventDefault();
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "/login/logout.php"; // Redirect to the logout script
        }
    });
</script>