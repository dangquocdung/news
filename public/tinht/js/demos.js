$(document).ready(function() {

    function customizeGallery(trans, ease) {
        $('#lightgallery').lightGallery({
            loop: true,
            fourceAutoply: false,
            autoplay: false,
            thumbnail: false,
            pager: $(window).width() >= 768 ? true : false,
            speed: 400,
            scale: 1,
            keypress: true,
            mode: trans,
            cssEasing: ease
        });
    }

    customizeGallery('lg-slide', 'cubic-bezier(0.25, 0, 0.25, 1)');

    $('#select-trans').on('change', function() {
        $('#lightgallery').data('lightGallery').destroy(true);
        customizeGallery($('#select-trans').val(), 'cubic-bezier(' + $('#select-ease').val() + ')');
    });

    $('#select-ease').on('change', function() {

        $('#lightgallery').data('lightGallery').destroy(true);
        customizeGallery($('#select-trans').val(), 'cubic-bezier(' + $('#select-ease').val() + ')');
    });

    $('#lg-download-btn').on('click', function() {
        setTimeout(function() {
            $("#promoBar").slideDown('fast', function() {
                $('html, body').animate({ scrollTop: 0 }, 'fast');
            });
        }, 2000);
    });

    $('#promo_close').on('click', function() {
        $('#promoBar').slideUp('fast');
    });

    new WOW().init();

    setTimeout(function() {
        if (!pageLoaded) {
            pageLoading();
            console.log('timeout')
            pageLoaded = true;
        }
    }, 1500);
});