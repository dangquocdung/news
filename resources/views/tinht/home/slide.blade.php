<?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $file_var = "file_" . trans('backLang.boxCode');
?>
@if(!empty($Banners->where('section_id',9)))

<section class="post-section section">
    <!-- Sports Post Row Start -->
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

</section>

@endif