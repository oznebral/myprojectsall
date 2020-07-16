@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
    
<div id="ctl00_ContentPlaceHolder1_PanelHomepage ">

<section id="homese">
        <div class="container-fluid pad_remove">
                <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'></div>
                <a href='javascript:void(0)' class='tikback'
                        style='position: absolute; left: 20px; color: #21304d;'><img
                                class='prevbuttonlar a' src='../images/prev.png'></a><a
                        href='javascript:void(0)' class='tiknext'
                        style='position: absolute; right: 20px; color: #21304d;'><img
                                class='prevbuttonlar b' src='../images/next.png'></a>
        </div>
</section>

<section id="our-hotel">
        <div class="container-fluid" style="/*margin-top:10px;*/">
                <div class="row hotel-about-size"
                        style="background-color:#dedede!important;">
                        <div class="col-md-12 block_info-wrapper text-center">
                                <div class="block_info">
                                        <h1 style="font-weight: 400;">TRYP BY WYNDHAM İSTANBUL
                                                ORAN</h1>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 15px !important;">
                                <h3></h3>
                                <p>
                                <div id="carouselSlidesOnly" class="carousel slide"
                                        data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                        <img class="d-block img-fluid"
                                                                src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437704.jpg')}}" 
                                                                alt="">
                                                </div>
                                                <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                                src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437702.jpg')}}" 
                                                                alt="">
                                                </div>
                                                <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                                src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Business Center - 1437699.jpg')}}" 
                                                                alt="">
                                                </div>
                                                <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                                src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}" 
                                                                alt="">
                                                </div>
                                                <div class="carousel-item">
                                                        <img class="d-block img-fluid"
                                                                src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}" 
                                                                alt="">
                                                </div>
                                                <a class="carousel-control-prev"
                                                        href="#carouselSlidesOnly" role="button"
                                                        data-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next"
                                                        href="#carouselSlidesOnly" role="button"
                                                        data-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                </a>
                                        </div>
                                </div>
                                </p>
                        </div>
                        <div class="col-md-6" style="padding-right: 15px !important;">
                                <h3>OTELİMİZ</h3>
                                <p>
                                <p>
                                        <span style="font-size:18px;">Wyndham Hotels &amp;
                                                Resorts chain in Turkey and opened the fourth
                                                Tryp By Wyndham Ankara; Çankaya Oran, which is
                                                the center of modern life and entertainment, is
                                                located in Diplomatic region, 30 minutes to
                                                Esenboğa Airport and 15 minutes to the city
                                                center. It is within walking distance of Panora
                                                Shopping Center.</span></p>
                                <p>
                                        <span style="font-size:18px;">Tryp By Wyndham Ankara is
                                                committed to providing you with the confidence,
                                                peace and quality of your business trip.</span>
                                </p>
                                <p>
                                        <span style="font-size:18px;">The 46 rooms at the Tryp
                                                By Wyndham Ankara have its own style and modern
                                                amenities. There are 30 standard rooms, 15
                                                Deluxe rooms and 1 Terrace Suite room in our
                                                hotel which has four types of rooms.</span></p>
                                </p>
                        </div>
                </div>
        </div>
</section>


</div>
@stop