<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Plans</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <style>
        /* Center-align the content */
        body {
            background-image: url('background.jpg'); /* Add your background image URL */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Style the form container */
        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent white background */
        }

        /* Style the form elements */
        .form-group {
            width: 100%;
        }

        .btn-primary {
            margin-right: 10px;
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
                    <input type="text" name="prompt" class="form-control" placeholder="e.g.: A travel plan for Sri Lanka" />
                </div>
                <br><br>
                <div>
                    <input type="submit" class="btn btn-primary active ml-0" value="Generate"/>
                    <a href="/pages/index.php" class="btn btn-danger ml-0">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
