@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_PanelHomepage">
        <section id="homese">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL 1 T Sofa Bed Family - 1437765.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL 1 T Sofa Bed Family - 1437765.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Deluxe Terrace - 1437771.jpg')}}"data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Deluxe Terrace - 1437771.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Guestroom Bathroom - 1437680.jpg')}}"data-fancybox='group1' data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Guestroom Bathroom - 1437680.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Fitness Room - 1437749.jpg')}}"data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Fitness Room - 1437749.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437745.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437745.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Accessible Bathroom - 1437683.jpg')}}"data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Accessible Bathroom - 1437683.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Fitness Room - 1437750.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Fitness Room - 1437750.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                        </div>
                        <a href='javascript:void(0)' class='tikback'style='position: absolute; left: 20px; color: #21304d;'>
                                <img class='prevbuttonlar a' src="{{asset('assets/images/prev.png')}}">
                        </a>
                        <a href='javascript:void(0)' class='tiknext'style='position: absolute; right: 20px; color: #21304d;'>
                                <img class='prevbuttonlar b' src="{{asset('assets/images/next.png')}}">
                        </a>
                </div>
        </section>
        <section id="ctl00_ContentPlaceHolder1_previews" style="background-color:#fff">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="col-md-12 block_info-wrapper">
                                <div class="block_info">
                                        <h1 style="font-weight: 400;"><br/>{{__('general.rooms')}}</h1>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
                </div>
                <div class="container" style="padding-bottom: 20px;">
                        <p>{{__('general.standart-room-detail')}}</p>
                        <u><strong>{{__('general.room-types-properties')}}</strong></u>
                        <ul>
                                <li>{{__('general.li-wifi')}}</li>
                                <li>{{__('general.li-lcd')}}</li>
                                <li>{{__('general.li-minibar')}}</li>
                                <li>{{__('general.li-phone')}}</li>
                                <li>{{__('general.li-air-conditioning')}}</li>
                                <li>{{__('general.li-window')}}</li>
                                <li>{{__('general.li-fire-system')}}</li>
                                <li>{{__('general.li-bathroom-supplies')}}</li>
                                <li>{{__('general.li-bathrobe')}}</li>
                                <li>{{__('general.li-hair-dryer')}}</li>
                                <li>{{__('general.li-safe')}}</li>
                                <li>{{__('general.li-tea-coffe')}}</li>
                        </ul>
                </div>
        </section>
        <section id='cesitlerx'>
                <div class='container-fluid'>
                        <div class='row padremove rooms_class d-flex justify-content-center'>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 Q Suite - 1437783.jpg')}}');height: 345.5px;">
                                                <a class='' href="{{route('standartroom',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.standart-room')}}</p></div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.standart-room')}}</h2>
                                                                        <i class='btn'href=''>{{__('general.more')}}</i></div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 2 T Accessible - 1437758.jpg')}}');height: 345.5px;">
                                                <a class='' href="{{route('deluxeroom',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.deluxe-room')}}</p></div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.deluxe-room')}}</h2>
                                                                        <i class='btn'href=''>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image: url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');height: 345.5px;">
                                                <a class='' href="{{route('mediaroom',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.media-room')}}</p></div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.media-room')}}</h2>
                                                                        <i class='btn'href=''>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
</div>
@stop