<div class="sidebar-social-follow">
    @foreach ($DichVu as $key=>$Topic )
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

            switch ($key%4) {
                case 1:
                    $icon = 'google-plus';
                    break;
                case 2:
                    $icon = 'twitter';
                    break;
                case 3:
                    $icon = 'dribbble';
                    break;
                default:
                    $icon = 'facebook';
                    break;
            }

        @endphp

        <div>
            <a href="{{ $topic_link_url}}" class="{{ $icon }}">
                <i class="fa fa-user-md"></i>
                <span>{{ $Topic->title_vi }}</span>
            </a>
        </div>
    @endforeach
</div>
