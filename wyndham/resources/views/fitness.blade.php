@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section id="preview"style="background-color:#fff">
        <div class="container" style="padding-bottom: 20px;">
                <div class="row">
                        <div class="col-md-6 block_info-wrapper">
                                <div class="block_info">
                                        <h1 style="font-weight: 400;">{{__('general.fitness-room')}}</h1>
                                        <div class="clearfix"></div>
                                </div>
                                <p>{{__('general.fitness-room-p')}}</p><br/>
                                <p>{{__('general.fitness-room-li-h3')}}</p>
                                <ul>
                                        <li>{{__('general.fitness-room-li-bed')}}</li><br/>
                                        <li>{{__('general.fitness-room-li-double-bed')}}</li><br/>
                                        <li>{{__('general.fitness-room-li-with-views')}}</li><br/>
                                </ul>
                        </div>

                        <div id="ctl00_ContentPlaceHolder1_rezekran" class="col pad_remove">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                                <div class="modal-header colorbooknow">
                                                        <h5 id="homepage_mod"> {{__('general.booknow')}}</h5>
                                                </div>
                                                <div class="modal-body">
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
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                        <button class="btn btn-primary" id="btn-make-reservation"name="btn-make-reservation" type="button" onclick="">
                                                                {{__('general.booknow-submit')}}
                                                        </button>
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
                                </div>
                        </div>
                </div>
                <div class='row padremove d-flex justify-content-center'>
                        <div class='col-md-4 alt2'>
                                <div class='col-md-12 pad_remove galeris'
                                        style="background-image:url('{{asset('assets/images/Tryp by Wyndham Istanbul Topkapi - 2 T Accessible - 1437758.jpg')}}');">
                                        <a class='' href="{{route('deluxeroom',App::getLocale())}}">
                                                <div class='near text-center lineheight'>
                                                        <div class='title-block'>
                                                                <p>{{__('general.deluxe-room')}}</p>
                                                        </div>
                                                        <div class='detailsx'>
                                                                <h2>{{__('general.deluxe-room')}}</h2>
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
                </div>
        </div>
</section>
@stop