<div id="thoi-tiet">

    <div class="container">
        <header class="header">
            <div class="search">
            <input type="text" placeholder="Enter City Name" id="search-txt" value="Ha Tinh">
            <a id="search-btn" href="#"><i class="fas fa-search"></i></a>
            </div>
        </header>
        
        <main id="main">
            
            <div class="city-icon">
            <div class="city-icon-holder">
            <div id="city-name"></div>
            <img src="" alt="" id="icon">
                </div>
            </div>
            
            <div class="temperature">
            <div id="temp"></div>
            </div>
            
            <div class="humidity">
            <div id="humidity-div"></div>
            </div>
            
        </main>
    </div>

</div>

<script>
        const appKey = "f24f40b1c24505685fce3b8acd0fcffc";

        let searchButton = document.getElementById("search-btn");
        let searchInput = document.getElementById("search-txt");
        let cityName = document.getElementById("city-name");
        let icon = document.getElementById("icon");
        let temperature = document.getElementById("temp");
        let humidity = document.getElementById("humidity-div");

        searchButton.addEventListener("click", findWeatherDetails);
        searchInput.addEventListener("keyup", enterPressed);

        function enterPressed(event) {
            if (event.key === "Enter") {
                findWeatherDetails();
            }
        }

        function findWeatherDetails() {
            if (searchInput.value === "") {
            
            }else {
                let searchLink = "https://api.openweathermap.org/data/2.5/weather?q=" + searchInput.value + "&appid="+appKey;
                httpRequestAsync(searchLink, theResponse);
            }
        }

        function theResponse(response) {
            let jsonObject = JSON.parse(response);
            cityName.innerHTML = jsonObject.name;
            icon.src = "http://openweathermap.org/img/w/" + jsonObject.weather[0].icon + ".png";
            temperature.innerHTML = parseInt(jsonObject.main.temp - 273) + "°";
            humidity.innerHTML = jsonObject.main.humidity + "%";
        }

        function httpRequestAsync(url, callback)
        {
            console.log("hello");
            var httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = () => { 
                if (httpRequest.readyState == 4 && httpRequest.status == 200)
                    callback(httpRequest.responseText);
            }
            httpRequest.open("GET", url, true); // true for asynchronous 
            httpRequest.send();
        }

        $(document).ready(function() { 

            findWeatherDetails();

         });

    </script>

       