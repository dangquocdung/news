@extends('tinht.layout')

@section('meta')

    <meta name="description" content="{{ $PageDescription }}">

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $PageTitle }}" />
    <meta property="og:description" content="{{ $PageDescription }}" />
    <meta property="og:image" itemprop="image" content="{{ URL::asset('/img/logo-footer.png') }}"/>
    
@endsection

@section('content')
    @include('tinht.topics.topics')
 @stop