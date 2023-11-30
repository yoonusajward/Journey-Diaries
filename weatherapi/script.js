document.addEventListener("DOMContentLoaded", function() {
    const locationInput = document.getElementById("locationInput");
    const getWeatherButton = document.getElementById("getWeather");
    const weatherInfo = document.getElementById("weatherInfo");

    getWeatherButton.addEventListener("click", function() {
        const location = locationInput.value;

        // Call PHP script to fetch weather data based on the user's input
        fetch(`get_weather.php?location=${encodeURIComponent(location)}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                if (data.cod === "404") {
                    weatherInfo.innerHTML = "Location not found.";
                } else {
                    const temperature = data.main.temp;
                    const description = data.weather[0].description;
                    const city = data.name;

                    weatherInfo.innerHTML = `<p>Temperature in ${city}: ${temperature}°C</p><p>Weather: ${description}</p>`;
                }
            })
            .catch(error => {
                console.error("Error fetching weather data:", error);
                weatherInfo.innerHTML = "An error occurred while fetching weather data.";
            });
    });
});
