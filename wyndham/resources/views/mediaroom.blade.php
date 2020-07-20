@extends('layouts.master')
@section('title', 'Page Title')

@section('content')

<div id="ctl00_ContentPlaceHolder1_PanelIcerik"style="background-color:#fff">
        <section id="home" >
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div class='bgput '
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                </div>
                        </div>
                </div>
        </section>
        <section id="preview">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h1 style="font-weight: 400;">{{__('general.media-room')}}</h1>
                                                {{__('general.media-room-p')}}
                                        </div>
                                </div>
                                <div class='col-md-12 pad_remove' style='padding-right: 15px !important;'>
                                        <h3>{{__('general.media-room-h3')}}</h3>
                                        <ul>
                                                <li> {{__('general.media-room-li-bed')}}</li>
                                                <li> {{__('general.media-room-li-double-bed')}}</li>
                                                <li> {{__('general.media-room-li-city-views')}}</li>

                                        </ul>
                                                
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
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');">
                                                <a class='' href="{{route('lobby')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>SOSYAL ALAN(LOBİ))</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>SOSYAL ALAN(LOBİ)</h2>
                                                                        <i class='btn'href='#'>MORE</i>
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
                                                                        <p>A LA CARTE RESTORANT</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>A LA CARTE RESTORANT</h2>
                                                                        <i class='btn'href='#'>MORE</i>
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
                                                                        <p>TOPLANTI SALONU</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>TOPLANTI SALONU</h2>
                                                                        <i class='btn'href='#'>MORE</i>
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