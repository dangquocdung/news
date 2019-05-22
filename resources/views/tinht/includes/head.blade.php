<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="author" content="Dang Quoc Dung"/>

<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>

@yield('meta')
<base href="{{asset('')}}">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!-- CSS
============================================ -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/bootstrap.min.css') }}">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/font-awesome.min.css') }}">
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/plugins.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/rypp.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/datatables.min.css') }}">

<!-- normalize.min.css -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/normalize.min.css') }}">


@yield('css')

<!-- Style CSS -->
<link rel="stylesheet" href="{{ mix('tinht/css/style.css') }}">


<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<!-- Modernizer JS -->
<script src="{{ URL::asset('tinht/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- Jssor Slider JS -->
<script src="{{ URL::asset('/tinht/js/vendor/jssor.slider-26.7.0.min.js') }}"></script>


<!-- jQuery JS -->
{{-- <script src="{{ URL::asset('tinht/js/vendor/jquery-3.3.1.js') }}"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138418930-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138418930-1');
</script>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9971639805955307",
    enable_page_level_ads: true
  });
</script>






