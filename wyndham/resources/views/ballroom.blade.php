@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
   <div id="ctl00_ContentPlaceHolder1_PanelIcerik" style="background-color:#fff">
        <section id="home">
                <div class="container-fluid pad_remove">
                        <div class='multiple-items overflow-hidden' style='margin-bottom: 10px;'>
                                <div><a href='Photos/Agac/341/SPA.JPG' data-fancybox='group1'
                                                data-caption=''>
                                                <div class='bgkoy'
                                                        style="background-position: center center;height: 35vh;background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - Breakfast Area - 1437688.jpg')}}');">
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
                                                <h1 style="font-weight: 400;">DERYA BALO SALONU</h1>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>

                                <div class='col-md-12 pad_remove' style='padding-right: 15px !important;'>
                                        <p>
                                                Farklı boyutlarda gruplar için farklı boyutlarda tasarlanan ve gün ışığı alan Derya Balo Salonu'nda; Özel balo salonları, iş yemekleri, eğitim seminerleri, düğünler ve çeşitli eğlenceler. <br/>

                                                Barkovizyon, tepegöz, beyaz tahta, kağıtlı sunum tahtası, ses donanımı, mikrofon, wi-fi bağlantısı içeren çeşitli ekipmanlara sahip tüm toplantı odaları <br/>
                                                
                                                Size enerji sağlamak için ücretsiz adil ticaret kahve ve çay dahil olmak üzere atıştırmalıklar ve içecekler sunacağız. Gününüze birçok organik ve sağlıklı seçenek içeren açık büfe kahvaltı ile başlayın ve çeşitli akşam yemeği menüsünden bir yemeğin tadını çıkarın.
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
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Media Room - 1437742.jpg')}}');">
                                                <a class='' href="{{route('mediaroom')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>MEDYA ODASI</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>MEDYA ODASI</h2>
                                                                        <span></span><i class='btn'
                                                                                href='#'>MORE</i>
                                                                </div>
                                                        </div>
                                                </a></div>
                                </div>
                                <div class='col-md-4 alt2'>
                                        <div class='col-md-12 pad_remove galeris'
                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 1 DBL Fitness Room - 1437749.jpg')}}');">
                                                <a class='' href="{{route('fitness')}}">
                                                        <div class='near text-center lineheight'>
                                                                <div class='title-block'>
                                                                        <p>FİTNESS</p>
                                                                </div>
                                                                <div class='detailsx'>
                                                                        <h2>FİTNESS</h2><span></span><i
                                                                                class='btn'
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