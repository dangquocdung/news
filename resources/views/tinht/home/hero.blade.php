<!-- Hero Section Start -->
<div class="hero-section section mb-20">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row row-1">

                        <div class="order-lg-2 col-lg-6 col-12">
                            
                            <!-- Hero Post Slider Start -->
                            <div class="post-carousel-1">

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

                                    <!-- Overlay Post Start -->
                                    <div class="post post-large post-overlay hero-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image">
                                                {{-- @if (empty($Topic->photo_file))
                                                    <img src="frontend/hashnews/img/post/post-3.jpg" alt="{{ $Topic->title_vi }}">
                                                @else
                                                    <img src="/uploads/topics/{{ $Topic->photo_file}}" alt="{{ $Topic->title_vi }}"></a>
                                                @endif --}}
                                                <img src="frontend/hashnews/img/post/post-3.jpg" alt="{{ $Topic->title_vi }}">

                                            </div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">Politic</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h2 class="title">
                                                    <a href="{{ $topic_link_url }}">
                                                            @if($Topic->icon !="")
                                                            <i class="fa {!! $Topic->icon !!}"></i>&nbsp;
                                                        @endif
                                                        {{ $Topic->title_vi }}
                                                    </a>
                                                </h2>

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
                                
                                
                            </div><!-- Hero Post Slider End -->
                            
                        </div>

                        <div class="order-lg-1 col-lg-3 col-12">
                            <div class="row row-1">

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="img/post/post-1.jpg" alt="post"></div>

                                        <!-- Category -->
                                        <a href="#" class="category travel">travel</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Hynpodia helps fmale travelers find health.</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="img/post/post-2.jpg" alt="post"></div>

                                        <!-- Category -->
                                        <a href="#" class="category fashion">Fashion</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Fashion is about some thing that comes from with in you.</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->

                            </div>
                        </div>

                        <div class="order-lg-3 col-lg-3 col-12">
                            <div class="row row-1">

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="img/post/post-5.jpg" alt="post"></div>

                                        <!-- Category -->
                                        <a href="#" class="category sports">Sports</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->

                                <!-- Overlay Post Start -->
                                <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <div class="image"><img src="img/post/post-6.jpg" alt="post"></div>

                                        <!-- Category -->
                                        <a href="#" class="category gadgets">Gadgets</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Overlay Post End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->