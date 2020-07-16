@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<div id="ctl00_ContentPlaceHolder1_panelanasayfa"style='background-color:#fff'>

<section id="homese">
        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                <div><a href='Photos/Agac/341/SPA.JPG' data-fancybox='group1'
                                data-caption=''>
                                <div class='bgkoy'
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                </div>
                        </a></div>
                <div><a href='Photos/Agac/341/SPA__1_.JPG' data-fancybox='group1'
                                data-caption=''>
                                <div class='bgkoy'
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437693.jpg')}}');">
                                </div>
                        </a></div>
                <div><a href='Photos/Agac/341/SPA__9_.JPG' data-fancybox='group1'
                                data-caption=''>
                                <div class='bgkoy'
                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Fitness Center - 1437716.jpg')}}');">
                                </div>
                        </a></div>
        </div>
</section>
<section id="ctl00_ContentPlaceHolder1_previews">
        <div class="container" style="padding-bottom: 20px;">
                <div class="col-md-12 block_info-wrapper">
                        <div class="block_info">
                                <h1 style="font-weight: 400;">HİZMETLER</h1>
                                <div class="clearfix"></div>
                        </div>
                </div>
        </div>
        <div class="container" style="padding-bottom: 20px;">

        </div>
</section>
<section id='cesitlerx'>
        <div class='container-fluid'>
                <div class='row padremove rooms_class d-flex justify-content-center'>
                        <div class='col-md-4'>
                                <div class='col-md-12 pad_remove galeris'
                                        style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Lobby - 1437720.jpg')}}');">
                                        <a class='' href="{{route('lobby')}}">
                                                <div class='near text-center lineheightoda'>
                                                        <div class='title-block'>
                                                                <p>SOSYAL ALAN(LOBİ)</p>
                                                        </div>
                                                        <div class='detailsx'>
                                                                <h2>SOSYAL ALAN(LOBİ)</h2>
                                                                <span></span><i class='btn'
                                                                        href=''>MORE</i>
                                                        </div>
                                                </div>
                                        </a></div>
                        </div>
                        <div class='col-md-4'>
                                <div class='col-md-12 pad_remove galeris'
                                        style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437690.jpg')}}');">
                                        <a class='' href="{{route('restaurant')}}">
                                                <div class='near text-center lineheightoda'>
                                                        <div class='title-block'>
                                                                <p>A LA CARTE RESTORANT</p>
                                                        </div>
                                                        <div class='detailsx'>
                                                                <h2>A LA CARTE RESTORANT</h2>
                                                                <span></span><i class='btn'
                                                                        href=''>MORE</i>
                                                        </div>
                                                </div>
                                        </a></div>
                        </div>
                        <div class='col-md-4'>
                                <div class='col-md-12 pad_remove galeris'
                                        style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Meeting Room - Round Boardroom Table - 1437727.jpg')}}');">
                                        <a class='' href="{{route('meetingroom')}}">
                                                <div class='near text-center lineheightoda'>
                                                        <div class='title-block'>
                                                                <p>TOPLANTI SALONU</p>
                                                        </div>
                                                        <div class='detailsx'>
                                                                <h2>TOPLANTI SALONU</h2>
                                                                <span></span><i class='btn'
                                                                        href=''>MORE</i>
                                                        </div>
                                                </div>
                                        </a></div>
                        </div>
                        <div class='col-md-4'>
                                <div class='col-md-12 pad_remove galeris'
                                        style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                        <a class='' href="{{route('mediaroom')}}">
                                                <div class='near text-center lineheightoda'>
                                                        <div class='title-block'>
                                                                <p>MEDYA ODASI</p>
                                                        </div>
                                                        <div class='detailsx'>
                                                                <h2>MEDYA ODASI</h2>
                                                                <span></span><i class='btn'
                                                                        href=''>MORE</i>
                                                        </div>
                                                </div>
                                        </a></div>
                        </div>
                </div>
        </div>
</section>

</div>
@stop
