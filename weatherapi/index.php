<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom CSS for Weather App */
        body {
            background-color: #f0f0f0;
        }

        .weather-background {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        .weather-background h1 {
            font-size: 3rem;
        }

        .lead {
            font-size: 1.5rem;
            text-align: center;
        }

        .input-group {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        #locationInput {
            border-radius: 5px 0 0 5px;
        }

        #getWeather {
            border-radius: 0 5px 5px 0;
        }

        #weatherInfo {
            font-size: 1.5rem;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron weather-background">
            <h1 class="display-4">Weather App</h1>
            <br>
            <p class="lead">Enter a location to get the weather forecast</p>
            <div class="input-group mb-3">
                <input type="text" id="locationInput" class="form-control" placeholder="Enter a city">
                <div class="input-group-append">
                    <button id="getWeather" class="btn btn-danger">Get Weather</button>
                </div>
            </div>
            <div id="weatherInfo"></div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
