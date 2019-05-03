@php
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $title = $Topic->$title_var;
    $details = $details_var;
    $topic_id = $Topic->id;
   
@endphp

<!-- Single Blog Start -->
<div class="single-blog mb-15">
    <div class="blog-wrap">

        <!-- Meta -->
        <div class="meta fix">
            <a href="#" class="meta-item category music">
                @if (!empty($CurrentCategory))
                    {{ $CurrentCategory->title_vi }}
                @else
                    {{ trans('backLang.'.$WebmasterSection->name) }} 
                @endif
            </a>
            <span class="meta-item date">{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
            {{-- <span class="meta-item view"><i class="fa fa-eye"></i>({{ $Topic->visits }})</span> --}}
        </div>

        <div class="post-image">
            <div class="post-heading mt-15 mb-15 noi-dung-doc">
                <h3>
                    @if($Topic->icon !="")
                        <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                    @endif
                    {{ $title }}
                </h3>
            </div>

            <div class="mb-2">

                <div class="news_utility_voice" style="vertical-align:top;float:right;">&nbsp;&nbsp;
                    <button ID="btnVoice" type="button" ><i class="fa fa-volume-up white"></i></button>
                    <button ID="btnVoicePause" type="button" ><i class="fa fa-pause white"></i></button>
                    <button ID="btnVoiceResume" type="button" ><i class="fa fa-forward white"></i></button>                             
                </div>
    
                <div class="news_utility_font">
                    <span>Cỡ chữ</span>
                    <a href="javscript:void(0)" class="increaseFont">
                        <i class="fa fa-font" style="font-size:24px;color:blue"></i>
                    </a>
                    <a href="javscript:void(0)" class="decreaseFont">
                        <i class="fa fa-font" style="font-size:12px;color:blue"></i>
                    </a>
                    <a href="javscript:void(0)" class="resetFont">
                        <i class="fa fa-font" style="font-size:16px;color:blue"></i>
                    </a>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="sapo noi-dung-doc">

                {{-- <input onclick="responsiveVoice.speak('{{ $Topic->sapo}}','Vietnamese Male');" type="button" value="🔊 Đọc" /> --}}


                {{ $Topic->sapo }}
    
            </div>

            <!-- Title -->
            @if($WebmasterSection->type==2 && $Topic->video_file!="")
                {{--video--}}
                
                    <div class="video-container responsive-video">
                        @if($Topic->video_type ==1)
                            <?php
                            $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                            ?>
                            @if($Youtube_id !="")
                                <div class="video-wrapper">
                                    {{-- Youtube Video --}}
                                    <iframe height="315" width="560" allowfullscreen="" frameborder="0"
                                            src="https://www.youtube.com/embed/{{ $Youtube_id }}">
                                    </iframe>
                                </div>
                            @endif
                        @elseif($Topic->video_type ==2)
                            <?php
                            $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                            ?>
                            @if($Vimeo_id !="")
                                {{-- Vimeo Video --}}
                                <iframe allowfullscreen
                                        src="http://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0">
                                </iframe>
                            @endif

                        @elseif($Topic->video_type ==3)
                            @if($Topic->video_file !="")
                                {{-- Embed Video --}}
                                {!! $Topic->video_file !!}
                            @endif

                        @else
                            <video width="100%" controls autoplay controlslist="nodownload" preload="none" poster="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}">
                                <source src="{{ URL::to('uploads/topics/'.$Topic->video_file) }}"
                                        type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif

                    </div>

            @elseif($WebmasterSection->type==3 && $Topic->audio_file!="")
                {{--audio--}}
                
                    <div>
                        <audio controls autoplay>
                            <source src="{{ URL::to('uploads/topics/'.$Topic->audio_file) }}"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                    </div>
                
            @elseif(count($Topic->photos)>0)

                <script type="text/javascript">
                    jssor_2_slider_init = function() {
            
                        var jssor_2_SlideshowTransitions = [
                        {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                        {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                        ];
            
                        var jssor_2_options = {
                        $AutoPlay: 1,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_2_SlideshowTransitions,
                            $TransitionsOrder: 1
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Orientation: 2,
                            $NoDrag: true
                        }
                        };
            
                        var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
            
                        /*#region responsive code begin*/
            
                        var MAX_WIDTH = 980;
            
                        function ScaleSlider() {
                            var containerElement = jssor_2_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;
            
                            if (containerWidth) {
            
                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
            
                                jssor_2_slider.$ScaleWidth(expectedWidth);
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }
            
                        ScaleSlider();
            
                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>
                <style>
                    /*jssor slider loading skin spin css*/
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }
            
                    @keyframes jssorl-009-spin {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }
            
                    .jssora061 {display:block;position:absolute;cursor:pointer;}
                    .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
                    .jssora061:hover {opacity:.8;}
                    .jssora061.jssora061dn {opacity:.5;}
                    .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
                </style>
                <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:600px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/tinht/img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:600px;overflow:hidden;">
                        @foreach($Topic->photos as $photo)
                            <div data-p="170.00">
                                <img data-u="image" src="{{ URL::to('uploads/topics/'.$photo->file) }}" alt="{{ $photo->title  }}">
                                <div u="thumb">{{ $photo->description  }}</div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                        <div u="slides">
                            <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                                <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                        </svg>
                    </div>
                </div>
                <script type="text/javascript">jssor_2_slider_init();</script>

                <div class="clearfix"></div>
                <br>

                <div class="demo-gallery">

                        <div id="aniimated-thumbnials" class="list-unstyled justified-gallery">
                            @foreach($Topic->photos as $photo)
                            <a href="{{ URL::to('uploads/topics/'.$photo->file) }}" data-sub-html="{{ $photo->description  }}">
                                <img class="img-responsive" src="{{ URL::to('uploads/topics/'.$photo->file) }}" />
                                <div class="demo-gallery-poster">
                                    <img src="/tinht/img/zoom.png">
                                </div>
                            </a>
                            @endforeach
                           
                        </div>
                        
                        
                </div>

            @endif

            <div class="content noi-dung-doc">
                {!! $Topic->details_vi !!}
            </div>

            @if($Topic->attach_file !="")
                <?php
                $file_ext = strrchr($Topic->attach_file, ".");
                $file_ext = strtolower($file_ext);
                ?>
                <div class="bottom-article">
                    @if($file_ext ==".jpg"|| $file_ext ==".jpeg"|| $file_ext ==".png"|| $file_ext ==".gif")

                        <iframe allowfullscreen src="/panalens/{{ $Topic->id }}"></iframe>

                        <br>
                        <div class="text-center">
                            <img src="{{ URL::to('uploads/topics/'.$Topic->attach_file) }}"
                                alt="{{ $title }}" width="100%"/>
                        </div>
                    @else

                        @if (str_contains($Topic->attach_file,'http') )
                        
                            <a href="{{ URL::to($Topic->attach_file) }}">
                                <strong>
                                    
                                    {!! Helper::GetIcon(URL::to('uploads/topics/'),$Topic->attach_file) !!}
                                    &nbsp;{{ trans('frontLang.downloadAttach') }}
                                </strong>
                            </a>

                            @else

                            <a href="{{ URL::to('uploads/topics/'.$Topic->attach_file) }}">
                                <strong>
                                    {!! Helper::GetIcon(URL::to('uploads/topics/'),$Topic->attach_file) !!}
                                    &nbsp;{{ trans('frontLang.downloadAttach') }}</strong>
                            </a>
                            @endif
                        
                    @endif
                </div>
            @endif

            {{-- Show Additional attach files --}}
            @if(count($Topic->attachFiles)>0)
                <div style="padding: 10px;border: 1px dashed #ccc;margin-bottom: 10px;">
                    @foreach($Topic->attachFiles as $attachFile)
                        <?php
                        if ($attachFile->$title_var != "") {
                            $file_title = $attachFile->$title_var;
                        } else {
                            $file_title = $attachFile->$title_var2;
                        }
                        ?>
                        <div style="margin-bottom: 5px;">

                            <a href="{{ URL::to('uploads/topics/'.$attachFile->file) }}" target="_blank">
                                <strong>
                                    {!! Helper::GetIcon(URL::to('uploads/topics/'),$attachFile->file) !!}
                                    &nbsp;{{ $file_title }}</strong>
                            </a>

                        </div>
                    @endforeach
                </div>
            @endif

            <div class="tags-social float-left">

                <div class="blog-social float-right">

                    @if(Helper::GeneralWebmasterSettings("settings_status"))
                        @if(@Auth::user()->permissionsGroup->settings_status)
                            <a href="{{ route("topicsHot",["id"=>$Topic->id]) }}" class="Google+" data-placement="top" title="Hot"><i class="fa fa-eye"></i></a>
                            <a href="{{ route("topicsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topic->id]) }}" target="_blank" class="dribbble" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        @endif
                    @endif

                    <a href="{{ Helper::SocialShare("facebook", $PageTitle)}}" class="facebook" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="{{ Helper::SocialShare("twitter", $PageTitle)}}" class="twitter" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="{{ Helper::SocialShare("google", $PageTitle)}}" class="google-plus" data-placement="top" title="Google+"><i class="fa fa-google-plus"></i></a>
                </div>

            </div>
        </div>
    </div>
