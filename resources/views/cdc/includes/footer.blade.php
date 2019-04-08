@php
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp

<div class="footer-bottom-section container" style="background: url('/img/bg/footer-bg.jpg') left top no-repeat; background-size: cover; float:none">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="footermain">
                    <div class="row flex flex-wrap">
                        <div class="col-xs-12 col-md-12 col-lg-3">
                            <div class="foot-col">
                                <div class="foot-logo">
                                    <div class="Module Module-141"><div class="ModuleContent">
                                        <a href="/"><img alt="" src="/img/logo-footer.png" style="width:100%"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="foot-col">
                                
                                <div class="title">Liên kết nhanh</div>
                                <nav class="foot-menu">
                                    <ul>

                                        @foreach($MenuLinks->where('father_id',2)->sortby('row_no') as $HeaderMenuLink)

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
    

                                            <li><a href="{{ $mmnnuu_link }}">{{ $HeaderMenuLink->title_vi }}</a></li>

                                        @endforeach
                                        

                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                            <div class="foot-col">
                                
                                <div class="title">Liên hệ với chúng tôi</div>
                                <nav class="foot-menu">
                                    <ul>
                                        <li>Công ty TNHH Phần mềm Dũng Thịnh</li>
                                        <li>34 Hàm Nghi - Thành phố Hà Tĩnh</li>
                                        <li>Email: dungdang@dungthinh.com</li>
                                        <li>Điện thoại: 0986242487</li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="foot-col">
                                <div class="title">Kết nối với chúng tôi</div>
                                <div class="foot-social"> 
                                    <a href="https://www.facebook.com/" target="blank"><em class="fa fa-facebook" aria-hidden="true"></em> </a>
                                    <a href="#" target="blank"><em class="fa fa-google-plus" aria-hidden="true"></em> </a>
                                    <a href="https://www.youtube.com/" target="blank"><em class="fa fa-youtube" aria-hidden="true"></em> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>