<!-- Single Sidebar -->
<div class="single-sidebar col-12 mb-15">

    
        <!-- Sidebar Block Body Start -->
        <div class="body">

                <!-- Sidebar Post Slider Start -->
                <div class="">
                    @foreach ($SanPhams as $sp)

                        <!-- Post Start -->
                        <div class="post life-style-post">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="{{ $sp->link_url }}"><img src="/uploads/banners/{{ $sp->file_vi}}" alt="post"></a>

                            </div>
                        </div><!-- Post End -->

                    @endforeach

                </div><!-- Sidebar Post Slider End -->

        </div><!-- Sidebar Block Body End -->


</div>

