<div class="col-md-12">
    <div class="row">
        <div class="Head pos-rel clearfix">
            <h2 class="ParentCate left">
                <a href="#">Thông báo</a>
            </h2>
            <span class="line-red">.</span>
        </div>
    </div>
            
    <div class="row sidebar">
        <ul class="title">
            @foreach ($ThongBao as $Topic )
    
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
            
                <li><a href="{{$topic_link_url}}"> <i class="fa fa-bullhorn" aria-hidden="true" style="color:red"></i> {{$Topic->title_vi}}</a></li>
            @endforeach
        </ul>
                    
    </div>
            
</div>

