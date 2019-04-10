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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
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
    </script>
    <script src="{{ URL::asset('tinht/js/picturefill.min.js') }}"></script>
    <script src="{{ URL::asset('tinht/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ URL::asset('tinht/js/jquery.mousewheel.min.js') }}"></script>
@endsection