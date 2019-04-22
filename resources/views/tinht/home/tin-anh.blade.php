<div class="row mb-10">  
    <div class="Head pos-rel clearfix"> 
        <h2 class="ParentCate left"> <a href="http://www.tinht.com/vi/hinh-anh">Tin ảnh</a> </h2> 
        <span class="line-red">.</span>  
    </div> 
</div>

<div class="three-column-post-carousel column-post-carousel post-block-carousel dark life-style-post-carousel row">

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
        <div class="post post-large post-overlay hero-post col-md-4">
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
        
    
            