<div class="col-md-12">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Tin mới đăng</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>
            
    <div class="row sidebar">
        <ul class="title">
            @foreach ($LatestNews as $Topic )
    
                @php
                    if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                            $topic_link_url = url(trans('backLang.code') . "/" . $Topic->id . "-" . $Topic->$slug_var);
                        } else {
                            $topic_link_url = url($Topic->id . "-" . $Topic->$slug_var);
                        }
                    } else {
                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                            $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                        } else {
                            $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                        }
                    }
                @endphp
            
                <li><a href="{{$topic_link_url}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> {{$Topic->title_vi}}</a></li>
            @endforeach
        </ul>
                    
    </div>
            
</div>