<script type="text/javascript">
    var public_lang = "{{ trans('backLang.calendarLanguage') }}"; // this is a public var used in app.html.js to define path to js files
    var public_folder_path = "{{ URL::to('') }}"; // this is a public var used in app.html.js to define path to js files
</script>
<script src="{{ URL::to('backEnd/scripts/app.html.js') }}"></script>
{!! Helper::SaveVisitorInfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") !!}

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9602577412117870",
    enable_page_level_ads: true
  });
</script>