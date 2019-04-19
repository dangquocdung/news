@extends('tinht.layout')

@section('meta')

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $Topic->title_vi }}" />
    <meta property="og:description" content="{{ $Topic->title_vi }}" />
    <meta property="og:image" itemprop="image" content="{{ URL::asset('/uploads/topics/'.$Topic->photo_file) }}" />

@stop

@section('css')

    <link href="/tinht/css/main.css" rel="stylesheet">
    <link href="/tinht/css/justifiedGallery.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="/tinht/css/lightgallery.css" rel="stylesheet">
    
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

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --}}
    
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
    <script src="/tinht/js/demo.js"></script>


    
@endsection