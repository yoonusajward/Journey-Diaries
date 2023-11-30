<?php 

require __DIR__.'/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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';

$open_ai = new OpenAi($open_ai_key);

$prompt = $_POST['prompt'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => 'Travel Plans '. $prompt,
    'temperature' => 0.9,
    'max_tokens' => 400,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
]);

$response = json_decode($complete, true);
$response = $response["choices"][0]["text"];

// Capitalize the first letter of the title
$prompt = ucfirst($prompt);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f0f0; /* Background color */
        }

        .container {
            background-color: #fff; /* Content background color */
            border-radius: 5px;
            padding: 20px;
            margin: 50px auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .output-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .output-text {
            white-space: break-spaces;
        }

        /* Animation */
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
    <div class="container mt-2 ml-0">
        <h1 class="output-title"><?= $prompt ?></h1>
        <div class="output-text">
            <?= $response ?>
        </div>
    </div>
</body>