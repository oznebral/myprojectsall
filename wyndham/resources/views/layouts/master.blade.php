<!DOCTYPE html>
<html id="ctl00_martigroup" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
        <title>{{isset($title) && !empty($title) ? $title.' | TRYP BY WYNDHAM' : 'TRYP BY WYNDHAM İSTANBUL TOPKAPI'}}</title>
        <meta name="description" content="{{isset($description) && !empty($description) ? $description:''}}">
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/tryp_by_wyndham_topkapi.png')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-free-5.13.1-web/css/all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}" />
        <link rel="stylesheet" type="text/css"href="{{asset('assets/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" type="text/css"href="{{asset('assets/css/daterangepicker.css')}}" />
</head>
<body>
        <div class="loading"
                style="position: fixed;height: 100%;width: 100%;display: block;background-color: #fff;top: 0;z-index: 9988;text-align: center;">
                <div class="windows8">
                        <div class="wBall" id="wBall_1">
                                <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_2">
                                <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_3">
                                <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_4">
                                <div class="wInnerBall"></div>
                        </div>
                        <div class="wBall" id="wBall_5">
                                <div class="wInnerBall"></div>
                        </div>
                </div>
        </div>
        <form name="aspnetForm" method="post"id="aspnetForm">
                <header class="fixed-top">
                        <div class="container-fluid pad_remove header-menu ">
                                <nav class="navbar navbar-expand-md navbar-light bg-light maincolor pl-0 pr-0 ">
                                        <a class="navbar-brand" href="{{route('index', App::getLocale())}}">
                                                <img src="{{asset('assets/images/tryp_by_wyndham_topkapi.png')}}" style="max-width: 143px;"class="header-logo d-none d-md-block">
                                                <img src="{{asset('assets/images/tryp_by_wyndham_topkapi.png')}}" class="d-md-none d-lg-none d-xl-none logos">
                                        </a>
                                        <div class='dropdown mobilebox'>
                                                <a style='margin-left:10px;' href="{{route(Route::currentRouteName(), 'tr')}}">
                                                        <img src="{{asset('assets/images/TR.png')}}" />
                                                </a>
                                                <a style='margin-left:10px;' href="{{route(Route::currentRouteName(), 'en')}}">
                                                        <img src="{{asset('assets/images/EN.png')}}" />
                                                </a>
                                        </div>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarCollapse" aria-controls="navbarCollapse"aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon">
                                                        <i class="fas fa-bars homepageactive"style="display:none;color:white; line-height: 1.5;"></i>
                                                </span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarCollapse">
                                             @include('includes.header')
                                        </div>
                                        <div class="comebackx" style="display: contents;">
                                                <div class='col-md-3 text-center text-md-right' style='color: #fff;'>
                                                        <i class='fas fa-phone-volume'></i>
                                                        <a style='color: #fff;' href='tel:+90 312 491 77 88'>
                                                                +90 312 491 77 88
                                                        </a>
                                                </div>
                                                <a href="#" class="btn-private header-private-button" data-toggle="modal"data-target="#homepage_mod"style="border-radius: 10px;border-top-right-radius: 0px;border-bottom-left-radius: 0px;background:#fae100 !important; color:#252525;margin-right: 15px;">
                                                        {{__('general.booknow')}}
                                                </a>
                                        </div>
                                </nav>
                        </div>
                </header>
                <section id="body">
                        <div class="container-fluid">@yield('content')</div> 
                </section>
                <section id="footer">
                        <footer class="row">@include('layouts.footer')</footer>
                </section>
                <div class="modal fade" id="homepage_mod" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title" id="homepage_mod"> {{__('general.booknow')}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                                <div class="form booking-form formelements">
                                                        <div class="form-group">
                                                                <label class="control-label" for="childs">{{__('general.booknow-date')}}</label>
                                                                <input type="text" name="daterange" id="daterangex">
                                                        </div>
                                                        <div class="form-group "style="width: 50%;display: inline-block;padding-right:10px;float: left;">
                                                                <label class="control-label" for="adults">{{__('general.booknow-adult')}}</label>
                                                                <input type="number" name="adults" id="adults" class="inputfocus">
                                                                <input type="hidden" name="formbilgi" id="formbilgi"value="rezervasyon2">
                                                        </div>
                                                        <div class="form-group " style="width: 50%;display: inline-block;padding-left:10px;float: left;">
                                                                <label class="control-label" for="childs">{{__('general.booknow-child')}}</label>
                                                                <input type="number" name="childs" id="childs">
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        {{__('general.booknow-close')}}
                                                </button>
                                                <button class="btn btn-primary" id="btn-make-reservation"name="btn-make-reservation" type="button" onclick="">
                                                        {{__('general.booknow-submit')}}
                                                </button>
                                        </div>
                                </div>
                        </div>
                </div>
        </form>

        <script type="text/javascript" src="{{asset('assets/javascript/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/javascript/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/javascript/jquery-ui.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/javascript/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/javascript/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/javascript/style.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/javascript/slick.min.js')}}"></script>
        <script src="{{asset('assets/javascript/jquery.fancybox.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/javascript/localize-en.js')}}"></script>

        <script type="text/javascript">
                $(document).ready(function () { 
                        $('.multiple-items').slick({
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                accessibility: true,
                                arrows: true,
                                prevArrow: $('.tikback'),
                                nextArrow: $('.tiknext')
                        });
                });
                var d = new Date();
                $('input[name="daterange"]').daterangepicker({
                        "numberOfMonths": 2,
                        "locale": {
                                "format": 'DD/MM/YYYY'
                        },
                        "startDate": d.getDate() + "/" + (pad(parseInt(d.getMonth()) + 1)) + "/" + d.getFullYear(),
                        "endDate": (parseInt(d.getDate()) + 1) + "/" + (pad(parseInt(d.getMonth()) + 1)) + "/" + d.getFullYear()
                });
                function pad(d) {
                        return (d < 10) ? '0' + d.toString() : d.toString();
                }
        </script>       
        <script>
                $('body').css('background-color', '#21304d');
                $('.maincolor').removeClass('bg-light navbar-light');
                $('.maincolor').css('background-color', '#21304d!important');
                $('.mainmenu').removeClass('navbar-black'); $('.navbar-ozelx').removeClass('navbar-black');
                $('.mainmenu > .nav-item > a').css('color', 'white'); $('.navbar-ozelx li a').css('color', 'white');
                $('.dropdown-item').css('color', 'black');
                $('.homepageactive').css('display', 'block');
        </script>
</body>
</html>