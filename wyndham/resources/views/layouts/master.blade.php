<!DOCTYPE html>
<html id="ctl00_martigroup" lang="en">

<head>
        <title>
                TRYP By Wyndham İstanbul Topkapı
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}"/>
        
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
        <form name="aspnetForm" method="post" action="/Default.aspx" id="aspnetForm">
                <div>
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                                value="/wEPDwUKMTk1MjMzNTE5OGRkaPO0ggf1stBv6W5w5HmHCU2hJi0=" />
                </div>
                <div>
                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
                </div>
                <header class="fixed-top">
                        <div class="container-fluid pad_remove header-menu">
                                <nav class="navbar navbar-expand-md navbar-light bg-light maincolor pl-0 pr-0">
                                        <a class="navbar-brand" href="../web_site/index.html">
                                                <img src="{{asset('assets/images/logo.png')}}" style="max-width: 143px;"
                                                        class="header-logo d-none d-md-block">
                                                <img src="{{asset('assets/images/logo.png')}}" class="d-md-none d-lg-none d-xl-none logos">
                                        </a>
                                        <div class='dropdown mobilebox'>
                                                <a style='margin-left:10px;' href='index.html'>
                                                        <img src="{{asset('assets/images/TR.png')}}" />
                                                </a>
                                                <a style='margin-left:10px;' href='index.html'><img src="{{asset('assets/images/EN.png')}}" />
                                                </a>
                                        </div>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarCollapse" aria-controls="navbarCollapse"
                                                aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon">
                                                        <i class="fas fa-bars homepageactive"
                                                                style="display:none;color:white; line-height: 1.5;">
                                                        </i>
                                                </span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarCollapse">
                                                <ul class='navbar-nav navbar-black mainmenu mr-auto'>
                                                        <li class='nav-item'>
                                                                <a class='nav-link hovers' href="{{route('index')}}" target='_self'
                                                                        title='HOME'>{{__('general.home')}}
                                                                </a>
                                                        </li>
                                                        <li class='nav-item'>
                                                                <a class='nav-link hovers' href="{{route('ourhotel')}}"
                                                                        target='_self' title='OUR HOTEL'>OTELİMİZ
                                                                </a>
                                                        </li>
                                                        <li class='nav-item'>
                                                                <a class='nav-link hovers' href="content-pages/rooms.html"
                                                                        target='_self' title='ROOMS'>ODALAR
                                                                </a>
                                                        </li>
                                                        <li class='nav-item'>
                                                                <a class='nav-link hovers' href="content-pages/facilities.html"
                                                                        target='_self' title='FACILITIES'>HİZMETLER
                                                                </a>
                                                        </li>
                                                        <li class='nav-item'>
                                                                <a class='nav-link hovers' href="content-pages/contact.html"
                                                                        target='_self' title='CONTACT'>İLETİŞİM
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="comebackx" style="display: contents;">
                                                <div class='col-md-3 text-center text-md-right' style='color: #fff;'>
                                                        <i class='fas fa-phone-volume'></i>
                                                        <a style='color: #fff;' href='tel:+90 312 491 77 88'>
                                                                +90 312 491 77 88
                                                        </a>
                                                </div>
                                                <a href="#" class="btn-private header-private-button" data-toggle="modal"
                                                        data-target="#homepage_mod"
                                                        style="border-radius: 10px;border-top-right-radius: 0px;border-bottom-left-radius: 0px;background:#fae100 !important; color:#252525;margin-right: 15px;">
                                                        REZERVASYON
                                                </a>
                                        </div>
                                </nav>
                        </div>
                </header>
                <section id="body">
                        <div class="container-fluid">
                        @yield('content')
                        </div> 
                </section>
                <section id="footer">
                        <div class="container-fluid">
                                <div class="row padremove-bottom" style="background:#21304d; color:white;">
                                        <div class="col-md-4">
                                                &nbsp; TRYP BY WYNDHAM İSTANBUL TOPKAPI © 2018
                                        </div>
                                        <div class="col-md-4 text-center">
                                                <ul class='horizontal_menu'>
                                                        <li>
                                                                <a href='../web_site/footer/terms-conditions.html' target='_self'
                                                                        title='Terms & Conditions'>
                                                                        Terms & Conditions/
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href='../web_site/footer/privacy-policy.html footer/privacy-policy.html' target='_self'
                                                                        title='Privacy Policy'>
                                                                        Privacy Policy/
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href='../web_site/footer/disclamer.html' target='_self' title='Disclamer'>
                                                                        Disclamer
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="col-md-4"
                                                style="text-align: right; color: #222222; overflow: hidden;">
                                                <a href="http://mescomedia.com/" target="_blank">
                                                        <img class="mescoimg" src="images/mescomedia1.png"
                                                                onmouseover="hover(this);" onmouseout="unhover(this);">
                                                </a>
                                        </div>
                                </div>
                        </div>
                </section>
                <div class="modal fade" id="homepage_mod" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title" id="homepage_mod">REZERVASYON</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                                <div class="form booking-form formelements">
                                                        <div class="form-group">
                                                                <label class="control-label" for="childs">
                                                                        Tarih aralığını seçin...
                                                                </label>
                                                                <input type="text" name="daterange" id="daterangex">
                                                        </div>
                                                        <div class="form-group "
                                                                style="width: 50%;display: inline-block;padding-right:10px;float: left;">
                                                                <label class="control-label" for="adults">
                                                                        Yetişkin sayısı...
                                                                </label>
                                                                <input type="number" name="adults" id="adults"
                                                                        class="inputfocus">
                                                                <input type="hidden" name="formbilgi" id="formbilgi"
                                                                        value="rezervasyon2">
                                                        </div>
                                                        <div class="form-group "
                                                                style="width: 50%;display: inline-block;padding-left:10px;float: left;">
                                                                <label class="control-label" for="childs">
                                                                        Çocuk sayısı...
                                                                </label>
                                                                <input type="number" name="childs" id="childs">
                                                        </div>
                                                        <div class="form-group"></div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        Close
                                                </button>
                                                <button class="btn btn-primary" id="sendcoomment_button2"
                                                        name="sendcoomment_button2" type="button" onclick="">
                                                        Submit
                                                </button>
                                        </div>
                                </div>
                        </div>
                </div>
        </form>


        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-free-5.13.1-web/css/all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}" />
        <link rel="stylesheet" type="text/css"href="{{asset('assets/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" type="text/css"href="{{asset('assets/css/daterangepicker.css')}}" />

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
                function AjxCall(eleman, parametre) { $.ajax({ type: 'GET', url: 'ajx.aspx', cache: false, data: parametre, success: function (sonuc) { $('#' + eleman).html(sonuc); } }); }
                $('#sendcomment-button').click(function (e) {
                        var params1 = $('.form_elements').find('select, textarea, input').serialize();
                        $.ajax({
                                type: 'GET',
                                url: 'Ajx.aspx',
                                cache: false,
                                data: params1,
                                success: function (sonuc) {
                                        alert(sonuc);
                                        if (sonuc == "Gönderildi!") {
                                                $('#homepage_mod').modal('hide');
                                        }
                                }
                        });
                });
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