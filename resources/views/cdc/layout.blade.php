<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('cdc.includes.head')
    @yield('css')
</head>

<body>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        @include('cdc.includes.header')
        @include('cdc.includes.menu')

        <div class="container nen-trang">
            
            <div class="post-section section mt-10 box-mobile">
                <div class="marbox">
                    <marquee direction="left" scrollamount="2" scrolldelay="60" onmouseover="this.stop()" onmouseout="this.start()">
                            Chào mừng quý vị đã đến với Cổng thông tin điện tử Trung tâm Kiểm soát bệnh tật Hà Tĩnh
                    </marquee>
                    
                </div>
            </div>

            @yield('content')

        </div>
        
        @include('cdc.includes.footer')
        
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
    {{-- <script src="{{ URL::asset('cdc/js/vendor/jquery-1.12.0.min.js') }}"></script> --}}
    <!-- Popper JS -->
    <script src="{{ URL::asset('cdc/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('cdc/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ URL::asset('cdc/js/plugins.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('cdc/js/rypp.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('cdc/js/ytp-playlist.js') }}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{ URL::asset('cdc/js/ajax-mail.js') }}"></script>
    <!-- Datatables JS -->
    <script src="{{ URL::asset('cdc/js/vendor/datatables.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('cdc/js/main.js') }}"></script>
    
    

</body>

</html>