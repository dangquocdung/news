{{--<div id="left-side-menu">--}}
    {{--<nav class="animate">--}}
        {{--<ul>--}}
            {{--@foreach ($chuyenmuc->where('vitri','1') as $cm)--}}
                {{--<li>--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $cm->name }}</a>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</nav>--}}
    {{----}}
    {{--<div class="nav-controller">--}}
        {{--<span class="[ glyphicon glyphicon-chevron-down ] controller-open"></span>--}}
        {{--<span class="[ glyphicon glyphicon-remove ] controller-close"></span>--}}
    {{--</div>--}}
{{--</div>--}}

<div id="side-menu">
    <ul id="navigation">
        
        <li class="home">
            {{-- <a href="{{ URL::to("admin") }}" title="{{trans('frontLang.dashboard')}}">
                <span><i class="fa fa-user-circle-o"></i></span>
            </a> --}}
            <a href="{{ Helper::SocialShare("facebook", $PageTitle)}}" class="facebook" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>

        </li>
        <li>
            <a href="{{ Helper::SocialShare("twitter", $PageTitle)}}" class="twitter" data-placement="top" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>

        </li>
        
    </ul>
</div>
