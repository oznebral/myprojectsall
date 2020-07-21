@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_PanelIcerik">
        <section id="home">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Foyer - 1437714.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Foyer - 1437714.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437693.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437693.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby Bar - 1437724.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby Bar - 1437724.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437702.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Exterior - 1437702.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}"data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Hallway - 1437709.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href="{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}" data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                        </div>        
                </div>
        </section>
        <section id="preview"style="background-color:#fff">
                <a href='javascript:void(0)' class='tikback'style='position: absolute; left: 20px; color: #21304d;'>
                        <img class='prevbuttonlar a' src="{{asset('assets/images/prev.png')}}">
                </a>
                <a href='javascript:void(0)' class='tiknext'style='position: absolute; right: 20px; color: #21304d;'>
                        <img class='prevbuttonlar b' src="{{asset('assets/images/next.png')}}">
                </a>
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h2 style="font-weight: 250;text-align:center">{{__('general.social-area-room')}}</h2>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>
                                <div class='col-md-12 pad_remove' style='padding-right: 14px !important;'>
                                        <p>{{__('general.socialarea_p1')}}</p>
                                        <p>
                                                <h3>{{__('general.socialarea_h3')}}</h3>{{__('general.socialarea_p2')}}
                                        </p>
                                        <div class='block_feature'>
                                                <h3>{{__('general.socialarea_h3_li')}}</h3>
                                                <ul>
                                                        <li>{{__('general.socialarea_li_one_bed')}}</li><br/>
                                                        <li>{{__('general.socialarea_li_one_bunk')}}</li><br/>
                                                        <li>{{__('general.socialarea_li_one_sofabed')}}</li><br/>
                                                        <li>{{__('general.socialarea_roomwithvista')}}</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class='container-fluid'>
                        <div class='row padremove'>
                                <div class='col-md-12 block_info-wrapper'>
                                        <div class='block_info'>
                                                <h1 style='font-weight: 400;'>Diğer</h1>
                                                <div class='clearfix'></div>
                                        </div>
                                </div>
                        </div>
                        <div class='row padremove d-flex justify-content-center'>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby Bar - 1437724.jpg')}}');">
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
                                                                        <p>{{__('general.la-carte-restaurant')}}</p>
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
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Boardroom - 1437731.jpg')}}');">
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
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Fitness Center - 1437716.jpg')}}');">
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
                                <div class='col-md-4 alt'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}');">
                                                <a class='' href="{{route('ballroom',App::getLocale())}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.ball-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.ball-room')}}</h2>
                                                                        <i class='btn'href='/en/rooms/deluxe-rooms'>{{__('general.more')}}</i>
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