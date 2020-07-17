@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
   <div id="ctl00_ContentPlaceHolder1_PanelIcerik" style="background-color:#fff">
        <section id="home">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div>
                                        <a href='Photos/Agac/341/SPA.JPG' data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437688.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                        </div>
                </div>
        </section>
        <section id="preview">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h1 style="font-weight: 400;">{{__('general.ball-room-h1')}}</h1>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>
                                <div class='col-md-12 pad_remove' style='padding-right: 15px !important;'>
                                        <p>{{__('general.ball-room-p')}}</p>
                                </div>
                        </div>
                </div>
                <div class='container-fluid'>
                        <div class='row padremove'>
                                <div class='col-md-12 block_info-wrapper'>
                                        <div class='block_info'>
                                                <h1 style='font-weight: 400;'>{{__('general.other')}}</h1>
                                        </div>
                                </div>
                        </div>
                        <div class='row padremove d-flex justify-content-center'>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');">
                                                <a class='' href="{{route('lobby')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.social-area-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.social-area-room')}}</h2>
                                                                        <i class='btn'href='#'>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}');">
                                                <a class='' href="{{route('restaurant')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.more')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.la-carte-restaurant')}}</h2>
                                                                        <i class='btn'href='#'>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Long Boardroom Table - 1437736.jpg')}}');">
                                                <a class='' href="{{route('meetingroom')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.meeting-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.meeting-room')}}</h2>
                                                                        <i class='btn'href='#'>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                                <a class='' href="{{route('mediaroom')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.media-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.media-room')}}</h2>
                                                                        <i class='btn'href='#'>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Fitness Room - 1437749.jpg')}}');">
                                                <a class='' href="{{route('fitness')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.fitness-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.fitness-room')}}</h2>
                                                                        <i class='btn'href='#'>{{__('general.more')}}</i>
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