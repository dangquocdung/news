<!-- Instagram Section Start -->
<div class="instagram-section section">
    <div class="container-fluid">
        <div class="row">

            <!-- Full Width Instagram Carousel Start -->
            <div class="fullwidth-instagram-carousel instagram-carousel col pl-0 pr-0">

                @foreach ($Photo as $Topic )
                    @php
                        if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                            } else {
                                $topic_link_url = url($Topic->$slug_var);
                            }
                        } else {
                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                            } else {
                                $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                            }
                        }
                    @endphp

                    <!-- Image -->
                    <a class="instagram-item" href="{{ $topic_link_url }}">
                        @if (empty($Topic->photo_file))
                            <img src="frontend/hashnews/img/instagram/1.jpg" alt="{{ $Topic->title_vi }}">
                        @else
                            <img src="/uploads/topics/{{ $Topic->photo_file}}" alt="{{ $Topic->title_vi }}"></a>
                        @endif
                    </a>
                @endforeach

            </div><!-- Full Width Instagram Carousel End -->

        </div>
    </div>
</div><!-- Instagram Section End -->