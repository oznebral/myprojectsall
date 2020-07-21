@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_PanelIcerik">
        <section id="home">
                <div class="container-fluid pad_remove">
                        <div class='bannerresim'
                                style="background-image: url('{{asset('assets/images/resim.png')}}');height: 340px;background-repeat: no-repeat;background-size: 100% auto;">
                        </div>
                </div>
        </section>
        <section id="preview"style="background-color:#fff">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h1 style="font-weight: 350; text-align:center">{{__('general.meeting-room')}}</h1>
                                        </div>
                                </div>
                                <div class='col-md-12 pad_remove' style='padding-right: 15px !important;'>
                                        <p>
                                                <h3>{{__('general.ece-meetings-hall-h3')}}</h3>
                                                {{__('general.ece-meetings-hall-p')}}<br/><br/>
                                                <h3>{{__('general.ufuk-meetings-hall-h3')}}</h3>
                                                {{__('general.ufuk-meetings-hall-p')}}<br/><br/>
                                                <h3>{{__('general.mirac-meetings-hall-h3')}}</h3>
                                                {{__('general.mirac-meetings-hall-p')}}<br/><br/>
                                        </p>
                                </div>
                        </div>
                </div>
                <div class='container-fluid'>
                        <div class='row padremove'>
                                <div class='col-md-12 block_info-wrapper'>
                                        <div class='block_info'>
                                                <h1 style='font-weight: 400;'>{{__('general.other')}}</h1>
                                                <div class='clearfix'></div>
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
                                                                        <p>{{__('general.la-carte-restaurant')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.la-carte-restaurant')}}</h2>
                                                                        <i class='btn'href='#'>{{__('general.more')}}</i>
                                                                </div>
                                                        </div>
                                                </a
                                        ></div>
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