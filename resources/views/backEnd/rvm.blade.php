@extends('master')

@section('content')
    <div class="main-content-wrapper">
        <a href="javascript:;" class="btn btn-info" data-type="rv-media" data-target="#description" data-editor="summernote">
            <i class="fa fa-picture-o" aria-hidden="true"></i> {{ __('Add Media') }}
        </a>
        <textarea name="description" id="description" class="summernote form-control"></textarea>
    </div>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/media/packages/bootstrap-summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/media/packages/font-awesome/css/font-awesome.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/media/packages/bootstrap-summernote/summernote.min.js') }}"></script>
    @include('media::partials.media')
    <script src="{{ asset('vendor/media/js/jquery.addMedia.js') }}"></script>
    <script>
        'use strict';

        $(document).ready(function () {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['misc', ['fullscreen']]
                ],
                height: 300
            });
        });
    </script>
@endsection