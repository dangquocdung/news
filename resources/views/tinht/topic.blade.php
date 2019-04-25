@extends('tinht.layout')

@section('meta')

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $Topic->title_vi }}" />
    <meta property="og:description" content="{{ $Topic->title_vi }}" />
    <meta property="og:image" itemprop="image" content="{{ URL::asset('/uploads/topics/'.$Topic->photo_file) }}" />

@stop

@section('css')

    @if(count($Topic->photos)>0)

        <link href="/tinht/css/main.css" rel="stylesheet">
        <link href="/tinht/css/justifiedGallery.min.css" rel="stylesheet">
        <link href="/tinht/css/lightgallery.css" rel="stylesheet">

    @endif
    
@endsection

@section('content')

    @php

        $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    
    @endphp

    <!-- Blog Section Start -->
    <div class="col-md-12 section mb-10">
        <div class="row">  
                
            <div class="col-md-9">

                
            
                @include('tinht.topic.topic')
            
                
                                
            </div>
            
           <!-- Sidebar Start -->
           <div class="col-md-3">

                @include('tinht.includes.thongbao')
                @include('tinht.includes.lienket')
                
            </div><!-- Sidebar End -->
            
        </div><!-- Feature Post Row End -->
    </div>
            
@stop

@section('js')

    @if(count($Topic->photos)>0)
    
        <script src="/tinht/js/prettify.js"></script>
        <script src="/tinht/js/jquery.justifiedGallery.min.js"></script>
        <script src="/tinht/jstransition.js"></script>
        <script src="/tinht/js/collapse.js"></script>
        <script src="/tinht/js/lightgallery.js"></script>
        <script src="/tinht/js/lg-fullscreen.js"></script>
        <script src="/tinht/js/lg-thumbnail.js"></script>
        <script src="/tinht/js/lg-video.js"></script>
        <script src="/tinht/js/lg-autoplay.js"></script>
        <script src="/tinht/js/lg-zoom.js"></script>
        <script src="/tinht/js/jquery.mousewheel.min.js"></script>
        <script src="/tinht/js/demos.js"></script>

    @endif

    <script src="//code.responsivevoice.org/responsivevoice.js?key=fJp93z4l"></script>


    <script>

        $("#btnVoice").click(function () {
            var text = $(".sapo").text();
            responsiveVoice.speak(text, "Vietnamese Male");

        });
        $("#btnVoicePause").click(function () {
            //var text = $(".news_list_detail").text();
            //responsiveVoice.speak(text, "Vietnamese Male");
            responsiveVoice.pause();

        });
        $("#btnVoiceResume").click(function () {
            //var text = $(".news_list_detail").text();
            //responsiveVoice.speak(text, "Vietnamese Male");
            responsiveVoice.resume();

        });

    </script>
    
@endsection