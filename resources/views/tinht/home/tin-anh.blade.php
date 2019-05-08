<div class="col-md-12 mb-15">
    <div class="Head pos-rel clearfix">
        <h2 class="ParentCate left">
            <a href="/hinh-anh">Hình ảnh</a>
        </h2>
        <span class="line-red">.</span>
    </div>

    <div class="clearfix"></div>

    <div class="four-column-post-carousel column-post-carousel post-block-carousel dark life-style-post-carousel row">

        @foreach ($Photo as $Topic )
            @php
                if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                        $topic_link_url = url(trans('backLang.code') . "/" . $Topic->id . "-" . $Topic->$slug_var);
                    } else {
                        $topic_link_url = url($Topic->id . "-" . $Topic->$slug_var);
                    }
                } else {
                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                        $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                    } else {
                        $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                    }
                }
            @endphp

        
            <!-- Overlay Post Start -->
            <div class="post post-overlay hero-post col-md-4">
                <div class="post-wrap">

                    <!-- Image -->
                    <a class="image img-fluid" href="{{ $topic_link_url }}">
                        @if (empty($Topic->photo_file))
                            <img src="frontend/hashnews/img/post/post-42.jpg" alt="{{ $Topic->title_vi }}">
                        @else
                            <img src="/uploads/topics/{{ $Topic->photo_file}}" alt="{{ $Topic->title_vi }}"></a>
                        @endif
                    </a>

                    <!-- Content -->
                    <div class="content">

                        <!-- Title -->
                        <h4 class="title">
                            <a href="{{ $topic_link_url }}">
                                {{-- @if($Topic->icon !="")
                                    <i class="fa {!! $Topic->icon !!}"></i>&nbsp;
                                @endif --}}
                                {{ $Topic->title_vi }}
                            </a>
                        </h4>

                        <!-- Meta -->
                        <div class="meta fix">
                            <span class="meta-item date">
                                <i class="fa fa-clock-o"></i>
                                {{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y')}}
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div><!-- Overlay Post End -->
        @endforeach
        
    </div>
</div>
        
    
            