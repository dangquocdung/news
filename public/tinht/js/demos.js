$(document).ready(function() {

    // Animated thumbnails
    var $animThumb = $('#aniimated-thumbnials');
    if ($animThumb.length) {
        $animThumb.justifiedGallery({
            border: 6
        }).on('jg.complete', function() {
            $animThumb.lightGallery({
                thumbnail: true
            });
        });
    };

    var $commentBox = $('#comment-box');
    $commentBox.lightGallery({
        appendSubHtmlTo: '.lg-item',
        addClass: 'fb-comments',
        mode: 'lg-fade',
        download: false,
        enableDrag: false,
        enableSwipe: false
    });
    $commentBox.on('onAfterSlide.lg', function(event, prevIndex, index) {
        if (!$('.lg-outer .lg-item').eq(index).attr('data-fb')) {
            try {
                $('.lg-outer .lg-item').eq(index).attr('data-fb', 'loaded');
                FB.XFBML.parse();
            } catch (err) {
                $(window).on('fbAsyncInit', function() {
                    $('.lg-outer .lg-item').eq(index).attr('data-fb', 'loaded');
                    FB.XFBML.parse();
                });
            }
        }
    });

    var $commentBoxSep = $('#comment-box-sep');
    $commentBoxSep.lightGallery({
        addClass: 'fb-comments',
        download: false,
        galleryId: 2
    });
    $commentBoxSep.on('onAfterAppendSubHtml.lg', function() {
        try {
            FB.XFBML.parse();
        } catch (err) {
            $(window).on('fbAsyncInit', function() {
                FB.XFBML.parse();
            });
        }
    });

});