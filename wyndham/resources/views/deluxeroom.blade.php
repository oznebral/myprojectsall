@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_PanelIcerik">
        <section id="home">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div>
                                        <a href='Photos/Agac/358/DELUXE1.JPG' data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL 1 T Sofa Bed Family - 1437765.jpg')}}');">
                                                </div>
                                        </a>
                                </div>
                                <div>
                                        <a href='Photos/Agac/358/DELUXE3.JPG' data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Deluxe Terrace - 1437771.jpg')}}');">
                                                </div></a>
                                </div>
                                <div><a href='Photos/Agac/358/ZBATHROOM.JPG' data-fancybox='group1'data-caption=''>
                                                <div class='bgput'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Deluxe Terrace - 1437775.jpg')}}');">
                                                </div></a>
                                </div>
                        </div>
                </div>
        </section>
        <section id="preview" style="background-color:#fff">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h1 style="font-weight: 400;">{{__('general.deluxe-room')}}</h1>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>
                                <div class='col-md-8 pad_remove' style='padding-right: 15px !important;'>
                                        <p>{{__('general.deluxeroom_p1')}}</p>
                                                <div class='block_feature'>
                                                        <h2>{{__('general.deluxeroom_h3')}}</h2>
                                                        <li>{{__('general.deluxeroom_li-double-single')}}</li>
                                                        <li>{{__('general.deluxeroom_li-one-single')}}</li>
                                                        <li>{{__('general.deluxeroom_li-city-views')}}</li>
                                                </div>
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
                        </div>                                
                </div>
        </section>
</div>
@stop