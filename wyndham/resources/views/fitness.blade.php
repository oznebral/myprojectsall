@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section id="preview"style="background-color:#fff">
                                <div class="container" style="padding-bottom: 20px;">
                                        <div class="row">
                                                <div class="col-md-12 block_info-wrapper">
                                                        <div class="block_info">
                                                                <h1 style="font-weight: 400;">FİTNESS ODASI</h1>
                                                                <div class="clearfix"></div>
                                                        </div>
                                                </div>

                                                <div class='col-md-8 pad_remove' style='padding-right: 15px !important;'>
                                                        <p>
                                                                <p>
                                                                        Şehrin nabzı kalp atışınızı hızlandırmak için yeterli değilse,
                                                                        TRYP'nizi farklı yapın ve fitness salonlarımızda kalın.<br/>
                                                                        Tüm fitness salonlarımızda kral boy yatak, üst düzey sanal fitness döngüsü, 
                                                                        talep üzerine fitness, mini bar, geniş banyo, ekstra şişe su ve havlu temin edilmektedir. 
                                                                        Serinlerken ve dinlenirken ücretsiz Wi-Fi erişimine ve oda içi akış olanaklarına da erişebilirsiniz.
                                                                </p>
                                                        <ul>
                                                                <li>
                                                                        Oda (30 metrekare)</li>
                                                                <li>
                                                                        1 Çift Kişilik Yatak</li>
                                                                <li>
                                                                        1 Çift Kişilik Yatak (180 * 200)</li>
                                                                <li>
                                                                        Şehir manzaralı oda</li>
                                                        </ul>
                                                        </p>
                                                </div>

                                                <div id="ctl00_ContentPlaceHolder1_rezekran" class="col-md-4 pad_remove">
                                                        <div class="block_aside-wrapper">
                                                                <div class="block_aside">
                                                                        <h3>Rezervasyon</h3>
                                                                        <div class="form booking-form formelements">
                                                                                <div class="form-group">
                                                                                        <label class="control-label"
                                                                                                for="childs">Select date
                                                                                                range...</label>
                                                                                        <input type="text"
                                                                                                name="daterange"
                                                                                                id="daterangex">
                                                                                </div>
                                                                                <div class="form-group "
                                                                                        style="width: 50%;display: inline-block;padding-right:10px;">
                                                                                        <label class="control-label"
                                                                                                for="adults">Number of
                                                                                                adults</label>
                                                                                        <input type="number"
                                                                                                name="adults"
                                                                                                id="adults"
                                                                                                class="inputfocus">
                                                                                        <input name="ctl00$ContentPlaceHolder1$idne"
                                                                                                type="hidden"
                                                                                                id="ctl00_ContentPlaceHolder1_idne"
                                                                                                class="idne"
                                                                                                value="337" />
                                                                                        <input name="ctl00$ContentPlaceHolder1$rezname"
                                                                                                type="hidden"
                                                                                                id="ctl00_ContentPlaceHolder1_rezname"
                                                                                                class="rezname"
                                                                                                value="STANDART ROOM" />
                                                                                        <input type="hidden"
                                                                                                name="formbilgi"
                                                                                                id="formbilgi"
                                                                                                value="rezervasyon">
                                                                                </div>
                                                                                <div class="form-group "
                                                                                        style="width: 50%;display: inline-block;padding-left:10px;">
                                                                                        <label class="control-label"
                                                                                                for="childs">Number of
                                                                                                childs</label>
                                                                                        <input type="number"
                                                                                                name="childs"
                                                                                                id="childs">
                                                                                </div>


                                                                                <div class="form-group">
                                                                                        <div>
                                                                                                <button class="btnblue btn-primary"
                                                                                                        id="sendcoomment_button2"
                                                                                                        name="sendcoomment_button2"
                                                                                                        type="button"
                                                                                                        onclick="">Submit</button>
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
                                                                <h1 style='font-weight: 400;'>Diğer</h1>
                                                                <div class='clearfix'></div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class='row padremove d-flex justify-content-center'>
                                                <div class='col-md-4 alt2'>
                                                        <div class='col-md-12 pad_remove galeris'
                                                                style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 2 T Accessible - 1437758.jpg')}}');">
                                                                <a class='' href="{{route('deluxeroom')}}">
                                                                        <div class='near text-center lineheight'>
                                                                                <div class='title-block'>
                                                                                        <p>DELUXE ODA</p>
                                                                                </div>
                                                                                <div class='detailsx'>
                                                                                        <h2>DELUXE ODA</h2>
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
                                        </div>
                                </div>
                        </section>


@stop