@if (count($Photo) > 0 )

    <!-- Post Block Wrapper Start -->
    <div class="post-block-wrapper mb-50">

        <!-- Post Block Head Start -->
        <div class="head">

            <!-- Title -->
            <h4 class="title">Hình ảnh</h4>

        </div><!-- Post Block Head End -->

        <!-- Post Block Body Start -->
        <div class="body">

            <div class="three-column-post-carousel column-post-carousel post-block-carousel row">

                @foreach ($Photo as $tlq)

                <div class="col-md-4 col-6">

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