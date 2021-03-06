@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_panelanasayfa"style='background-color:#fff'>
        <section id="homese">
                <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                        <div>
                                <div class='bgput'
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                </div>
                        </div>
                        <div>
                                <div class='bgput'
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437693.jpg')}}');">
                                </div>
                        </div>
                        <div>
                                <div class='bgput'
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Fitness Center - 1437716.jpg')}}');">
                                </div>
                        </div>
                </div>
        </section>
        <section id="ctl00_ContentPlaceHolder1_previews">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="col-md-12 block_info-wrapper">
                                <div class="block_info">
                                        <h1 style="font-weight: 400;">{{__('general.facilities')}}</h1>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
                </div>
        </section>
        <section id='cesitlerx'>
                <div class='container-fluid'>
                        <div class='row padremove rooms_class d-flex justify-content-center'>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');">
                                                <a class='' href="{{route('lobby',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.social-area-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.social-area-room')}}</h2>
                                                                        <i class='btn'href=''>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}');">
                                                <a class='' href="{{route('restaurant',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.la-carte-restaurant')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.la-carte-restaurant')}}</h2>
                                                                        <i class='btn'href=''>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Round Boardroom Table - 1437727.jpg')}}');">
                                                <a class='' href="{{route('meetingroom',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.meeting-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.meeting-room')}}</h2>
                                                                        <i class='btn'href=''>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4'>
                                        <div class='col-md-12 pad_remove galeris'style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                                <a class='' href="{{route('mediaroom',App::getLocale())}}">
                                                        <div class='near text-center lineheightoda'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.media-room')}}</p>
                                                                </div>
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
