@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
    
<div id="ctl00_ContentPlaceHolder1_PanelHomepage ">
        <section id="homese">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'></div>
                        <a href='javascript:void(0)' class='tikback'style='position: absolute; left: 20px; color: #21304d;'>
                                <img class='prevbuttonlar a' src="{{asset('assets/images/prev.png')}}"></a>
                        <a href='javascript:void(0)' class='tiknext' style='position: absolute; right: 20px; color: #21304d;'>
                                <img class='prevbuttonlar b' src="{{asset('assets/images/next.png')}}"></a>
                </div>
        </section>

        <section id="our-hotel">
                <div class="container-fluid" style="/*margin-top:10px;*/">
                        <div class="row hotel-about-size"
                                style="background-color:#dedede!important;">
                                <div class="col-md-12 block_info-wrapper text-center">
                                        <div class="block_info">
                                                <h1 style="font-weight: 400;">{{__('general.tryp-by-wyndham-istanbul')}}</h1>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 15px !important;">
                                        <div id="carouselSlidesOnly" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                        <div class="carousel-item active">
                                                                <img class="d-block img-fluid"src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437704.jpg')}}" alt="">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block img-fluid"src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437702.jpg')}}" alt="">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block img-fluid"src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Business Center - 1437699.jpg')}}" alt="">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block img-fluid"src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}" alt="">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block img-fluid"src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}" alt="">
                                                        </div>
                                                        <a class="carousel-control-prev"href="#carouselSlidesOnly" role="button"data-slide="prev">
                                                                <span class="carousel-control-prev-icon"aria-hidden="true"></span>
                                                                <span class="sr-only"></span>
                                                        </a>
                                                        <a class="carousel-control-next"href="#carouselSlidesOnly" role="button"data-slide="next">
                                                                <span class="carousel-control-next-icon"aria-hidden="true"></span>
                                                                <span class="sr-only"></span>
                                                        </a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 15px !important;">
                                        <h3>{{__('general.our-hotel')}}</h3>
                                        <p>
                                                <span style="font-size:18px;">{{__('general.our-hotel-p1')}}</span></p>
                                        <p>
                                                <span style="font-size:18px;">{{__('general.our-hotel-p2')}}</span></p>
                                        <p>
                                                <span style="font-size:18px;">{{__('general.our-hotel-p3')}}</span></p>
                                </div>
                        </div>
                </div>
        </section>
</div>
@stop