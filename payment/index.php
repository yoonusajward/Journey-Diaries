<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Journey Diaries Pay Page</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 20px;
        }

        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #545b62;
        }

        .my-4 {
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="my-4 text-center">Payment Gateway</h2>
    <form action="./charge.php" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" name="first_name" class="form-control StripeElement StripeElement--empty" placeholder="First Name">
            <input type="text" name="last_name" class="form-control StripeElement StripeElement--empty" placeholder="Last Name">
            <input type="email" name="email" class="form-control StripeElement StripeElement--empty" placeholder="Email Address">
            <div id="card-element" class="form-control">
                <!-- a Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button class="btn btn-primary">Submit Payment</button>
        <br>
        <a href="/hotel/booking.html" class="btn btn-secondary">Go Back</a>
        <a href="/payment/customers.php" class="btn btn-secondary">Customers and Transactions</a>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>
