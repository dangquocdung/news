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
            <span class="meta-item date">{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y') }}</span>
            <span class="meta-item view"><i class="fa fa-eye"></i>({{ $Topic->visits }})</span>
        </div>

        <div class="post-image">
            <div class="post-heading mt-15 mb-15">
                <h3>
                    @if($Topic->icon !="")
                        <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                    @endif
                    {{ $title }}
                </h3>
            </div>
            <div class="sapo">

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
        </div>
    </div>
</div><!-- Single Blog End -->
                