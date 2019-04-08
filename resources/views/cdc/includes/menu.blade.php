@php
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp

<!-- Menu Section Start -->
    <div class="menu-section section bg-dark container" style="float:none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <!-- Main Menu Start -->
                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>
                                    <li class="@if (empty($WebmasterSection)) active  @endif">
                                        <a href="/"><i class="fa fa-home fa-lg"></i></a>
                                    </li>

                                    @foreach($MenuLinks->where('father_id',1)->sortby('row_no') as $HeaderMenuLink)

                                        @if($HeaderMenuLink->type > 2)

                                            <li class="@if (!empty($WebmasterSection)) @if ($HeaderMenuLink->cat_id == $WebmasterSection->id) active  @endif @endif @if ($HeaderMenuLink->type==3) has-dropdown @endif">
                                                
                                                <a href="javascript:void(0)">{{ $HeaderMenuLink->title_vi }}</a>
                                                <!-- Submenu Start -->
                                                @if(count($HeaderMenuLink->webmasterSection->sections) >0)
                                                    <ul class="sub-menu">

                                                    
                                                            @foreach($HeaderMenuLink->webmasterSection->sections->where('father_id','0') as $MnuCategory)

                                                                <?php
                                                                    if ($MnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                            $Category_link_url = url(trans('backLang.code')."/" .$MnuCategory->$slug_var);
                                                                        }else{
                                                                            $Category_link_url = url($MnuCategory->$slug_var);
                                                                        }
                                                                    } else {
                                                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                            $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                                                        }else{
                                                                            $Category_link_url = route('FrontendTopicsByCat', ["section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                                                        }
                                                                    }
                                                                ?>
                                                                <li>
                                                                    <a href="{{ $Category_link_url }}">{{ $MnuCategory->title_vi }}</a>
                                                                </li>
                                                            @endforeach
                                                    
                                                    </ul><!-- Submenu End -->

                                                @elseif(count($HeaderMenuLink->webmasterSection->topics) >0)
                                                    {{--topics drop down--}}
                                                    <ul class="sub-menu">
                                                        @foreach($HeaderMenuLink->webmasterSection->topics->where('status','1') as $MnuTopic)
                                                            @if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d")))
                                                                <li>
                                                                    <?php
                                                                        if ($MnuTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $topic_link_url = url(trans('backLang.code')."/" .$MnuTopic->$slug_var);
                                                                            }else{
                                                                                $topic_link_url = url($MnuTopic->$slug_var);
                                                                            }
                                                                        } else {
                                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $topic_link_url = route('FrontendTopicByLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                                            }else{
                                                                                $topic_link_url = route('FrontendTopic', ["section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <a href="{{ $topic_link_url }}">
                                                                        @if($MnuTopic->icon !="")
                                                                            <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                                                        @endif
                                                                        {{$MnuTopic->title_vi}}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </li>    
                                        @else

                                            <?php
                                                if ($HeaderMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $mmnnuu_link = url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection[$slug_var]);
                                                    }else{
                                                        $mmnnuu_link = url($HeaderMenuLink->webmasterSection[$slug_var]);
                                                    }
                                                }else{
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $mmnnuu_link =url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection['name']);
                                                    }else{
                                                        $mmnnuu_link =url($HeaderMenuLink->webmasterSection['name']);
                                                    }
                                                }
                                            ?>

                                            <li>
                                                <a href="{{ (trim($HeaderMenuLink->link) !="") ? $HeaderMenuLink->link:$mmnnuu_link }}">{{ $HeaderMenuLink->$title_vi }}</a>
                                            </li>

                                        @endif
                                    @endforeach                                

                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-none d-block d-md-none"><a href="/"><img src="cdc/img/logo-white.png" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-right">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Tìm kiếm...">
                                </form>
                            </div>

                        </div>
                        
                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
                                <ul>
                                    <li class="@if (empty($WebmasterSection)) active  @endif">
                                        <a href="/"><i class="fa fa-home fa-lg"></i></a>
                                    </li>
                                    
                                    @foreach($MenuLinks->where('father_id',1)->sortby('row_no') as $HeaderMenuLink)

                                        <?php
                                            if ($HeaderMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $mmnnuu_link = url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection[$slug_var]);
                                                }else{
                                                    $mmnnuu_link = url($HeaderMenuLink->webmasterSection[$slug_var]);
                                                }
                                            }else{
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $mmnnuu_link =url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection['name']);
                                                }else{
                                                    $mmnnuu_link =url($HeaderMenuLink->webmasterSection['name']);
                                                }
                                            }
                                        ?>

                                        @if($HeaderMenuLink->type >= 2)

                                            <li class="@if (!empty($WebmasterSection)) @if ($HeaderMenuLink->cat_id == $WebmasterSection->id) active  @endif @endif @if ($HeaderMenuLink->type==3) has-dropdown @endif">
                                                
                                                <a href="{{ $mmnnuu_link }}">{{ $HeaderMenuLink->title_vi }}</a>
                                                <!-- Submenu Start -->

                                                @if(count((array)$HeaderMenuLink->webmasterSection->sections) >0)
                                                    <ul class="sub-menu">

                                                    
                                                            @foreach($HeaderMenuLink->webmasterSection->sections->where('father_id','0') as $MnuCategory)
                                                                <li>
                                                                    <a href="{{ $MnuCategory->seo_url_slug_vi }}">{{ $MnuCategory->title_vi }}</a>
                                                                </li>
                                                            @endforeach
                                                    
                                                    </ul><!-- Submenu End -->

                                                @elseif(count((array)$HeaderMenuLink->webmasterSection->topics) >0)
                                                    {{--topics drop down--}}
                                                    <ul class="sub-menu">
                                                        @foreach($HeaderMenuLink->webmasterSection->topics->where('status','1') as $MnuTopic)
                                                            @if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d")))
                                                                <li>
                                                                    <?php
                                                                        if ($MnuTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $topic_link_url = url(trans('backLang.code')."/" .$MnuTopic->$slug_var);
                                                                            }else{
                                                                                $topic_link_url = url($MnuTopic->$slug_var);
                                                                            }
                                                                        } else {
                                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $topic_link_url = route('FrontendTopicByLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                                            }else{
                                                                                $topic_link_url = route('FrontendTopic', ["section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                                            }
                                                                        }
                                                                    ?>
                                                                    <a href="{{ $topic_link_url }}">
                                                                        @if($MnuTopic->icon !="")
                                                                            <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                                                        @endif
                                                                        {{$MnuTopic->title_vi}}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                
                                            </li>
                                        @else

                                            <li>
                                                <a href="{{ (trim($HeaderMenuLink->link) !="") ? $HeaderMenuLink->link:$mmnnuu_link }}">{{ $HeaderMenuLink->$title_vi }}</a>
                                            </li>

                                        @endif
                                    @endforeach    
                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Menu Section End -->
   