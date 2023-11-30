<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Watch VLOGS From Our Channel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* Custom CSS for this page */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-title {
            font-family: 'Helvetica', sans-serif;
            font-size: 24px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-4 text-center">
        <h1>Watch VLOGS From Our Channel</h1>
    </div>

    <div class="container mt-4">
        <?php
        $API_key    = 'AIzaSyAYv7R1Vaptef0anGn0VqEfmF8NJHY6Nf0';
        $channelID  = 'UCuIc0aI_iXzBfPdo5jBU4fQ';
        $maxResults = 10;
        $videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=$channelID&maxResults=$maxResults&key=$API_key"));

        foreach ($videoList->items as $item) {
            if (isset($item->id->videoId)) { ?>
                <div class="row my-5">
                    <div class="col-md-8 offset-md-2">
                        <div class="video-container">
                            <iframe width="560" height="300" src="https://www.youtube.com/embed/<?php echo $item->id->videoId ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <h2 class="video-title"><?php echo $item->snippet->title ?></h2>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <!-- JavaScript and other script includes can go here -->
</body>
</html>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
?>
