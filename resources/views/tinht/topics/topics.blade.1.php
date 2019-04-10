@php

    $link_title_var = "title_" . trans('backLang.boxCode');
    $category_title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
    $summary_var = "summary_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $details_var2 = "details_" . trans('backLang.boxCodeOther');
    $title_var = "title_" . trans('backLang.boxCode');
    $title_var2 = "title_" . trans('backLang.boxCodeOther');

@endphp

<!-- Post Section Start -->
    <div class="post-section section">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-9 col-12 mb-20 box-mobile" style="padding-right:0px">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Sidebar Block Head Start -->
                        <div class="head politic-head bg-dark">

                            <!-- Title -->
                            @if($WebmasterSection!="none")
                                <h4 class="title">{!! trans('backLang.'.$WebmasterSection->name) !!}</h4>
                            @elseif(@$search_word!="")
                                <h4 class="title">{{ @$search_word }}</h4>
                            @else
                                <h4 class="title">{{ $User->name }}</h4>
                            @endif
    
                            @if($CurrentCategory!="none")
                                @if(count($CurrentCategory) >0)
                                    <?php
                                    $category_title_var = "title_" . trans('backLang.boxCode');
                                    ?>
                                    <h4 class="title">&nbsp;<i class="fa fa-angle-double-right"></i> {{ $CurrentCategory->$category_title_var }}
                                    </h4>
                                @endif
                            @endif

                        </div><!-- Sidebar Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            @if($Topics->total() == 0)

                                <!-- Post Start -->
                                <div class="post fashion-post post-default-list post-separator-border">
                                    <div class="post-wrap">

                                        <div class="alert alert-warning">
                                            <i class="fa fa-info"></i> &nbsp; {{ trans('frontLang.noData') }}
                                        </div>

                                    </div>
                                </div><!-- Post End -->
                            @else
                                @foreach($Topics->sortbydesc('date') as $key=>$Topic)

                                    <?php
                                        if ($Topic->$title_var != "") {
                                            $title = $Topic->$title_var;
                                        } else {
                                            $title = $Topic->$title_var2;
                                        }
                                        if ($Topic->$details_var != "") {
                                            $details = $details_var;
                                        } else {
                                            $details = $details_var2;
                                        }
                                        $section = "";
                                        try {
                                            if ($Topic->section->$title_var != "") {
                                                $section = $Topic->section->$title_var;
                                            } else {
                                                $section = $Topic->section->$title_var2;
                                            }
                                        } catch (Exception $e) {
                                            $section = "";
                                        }

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
                                    ?>

                                    <!-- Post Start -->
                                    <div class="post fashion-post post-default-list post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ $topic_link_url }}">

                                                @if ($Topic->photo_file != null && file_exists('uploads/topics/'.$Topic->photo_file))
                                                    <img src="uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}">
                                                @else
                                                    <img src="tinht/img/post/post-103.jpg" alt="{{ $Topic->$link_title_var}}">
                                                @endif

                                            </a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="{{ $topic_link_url }}">{{ $Topic->title_vi }}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ $Topic->user->name }}</a>
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                                </div>

                                                <!-- Description -->
                                                <p class="sapo">{{ $Topic->sapo}}</p>

                                                <!-- Read More -->
                                                
                                                {{--  <a href="{{ $topic_link_url }}" class="read-more">chi tiết..</a>  --}}

                                            </div>

                                        </div>
                                    </div><!-- Post End -->
                                    
                                @endforeach

                                <div class="clearfix"></div>

                                <div class="d-flex">
                                    <div class="mx-auto">
                                    {!! $Topics->links() !!}
                                    </div>
                                </div>                                    
                            @endif

                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-3 col-12 mb-20 box-mobile">

                    <div class="row">
                        @include('tinht.includes.dich-vu')
                        @include('tinht.includes.tien-ich')
                        @include('tinht.includes.san-pham-moi')
                        @include('tinht.includes.tai-tro')
                    </div>

                </div><!-- Sidebar End -->
                
            </div><!-- Feature Post Row End -->
            
    </div><!-- Post Section End -->