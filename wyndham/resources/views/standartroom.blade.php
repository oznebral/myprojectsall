@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_PanelIcerik">
        <section id="home">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div>
                                        <a href='Photos/Agac/337/STANDARTROOM_1_.JPG'data-fancybox='group1' data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL 1 T Sofa Bed Family - 1437765.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href='Photos/Agac/337/STANDARTROOM_4_.JPG'data-fancybox='group1' data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Guestroom Bathroom - 1437680.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href='Photos/Agac/337/ZBATHROOM.JPG' data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                        </div>
                </div>
        </section>
        <section id="preview" style="background-color:#fff">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h1 style="font-weight: 400;">{{__('general.standart-room')}}</h1>
                                        </div>
                                </div>
                                <div class='col-md-8 pad_remove' style='padding-right: 15px !important;'>
                                        <u><strong>{{__('general.standart-room-detail')}}</strong></u>
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
                                        <div class='block_feature'>
                                                <h3>{{__('general.room-easy')}}</h3>
                                                <ul>
                                                        <li>
                                                                <i class='fa fa-wifi'aria-hidden='true'></i>{{__('general.li-wireless')}}
                                                        </li>
                                                        <li>
                                                        <i class='fa fa-snowflake'aria-hidden='true'></i>{{__('general.li-in-room-safe')}}
                                                        </li>
                                                        <li>
                                                                <i class='fa fa-lock'aria-hidden='true'></i>{{__('general.li-tv')}}
                                                        </li>
                                                        <li>
                                                                <i class='fa fa-phone'aria-hidden='true'></i>{{__('general.li-minibar')}}
                                                        </li>
                                                        <li>
                                                                <i class='fa fa-tv' aria-hidden='true'></i>{{__('general.li-air-conditioning')}}
                                                        </li>
                                                        <li>
                                                                <i class='fa fa-shower'aria-hidden='true'></i>{{__('general.li-phone')}}
                                                        </li>
                                                        <li>
                                                                <i class='fa fa-glass-martini'aria-hidden='true'></i>{{__('general.li-shower')}}
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                                <div id="ctl00_ContentPlaceHolder1_rezekran" class="col-md-4 pad_remove">
                                        <div class="block_aside-wrapper">
                                                <div class="block_aside">
                                                        <h3>{{__('general.booknow')}}</h3>
                                                        <div class="form booking-form formelements">
                                                                <div class="form-group">
                                                                        <label class="control-label" for="childs">{{__('general.booknow-date')}}</label>
                                                                        <input type="text" name="daterange" id="daterangex">
                                                                </div>
                                                                <div class="form-group "style="width: 50%;display: inline-block;padding-right:10px;float: left;">
                                                                        <label class="control-label" for="adults">{{__('general.booknow-adult')}}</label>
                                                                        <input type="number" name="adults" id="adults" class="inputfocus">
                                                                        <input type="hidden" name="formbilgi" id="formbilgi"value="rezervasyon2">
                                                                </div>
                                                                <div class="form-group " style="width: 50%;display: inline-block;padding-left:10px;float: left;">
                                                                        <label class="control-label" for="childs">{{__('general.booknow-child')}}</label>
                                                                        <input type="number" name="childs" id="childs">
                                                                </div>
                                                                <div class="form-group">
                                                                        <div>
                                                                                <button class="btnblue btn-primary"id="sendcoomment_button2"name="sendcoomment_button2"type="button"onclick="">{{__('general.booknow-submit')}}</button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
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
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Deluxe Terrace - 1437771.jpg')}}');">
                                                <a class='' href="{{route('deluxeroom')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>{{__('general.deluxe-room')}}</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>{{__('general.deluxe-room')}}</h2>
                                                                        <i class='btn'href='#'>MORE</i>
                                                                </div>
                                                        </div>
                                                </a></div>
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
                                                                        <i class='btn'href='#'>MORE</i>
                                                                </div>
                                                        </div>
                                                </a></div>
                                </div>
                        </div>
                </div>
        </section>
</div>
@stop
