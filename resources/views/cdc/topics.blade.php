@extends('cdc.layout')

@section('meta')

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $PageTitle }}" />
    <meta property="og:description" content="{{ $PageDescription }}" />
    <meta property="og:image" itemprop="image" content="{{ URL::asset('/img/logo-footer.png') }}"/>
    
@endsection

@section('content')
    @include('cdc.topics.topics')
 @stop