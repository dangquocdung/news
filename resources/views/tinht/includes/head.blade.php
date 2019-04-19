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
<link rel="stylesheet" href="{{ URL::asset('tinht/css/bootstrap.min.css') }}">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/font-awesome.min.css') }}">
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/plugins.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/rypp.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('tinht/css/datatables.min.css') }}">

@yield('css')

<!-- Style CSS -->
<link rel="stylesheet" href="{{ mix('tinht/css/style.css') }}">




<!-- Modernizer JS -->
<script src="{{ URL::asset('tinht/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- Jssor Slider JS -->
<script src="{{ URL::asset('/tinht/js/vendor/jssor.slider-26.7.0.min.js') }}"></script>

<!-- jQuery JS -->
<script src="{{ URL::asset('tinht/js/vendor/jquery-3.3.1.js') }}"></script>

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
    google_ad_client: "ca-pub-1700383165487314",
    enable_page_level_ads: true
  });
</script>