</div><!-- Single Blog End -->

<!-- Previous & Next Post Start -->
<div class="post-nav mb-15">
    @if (!empty($preTopic))
        @php
        $Topic = $preTopic;
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
        <a href="{{ $topic_link_url }}" class="prev-post">
                <span><i class="fa fa-angle-double-left"></i>&nbsp;Tin trước</span>

            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                                <img src="uploads/topics/{{ $preTopic->photo_file }}" style="width:100%; max-height:80px">

                        </div>
                    </div>
                    <div class="col-8">

                        <small>

                                {{ $preTopic->title_vi }}

                        </small>

                    </div>
                </div>

            </div>
            
        </a>
    
    @endif

    @if (!empty($nexTopic))

        @php
        $Topic = $nexTopic;
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
        <a href="{{ $topic_link_url }}" class="next-post">
            <span>Tin sau&nbsp;<i class="fa fa-angle-double-right"></i></span>
            <div class="col-12">
                    <div class="row">
                        
                        <div class="col-8">
                            
                            <small>
                                    {{ $nexTopic->title_vi }}

                            </small>
                                
                        </div>

                        <div class="col-4">
                            <div class="row">
                                    <img src="uploads/topics/{{ $nexTopic->photo_file }}" style="width:100%; max-height:80px">

                            </div>

                        </div>
                    </div>

                </div>
        </a>

    @endif
