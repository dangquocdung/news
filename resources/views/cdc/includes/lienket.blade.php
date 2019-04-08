<div class="col-md-12 mt-15 clearfix">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Tin nổi bật</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>
            
    <div class="row sidebar">
        <ul class="title">
            @foreach ($HotTopics as $Topic )
    
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
            
                <li><a href="{{$topic_link_url}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$Topic->title_vi}}</a></li>
            @endforeach
        </ul>
                    
    </div>
            
</div>

<div class="col-md-12 mt-15 clearfix">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Hình ảnh</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>

    <div class="row sidebar">
            
    <!-- Hero Post Slider Start -->
        <div class="post-carousel-1" style="width:100%">
                    
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
            
                <!-- Overlay Post Start -->
                <div class="post post-large post-overlay hero-post">
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
                        <div class="content" style="bottom:10px">

                            <!-- Title -->
                            <h4 style="text-align:center; font-weght:bold; color:#fff"><a href="{{$topic_link_url}}" onMouseOver="this.style.color='#0F0'" onMouseOut="this.style.color='#fff'" >{{$Topic->title_vi}}</a></h4>

                        </div>
                        
                    </div>
                </div><!-- Overlay Post End -->
            @endforeach
            
        </div>
    </div>
            
</div>

<div class="col-md-12 mt-15 clearfix">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Phát thanh</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>
            
    <div class="row sidebar">

        <div id="phat-thanh" style="overflow:hidden">

            <audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">
                <source type="audio/mp3" src="">
                Sorry, your browser does not support HTML5 audio.
            </audio>
            <ul class="title" id="playlist">
                @foreach ($Audio as $Topic )
                    <li class="mb-1">
                        <a href="/uploads/topics/{{ $Topic->audio_file}}">
                            <i class="fa fa-volume-up" aria-hidden="true" style="font-size:20px;color:blue;"></i>  {{$Topic->title_vi}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        
    </div>
            
</div>

<div class="col-md-12 mt-15 clearfix">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Video clips</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>
            
    <!-- Video Popup -->
    {{-- <div class="row post post-overlay">
        <div class="post-wrap">
            <a href="https://www.youtube.com/watch?v=LMyZeiVGZ_w" class="image video-popup">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGhx0T5d7TTYZv3CJOs-E6z1ap5fB3Z8CVn7lB_7eSQWRApYQb" alt="post">
                <span class="video-btn"><i class="fa fa-play"></i></span>
            </a>

        </div>
    </div> --}}

    <div class="row">
        <div class="RYPP r16-9" data-playlist="ICtAZ-XPb4A&list=PLh_HV-iv7X8PHVkqrcy9qegZKJu-nMbbL">
            <div class="RYPP-video">
                <div class="RYPP-video-player">
                <!-- Will be replaced -->
                </div>
            </div>
            <div class="RYPP-playlist">
                <div class="RYPP-items customScroll"></div>
            </div>
        </div>
    </div>
            
</div>

<div class="col-md-12 mt-15 clearfix">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Liên kết</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>
            
    <div class="row post-wrap">

        <ul>

            @foreach($Banners->where('section_id',6) as $Banner)

                <li>

                    <a href="{{ $Banner->link_url }}" style="width:100%" class="mb-1">
                        <img class="img-fluid" src="/uploads/banners/{{ $Banner->file_vi}}" width="100%"/>
                    </a>

                </li>

            @endforeach
        </ul>

    </div>
            
</div>
