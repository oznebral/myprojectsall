@extends('layouts.master')
@section('title', 'Page Title')

@section('content')

<div id="ctl00_ContentPlaceHolder1_PanelIcerik"style="background-color:#fff">
        <section id="home" >
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div><a href='Photos/Agac/341/SPA.JPG' data-fancybox='group1'
                                                data-caption=''>
                                                <div class='bgkoy '
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                                </div>
                                        </a></div>
                        </div>
                </div>
        </section>
        <section id="preview">
                <div class="container" style="padding-bottom: 20px;">
                        <div class="row">
                                <div class="col-md-12 block_info-wrapper">
                                        <div class="block_info">
                                                <h1 style="font-weight: 400;">MEDYA ODASI</h1>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>

                                <div class='col-md-12 pad_remove' style='padding-right: 15px !important;'>
                                        <p>
                                                Evden uzakta olsa bile gençlik ateşi söndürülmeyecektir.<br/>
                                                Bu konaklama biriminin bir kısmı playstation, dvd oynatıcı ve düz ekran ile donatılmıştır.
                                        </p>
                                        <p>
                                                <ul>
                                                        <li>
                                                                Oda (25 metrekare)</li>
                                                        <li>
                                                                1 Çift Kişilik Yatak</li>
                                                        <li>
                                                                1 Çift Kişilik Yatak (180 * 200)</li>
                                                        <li>
                                                                Şehir manzaralı oda</li>
                                                
                                        </p>
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
                                                                        <span></span><i class='btn'
                                                                                href='#'>MORE</i>
                                                                </div>
                                                        </div>
                                                </a></div>
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
                                                                        <span></span><i class='btn'
                                                                                href='#'>MORE</i>
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
                                                                        <p>TOPLANTI SALONU</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>TOPLANTI SALONU</h2>
                                                                        <span></span><i class='btn'
                                                                                href='#'>MORE</i>
                                                                </div>
                                                        </div>
                                                </a></div>
                                </div>
                                
                        </div>
                </div>
        </section>
</div>
@stop