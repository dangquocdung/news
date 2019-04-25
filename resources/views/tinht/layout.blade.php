<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('tinht.includes.head')
</head>

<body>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        @include('tinht.includes.header')
        @include('tinht.includes.menu')

        <div class="container nen-trang">
            
            <div class="post-section section mt-10 box-mobile">
                <div class="marbox">
                    <marquee direction="left" scrollamount="2" scrolldelay="60" onmouseover="this.stop()" onmouseout="this.start()">
                            Chào mừng các bạn đến với Phần mềm Dũng Thịnh
                    </marquee>
                    
                </div>
            </div>

            @yield('content')

        </div>
        
        @include('tinht.includes.footer')
        
    </div>

    @yield('js')

    <script>
        var audio;
        var playlist;
        var tracks;
        var current;

        init();
        function init(){
            current = 0;
            audio = $('audio');
            playlist = $('#playlist');
            tracks = playlist.find('li a');
            len = tracks.length - 1;
            audio[0].volume = .10;
            audio[0].play();
            playlist.find('a').click(function(e){
                e.preventDefault();
                link = $(this);
                current = link.parent().index();
                run(link, audio[0]);
            });
            audio[0].addEventListener('ended',function(e){
                current++;
                if(current == len){
                    current = 0;
                    link = playlist.find('a')[0];
                }else{
                    link = playlist.find('a')[current];    
                }
                run($(link),audio[0]);
            });
        }
        function run(link, player){
                player.src = link.attr('href');
                par = link.parent();
                par.addClass('active').siblings().removeClass('active');
                audio[0].load();
                audio[0].play();
        }
    </script>

    <!-- jQuery JS -->
    {{-- <script src="{{ URL::asset('tinht/js/vendor/jquery-1.12.0.min.js') }}"></script> --}}
    <!-- Popper JS -->
    <script src="{{ URL::asset('tinht/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('tinht/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ URL::asset('tinht/js/plugins.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('tinht/js/rypp.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('tinht/js/ytp-playlist.js') }}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{ URL::asset('tinht/js/ajax-mail.js') }}"></script>
    <!-- Datatables JS -->
    <script src="{{ URL::asset('tinht/js/vendor/datatables.min.js') }}"></script>

    <script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('tinht/js/main.js') }}"></script>

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
    </script>


</body>

</html>