</div><!-- Previous & Next Post End -->

{{--  Tin liên quan  --}}

@if (count($Topic->relatedTopics) > 0 )

    <!-- Post Block Wrapper Start -->
    <div class="post-block-wrapper mb-50">

        <!-- Post Block Head Start -->
        <div class="head">

            <!-- Title -->
            <h4 class="title">Tin liên quan</h4>

        </div><!-- Post Block Head End -->

        <!-- Post Block Body Start -->
        <div class="body">

            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">

                @foreach ($Topic->relatedTopics as $tlq)

                <div class="col-md-6 col-12">

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay hero-post">
                        <div class="post-wrap">

                            <!-- Image -->
                            <div class="image"><img src="/img/post/post-48.jpg" alt="post"></div>

                            <!-- Category -->
                            <a href="#" class="category gadgets">gadgets</a>

                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h4 class="title"><a href="post-details.html">{{ $tlq->title_vi }}</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date">
                                        <i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($tlq->created_at)->format('d/m/Y H:i') }}
                                    </span>
                                </div>

                            </div>

                        </div>
                    </div><!-- Overlay Post End -->

                </div>

                @endforeach

            </div>

        </div><!-- Post Block Body End -->

    </div><!-- Post Block Wrapper End -->

@endif

{{--  Cung chuyen muc  --}}

@if (!empty($LatestNews))
    
    <!-- Post Block Wrapper Start -->
    <div class="post-block-wrapper mb-15">
        
        <!-- Post Block Head Start -->
        <div class="head">
            
            <!-- Title -->
            <h4 class="title">Cùng chuyên mục</h4>
            
        </div><!-- Post Block Head End -->
        
        <!-- Post Block Body Start -->
        <div class="body">
            
            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">

                @foreach($LatestNews as $Topic)

                    <?php
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
                
                    <div class="col-md-6 col-12">
                        
                        <!-- Overlay Post Start -->
                        <div class="post hero-post">
                            <div class="post-wrap">

                                <!-- Image -->

                                <div class="image">
                                    <a href="{{ $topic_link_url }}">
                                        @if ($Topic->photo_file != null && file_exists('uploads/topics/'.$Topic->photo_file))
                                            <img src="uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->title_vi}}" style="max-height:240px;">
                                        @else
                                            <img src="tinht/img/post/post-48.jpg" alt="{{ $Topic->title_vi}}">
                                        @endif
                                    </a>
                                </div>

                                <!-- Content -->
                                <div class="content-tlq">

                                    <!-- Title -->
                                    <h5 class="title" style="margin-top:10px; text-align:center"><a href="{{ $topic_link_url }}"> {{ $Topic->title_vi }}</a></h5>

                                    <!-- Meta -->
                                    {{--  <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                    </div>  --}}

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->
                    
                    </div>

                @endforeach

            </div>
            
        </div><!-- Post Block Body End -->
        
    </div><!-- Post Block Wrapper End -->

