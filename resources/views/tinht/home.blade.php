@php
    $link_title_var = "title_" . trans('backLang.boxCode');    
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp

@extends('tinht.layout')

@section('meta')

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $PageTitle }}" />
    <meta property="og:description" content="{{ $PageDescription }}" />
    <meta property="og:image" itemprop="image" content="{{ URL::asset('/img/logo-footer.png') }}"/>
    
@endsection

@section('content')
    
    <!-- Hero Section Start -->
    <div class="col-md-12 section mb-10">
            <div class="row">        
                <!-- Feature Post Row Start -->
            
                @include('tinht.home.hero')
                    
                <div class="clearfix"></div>

                @include('tinht.home.tin-anh')
                
                <div class="clearfix"></div>

                @include('tinht.home.tinbai')

                <div class="clearfix"></div>

                @include('tinht.home.video')

                <div class="clearfix"></div>

                @include('tinht.includes.instagram')
                
                
                    
            </div>
            
    </div>
    
 @stop
