<div class="col-md-12 mb-15" id="leftdiv">
                        
    <div class="row">
        <!-- Post Wrapper Start -->
        <div class="col-md-7 col-xs-12">

            <div class="row">

                <!-- Hero Post Slider Start -->
        <div class="post-carousel-1">

        @foreach($Banners->where('section_id',9) as $key=>$SlideBanner)

            <!-- Overlay Post Start -->
            <div class="post post-large hero-post">
                <div class="post-wrap">

                    <!-- Image -->
                    <a href="{{ $SlideBanner->link_url }}" class="image" style="margin-bottom: 0 !important;">
                        <img src="/uploads/banners/{{ $SlideBanner->$file_var }}" alt="{{ $SlideBanner->$title_var }}">
                    </a>
                    
                </div>
            </div><!-- Overlay Post End -->

        @endforeach

        </div><!-- Hero Post Slider End -->
                
            </div>

        </div><!-- Post Wrapper End -->

        <!-- Small Post Wrapper Start -->
        <div class="col-md-5 col-xs-12" style="padding-right:0" id="mainbox-r">
            
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

                <!-- Post Small Start -->
                <div class="post post-small post-list feature-post post-separator-border">
                    <div class="post-wrap">

                        <!-- Image -->
                        <a class="image img-fluid" href="{{ $topic_link_url }}">
                            @if (empty($Topic->photo_file))
                                <img src="frontend/hashnews/img/post/post-13.jpg" alt="{{ $Topic->title_vi }}">
                            @else
                                <img src="/uploads/topics/{{ $Topic->photo_file}}" alt="{{ $Topic->title_vi }}">
                            @endif
                        </a>

                        <!-- Content -->
                        <div class="content">

                            <!-- Title -->
                            <h5 class="title">
                                
                                <a href="{{ $topic_link_url }}">
                                        @if($Topic->icon !="")
                                        <i class="fa {!! $Topic->icon !!}"></i>&nbsp;
                                    @endif
                                        
                                    {{ $Topic->title_vi }}
                                </a>
                            </h5>

                            <!-- Meta -->
                            {{--  <div class="meta fix">
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y')}}</span>
                            </div>  --}}

                        </div>
                        
                    </div>
                </div><!-- Post Small End -->
            @endforeach
            
        </div><!-- Small Post Wrapper End -->

        </div>

</div><!-- Post Block Wrapper End -->