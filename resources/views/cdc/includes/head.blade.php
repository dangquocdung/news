<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="author" content="Dang Quoc Dung"/>
@yield('meta')
<base href="{{asset('')}}">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!-- CSS
============================================ -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ URL::asset('cdc/css/bootstrap.min.css') }}">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ URL::asset('cdc/css/font-awesome.min.css') }}">
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ URL::asset('cdc/css/plugins.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('cdc/css/rypp.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('cdc/css/datatables.min.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ mix('cdc/css/style.css') }}">


<!-- Modernizer JS -->
<script src="{{ URL::asset('cdc/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- Jssor Slider JS -->
<script src="{{ URL::asset('/cdc/js/vendor/jssor.slider-26.7.0.min.js') }}"></script>

<!-- jQuery JS -->
<script src="{{ URL::asset('cdc/js/vendor/jquery-3.3.1.js') }}"></script>



