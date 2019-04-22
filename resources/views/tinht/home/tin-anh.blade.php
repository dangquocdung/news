@if (!empty($Photo))
    
    <!-- Post Block Wrapper Start -->
    <div class="post-block-wrapper mb-15">
        
        <!-- Post Block Head Start -->
        <div class="head">
            
            <!-- Title -->
            <h4 class="title">Tin Ảnh</h4>
            
        </div><!-- Post Block Head End -->
        
        <!-- Post Block Body Start -->
        <div class="body">
            
            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">

                @foreach($Photo as $Topic)

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