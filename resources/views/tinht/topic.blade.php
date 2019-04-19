@extends('tinht.layout')

@section('meta')

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $Topic->title_vi }}" />
    <meta property="og:description" content="{{ $Topic->title_vi }}" />
    <meta property="og:image" itemprop="image" content="{{ URL::asset('/uploads/topics/'.$Topic->photo_file) }}" />

@stop

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('tinht/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('tinht/css/justifiedGallery.min.css') }}">
    <style>
        .demo-gallery .justified-gallery > a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
        }
        .demo-gallery .justified-gallery > a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
        }
        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
        opacity: 1;
        }
        .demo-gallery .justified-gallery > a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
        }
        .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
        }
        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection

@section('content')

    @php

        $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    
    @endphp

    <!-- Blog Section Start -->
    <div class="col-md-12 section mb-10">
        <div class="row">  
                
            <div class="col-md-9">

                @if (!empty($Lct))

                    @include('tinht.topic.lich-cong-tac')
                
                @elseif (!empty($Dbs))

                    @include('tinht.topic.danh-ba-dien-thoai')

                @elseif (!empty($Vcn))
            
                    @include('tinht.topic.vaccine')
                
                @else
            
                    @include('tinht.topic.topic')
            
                @endif
                                
            </div>
            
           <!-- Sidebar Start -->
           <div class="col-md-3">

                @include('tinht.includes.thongbao')
                @include('tinht.includes.lienket')
                
            </div><!-- Sidebar End -->
            
        </div><!-- Feature Post Row End -->
    </div>
            
@stop

@section('js')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="{{ URL::asset('tinht/js/jquery.justifiedGallery.min.js') }}"></script>
    <script src="{{ URL::asset('tinht/js/picturefill.min.js') }}"></script>
    <script src="{{ URL::asset('tinht/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ URL::asset('tinht/js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

           
            $('#aniimated-thumbnails').lightGallery({
                thumbnail:true
            }); 

            
       

            $('#example').DataTable( {
                "pageLength": 20,
                "language": {
                    "lengthMenu": "Hiện _MENU_ dòng mỗi trang",
                    "zeroRecords": "Không có dữ liệu",
                    "info": "Trang _PAGE_ / _PAGES_",
                    "infoEmpty": "Không có dữ liệu",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Tìm kiếm",
                    "paginate": {
                        "previous": "Trang trước",
                        "next": "Trang sau"
                        }
                    
                }
            } );

        });
    </script>
@endsection