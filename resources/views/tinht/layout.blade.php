<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('tinht.includes.head')
</head>

<body>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        @include('tinht.includes.header')
        @include('tinht.includes.float-button')
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

    <!-- jQuery JS -->
    {{-- <script src="{{ URL::asset('tinht/js/vendor/jquery-1.12.0.min.js') }}"></script> --}}
    <!-- Popper JS -->
    <script src="{{ URL::asset('tinht/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    {{-- <script src="{{ URL::asset('tinht/js/bootstrap.min.js') }}"></script> --}}
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

    {{-- <script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script> --}}
    <!-- Main JS -->
    <script src="{{ URL::asset('tinht/js/main.js') }}"></script>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>


</body>

</html>