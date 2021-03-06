@php
    $link_title_var = "title_" . trans('backLang.boxCode');    
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp

<!-- Post Section Start -->

<div class="col-md-12 section mb-10">
        <div class="row">        
            <!-- Feature Post Row Start -->
        
            <div class="col-md-9">

                <!-- Post Block Wrapper Start -->
               
                    <div class="Head pos-rel clearfix mb-15">
                        <h2 class="ParentCate left">
                            <!-- Title -->
                            @if($WebmasterSection!="none")
                                {!! trans('backLang.'.$WebmasterSection->name) !!}
                            @elseif(@$search_word!="")
                                {{ @$search_word }}
                            @else
                                {{ $User->name }}
                            @endif
    
                            @if($CurrentCategory!="none")
                                @if(count((array)$CurrentCategory) >0)
                                    <?php
                                    $category_title_var = "title_" . trans('backLang.boxCode');
                                    ?>
                                    &nbsp;<i class="fa fa-angle-double-right"></i> {{ $CurrentCategory->$category_title_var }}
                                @endif
                            @endif
                        </h2>
                        <span class="line-red">.</span>
                    </div>

                    <div class="clearfix"></div>
                    
                    <!-- Small Post Wrapper Start -->
                    
                    @foreach ($Topics->sortbydesc('date') as $key=>$Topic )

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

                        <!-- Post Small Start -->
                        <div class="post post-small post-list feature-post post-separator-border">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image img-fluid" href="{{ $topic_link_url }}">
                                    @if (empty($Topic->photo_file))
                                        <img src="frontend/hashnews/img/post/post-13.jpg" alt="{{ $Topic->title_vi }}" style="max-width:300px">
                                    @else
                                        <img src="/uploads/topics/{{ $Topic->photo_file}}" alt="{{ $Topic->title_vi }}" style="max-width:300px">
                                    @endif
                                </a>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h5 class="title"><a href="{{ $topic_link_url }}">{{ $Topic->title_vi }}</a></h5>

                                    <!-- Meta -->
                                    <small><em>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y')}}</em></small>
                                    <br>

                                    {{ $Topic->sapo}}

                                </div>

                                <!-- Description -->
                                
                            </div>
                        </div><!-- Post Small End -->
                    @endforeach

                    <div class="clearfix"></div>

                    <div class="d-flex">
                        <div class="mx-auto">
                        {!! $Topics->links() !!}
                        </div>
                    </div>  
                        
            

            </div>
                
            <!-- Sidebar Start -->
            <div class="col-md-3">

                {{-- @include('tinht.includes.thongbao') --}}
                @include('tinht.includes.lienket')
                    
            </div><!-- Sidebar End -->
                
            <!-- Feature Post Row End -->
                        
        </div>
        
</div>
   