@endif

{{--  Bình luận  --}}

@if($WebmasterSection->comments_status)
    @if(count($Topic->approvedComments)>0)
                <h4><i class="fa fa-comments"></i> {{ trans('frontLang.comments') }}</h4>
                <hr>
        @foreach($Topic->approvedComments as $comment)
            <?php
                $dtformated = date('d M Y h:i A', strtotime($comment->date));

                $dtformated = \Carbon\Carbon::parse($comment->date)->format('d-m-Y h:i:s');

            ?>
            <div class="row">
                <div class="col-lg-12">
                    {{--  <img src="{{ URL::to('uploads/contacts/profile.jpg') }}" class="profile"
                        alt="{{$comment->name}}">  --}}
                    <div class="pullquote-left">
                            <i class="fa fa-commenting-o"></i>&nbsp;<strong>{{$comment->name}}</strong>
                        <span>
                            <small>
                                <small>({{ $dtformated }})</small>
                            </small>
                        </span>
                        <div>
                            <em>{!! nl2br(strip_tags($comment->comment)) !!}</em>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    @endif

    <!-- Post Block Wrapper Start -->
    <div class="post-block-wrapper">
        
        <!-- Post Block Head Start -->
        <div class="head">
            
            <!-- Title -->
            <h4 class="title">Bình Luận Mới</h4>
            
        </div><!-- Post Block Head End -->
        
        <!-- Post Block Body Start -->
        <div class="body">
            
            <div class="post-comment-form">

                    <div id="sendmessage"><i class="fa fa-check-circle"></i>
                        &nbsp;Bình luận của bạn đã được gửi thành công. Cảm ơn bạn! &nbsp; 
                        <a href="{{url()->current()}}">
                            <i class="fa fa-refresh"></i> Làm mới
                        </a>
                    </div>
                    <div id="errormessage">Lỗi: Vui lòng thử lại</div>

                    {{Form::open(['route'=>['Home'],'method'=>'POST','class'=>'commentForm'])}}

                    <div class="form-group">
                        {!! Form::text('comment_name',"", array('placeholder' => trans('frontLang.yourName'),'class' => 'form-control','id'=>'comment_name', 'data-msg'=> trans('frontLang.enterYourName'),'data-rule'=>'minlen:4')) !!}
                        <div class="alert alert-warning validation"></div>
                    </div>
                    <div class="form-group">
                        {!! Form::email('comment_email',"", array('placeholder' => trans('frontLang.yourEmail'),'class' => 'form-control','id'=>'comment_email', 'data-msg'=> trans('frontLang.enterYourEmail'),'data-rule'=>'email')) !!}
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('comment_message','', array('placeholder' => trans('frontLang.comment'),'class' => 'form-control','id'=>'comment_message','rows'=>'5', 'data-msg'=> trans('frontLang.enterYourComment'),'data-rule'=>'required')) !!}
                        <div class="validation"></div>
                    </div>
                    
                    <div class="float-right">
                        <input type="hidden" name="topic_id" value="{{$Topic->id}}">
                        <button type="submit"
                                class="btn btn-theme">{{ trans('frontLang.sendComment') }}</button>
                    </div>

                    {{Form::close()}}
                
            </div>
            
        </div><!-- Post Block Body End -->
        
    </div><!-- Post Block Wrapper End -->
@endif

<script type="text/javascript">

    jQuery(document).ready(function ($) {
        "use strict";

        @if($WebmasterSection->comments_status)
            //Comment
            $('form.commentForm').submit(function () {

                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (!i.attr('checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' )).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                f.children('textarea').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + ( ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '' )).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo route("commentSubmit"); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#sendmessage").addClass("show");
                            $("#errormessage").removeClass("show");
                            $("#comment_name").val('');
                            $("#comment_email").val('');
                            $("#comment_message").val('');
                        }
                        else {
                            $("#sendmessage").removeClass("show");
                            $("#errormessage").addClass("show");
                            $('#errormessage').html(msg);
                        }

                    }
                });
                return false;
            });
        @endif
    });
</script>
            