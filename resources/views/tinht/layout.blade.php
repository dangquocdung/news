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
    <!-- Main JS -->
    <script src="{{ URL::asset('tinht/js/main.js') }}"></script>

    <script src="//code.responsivevoice.org/responsivevoice.js?key=fJp93z4l"></script>
    
    

</body>

</html>