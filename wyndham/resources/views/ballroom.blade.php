@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
   <div id="ctl00_ContentPlaceHolder1_PanelIcerik" style="background-color:#fff">
   <div class="container">   
                <img src="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437688.jpg')}}" class="img-rounded" alt="Cinque Terre" width="100%" height="400"> 
        </div>
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
                                                <a class='' href="{{route('lobby',App::getLocale())}}">
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
                                                <a class='' href="{{route('restaurant',App::getLocale())}}">
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
                                                <a class='' href="{{route('meetingroom',App::getLocale())}}">
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
                                                <a class='' href="{{route('mediaroom',App::getLocale())}}">
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
                                                <a class='' href="{{route('fitness',App::getLocale())}}">
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