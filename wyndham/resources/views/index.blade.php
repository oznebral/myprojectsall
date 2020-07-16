@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section id="home">
                                <div class="container-fluid">
                                        <div id="carouselhome" class="carousel slide" data-ride="carousel">
                                                <div class='carousel-inner homeslider carousel-fade'>
                                                        <div class='carousel-item active'><img class='d-block w-100'
                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437704.jpg')}}">
                                                                <div class='slider-yazi'>Make your business and
                                                                        family<br />TRYP to İstanbul impeccable
                                                                </div>
                                                        </div>
                                                        <div class='carousel-item'><img class='d-block w-100'
                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}">
                                                                <div class='slider-yazi'>Make your business and
                                                                        family<br />TRYP to İstanbul impeccable
                                                                </div>
                                                        </div>
                                                        <div class='carousel-item'><img class='d-block w-100'
                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}">
                                                                <div class='slider-yazi'></div>
                                                        </div>
                                                        <div class='carousel-item'><img class='d-block w-100'
                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Long Boardroom Table - 1437736.jpg')}}">
                                                                <div class='slider-yazi'></div>
                                                        </div>
                                                        <div class='carousel-item'><img class='d-block w-100'
                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437702.jpg')}}">
                                                                <div class='slider-yazi'></div>
                                                        </div>
                                                </div>
                                                <div class="position-absolute" style="bottom: 0; left: 0; right: 0;">
                                                        <div class="container-fluid">
                                                                <div class="row">
                                                                        <div class="col-2 weather">
                                                                                <h2 class="weather-h2">
                                                                                        <i class="" id="resim"></i>
                                                                                        <div id="derece"></div>
                                                                                </h2>
                                                                        </div>
                                                                        <div class="col-2 time">
                                                                                <h2 id="this-time">
                                                                                        <i class="far fa-clock"></i>
                                                                                </h2>
                                                                                <h6 id="this-date"></h6>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <a class="carousel-control-prev carouselgeri" href="#carouselhome"
                                                        data-slide="prev">
                                                        <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next carouselileri" href="#carouselhome"
                                                        data-slide="next">
                                                        <span class="carousel-control-next-icon"></span>
                                                </a>
                                        </div>
                                </div>
                        </section>
                        <section id="our-hotel">
                                <div class="container-fluid">
                                        <div class="row hotel-about-size"
                                                style="background-color:#dedede!important;">
                                                <div class="col-md-12 block_info-wrapper text-center">
                                                        <div class="block_info">
                                                                <h1 style="font-weight: 400;">
                                                                        TRYP BY WYNDHAM İSTANBUL TOPKAPI
                                                                </h1>
                                                                <div class="clearfix"></div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6" style="padding-right: 15px !important;">
                                                        <p>
                                                        <div id="carouselSlidesOnly" class="carousel slide"
                                                                data-ride="carousel">
                                                                <div class="carousel-inner" role="listbox">
                                                                        <div class="carousel-item active">
                                                                                <img class="d-block img-fluid"  
                                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}"
                                                                                                alt="">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                                <img class="d-block img-fluid"
                                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437704.jpg')}}"
                                                                                        alt="">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                                <img class="d-block img-fluid"
                                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}"
                                                                                        alt="">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                                <img class="d-block img-fluid"
                                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437702.jpg')}}"
                                                                                        alt="">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                                <img class="d-block img-fluid"
                                                                                        src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437688.jpg')}}"
                                                                                        alt="">
                                                                        </div>
                                                                        <a class="carousel-control-prev"
                                                                                href="#carouselSlidesOnly" role="button"
                                                                                data-slide="prev">
                                                                                <span class="carousel-control-prev-icon"
                                                                                        aria-hidden="true">
                                                                                </span>
                                                                                <span class="sr-only">
                                                                                        Previous
                                                                                </span>
                                                                        </a>
                                                                        <a class="carousel-control-next"
                                                                                href="#carouselSlidesOnly" role="button"
                                                                                data-slide="next">
                                                                                <span class="carousel-control-next-icon"
                                                                                        aria-hidden="true">
                                                                                </span>
                                                                                <span class="sr-only">
                                                                                        Next
                                                                                </span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                        </p>
                                                </div>
                                                <div class="col-md-6" style="padding-right: 15px !important;">
                                                        <h3>{{__('general.ourhotel')}}</h3>
                                                        <p>
                                                                <p>
                                                                        <span style="font-size:18px;">{{__('general.ourhotel')}} &amp;{{__('general.mainpage1')}}</span>
                                                                </p>
                                                                <p>
                                                                        <span style="font-size:18px;">{{__('general.mainpage2')}}</span>
                                                                </p>
                                                                <p>
                                                                        <span style="font-size:18px;">{{__('general.mainpage2')}}</span>
                                                                </p>
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                        </section>
                        <section id='rooms'>
                                <div class='container-fluid'>
                                        <div class='row padremove-bottom rooms_class'>
                                                <div class='col-md-6'>
                                                        <div class='col-md-12 pad_remove galeris' style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 Q Suite - 1437783.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('standartroom')}}">
                                                                        <div class='near text-center lineheightoda'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.stroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.stroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn' href=''>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Deluxe Terrace - 1437771.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('deluxeroom')}}">
                                                                        <div class='near text-center lineheightoda'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.dxroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.dxroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn' href=''>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6 alt'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('lobby')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.sroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.sroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn'
                                                                                                href='/en/rooms/deluxe-rooms'>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6 alt'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('restaurant')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.res')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.res')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn'
                                                                                                href='/en/rooms/deluxe-rooms'>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6 alt'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Long Boardroom Table - 1437736.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('meetingroom')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.mtroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.mtroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn'
                                                                                                href='/en/rooms/deluxe-rooms'>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6 alt'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('mediaroom')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.mdroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.mdroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn'
                                                                                                href='/en/rooms/deluxe-rooms'>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6 alt'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437688.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('ballroom')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.blroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.blroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn'
                                                                                                href='/en/rooms/deluxe-rooms'>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class='col-md-6 alt'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                        style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Fitness Center - 1437716.jpg')}}');height: 345.5px;">
                                                                <a class='' href="{{route('fitness')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>{{__('general.ftroom')}}</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>{{__('general.ftroom')}}</h2>
                                                                                        <span></span>
                                                                                        <i class='btn'
                                                                                                href='/en/rooms/deluxe-rooms'>MORE</i>
                                                                                </div>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </div>
                                                <section id='contact'></section>
                                                <div class='container-fluid' id=>
                                                        <div class='row padremove-bottom bg-white contact-size-bring'>
                                                                <div class='col-md-3'
                                                                        style='padding-left: 15px !important; margin: auto 0;'>
                                                                        <h2 class=''
                                                                                style='font-weight: 400; padding:10px 0 20px 0;'>
                                                                                contact
                                                                        </h2>
                                                                        <div style='width:100%;'>
                                                                                <h3 style='font-weight: 300;display:inline-block;'
                                                                                        class='adresbaslik'>Adress
                                                                                </h3>
                                                                        </div>
                                                                        <p>
                                                                                Seyitnizam, Mevlana Caddesi, Zeytinburnu/İstanbul
                                                                        </p>
                                                                        <b>
                                                                                <i class='fas fa-phone'
                                                                                        style='color: #e40387;'>
                                                                                </i>
                                                                        </b>
                                                                        <a
                                                                                style='color: #21304d;'
                                                                                href='tel:+90 312 491 77 88'> +90 312
                                                                                491 77 88
                                                                        </a><br>
                                                                        <b>
                                                                                <i class='fas fa-fax' style='color: #e40387;'></i>
                                                                        </b>
                                                                        <a
                                                                                style='color: #21304d;'
                                                                                href='tel:+90 312 491 13 31'> +90 312
                                                                                491 13 31
                                                                        </a><br>
                                                                        <label >
                                                                                <i
                                                                                        class='fas fa-envelope'
                                                                                        style='color: #e40387;'>
                                                                                </i>
                                                                                <a
                                                                                        style='color: #21304d;'
                                                                                        href='mailto:info@tryptbywyndhamtopkapi.com'>
                                                                                        info@trypbywyndhamtopkapi.com
                                                                                </a>
                                                                        </label>
                                                                </div>
                                                                <div class='col-md-9'>
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12043.000362966559!2d28.9059534!3d41.0088428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa57279db665ced96!2sTryp%20by%20Wyndham%20Istanbul%20Topkapi!5e0!3m2!1sen!2str!4v1594730126584!5m2!1sen!2str"
                                                                         width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                                                                        </iframe>
                                                                </div>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </section>
@stop