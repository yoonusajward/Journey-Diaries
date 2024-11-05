<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Plans</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    /* Center-align the content */
    body {
        background-image: url('background.jpg');
        /* Add your background image URL */
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Arial', sans-serif;
        /* Change font for better readability */
        color: #333;
        /* Set a dark color for text */
    }

    /* Style the form container */
    .container {
        text-align: center;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
        background-color: rgba(255, 255, 255, 0.9);
        /* Semi-transparent white background */
        backdrop-filter: blur(10px);
        /* Blur effect for background */
        transition: transform 0.3s ease;
        /* Smooth scale effect */
    }

    .container:hover {
        transform: scale(1.02);
        /* Scale up effect on hover */
    }

    /* Style the form elements */
    .form-group {
        width: 100%;
    }

    .btn-primary {
        margin-right: 10px;
        background-color: #007bff;
        /* Bootstrap primary color */
        border: none;
        /* Remove border */
        transition: background-color 0.3s ease;
        /* Smooth transition */
    }

    .btn-primary:hover {
        background-color: #0056b3;
        /* Darker shade on hover */
    }

    .btn-danger {
        margin-left: 10px;
        transition: background-color 0.3s ease;
        /* Smooth transition */
    }

    .btn-danger:hover {
        background-color: #c82333;
        /* Darker shade on hover */
    }

    /* Add animation for the form */
    .container {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h1 {
        font-size: 2.5rem;
        /* Increase heading size */
        margin-bottom: 20px;
        /* Space below heading */
        font-weight: bold;
        /* Bold heading */
    }

    hr {
        border: 1px solid #007bff;
        /* Blue color for separator */
        width: 50%;
        /* Limit width of hr */
        margin: 0 auto 30px;
        /* Center hr with margin */
    }

    .form-control {
        border-radius: 30px;
        /* Rounded edges for input */
        border: 1px solid #ccc;
        /* Light border */
        transition: border-color 0.3s ease;
        /* Smooth transition */
    }

    .form-control:focus {
        border-color: #007bff;
        /* Blue border on focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        /* Light shadow on focus */
    }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h1>Travel Plans</h1>
            <hr>
        </div>
        <div>
            <form action="ai.php" method="post">
                <div class="form-group">
                    <input type="text" name="prompt" class="form-control"
                        placeholder="e.g.: A travel plan for Sri Lanka" required />
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary active" value="Generate" />
                    <a href="/pages/index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>