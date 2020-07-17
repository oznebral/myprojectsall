@extends('layouts.master')
@section('title', 'Page Title')

@section('content')

<div id="ctl00_ContentPlaceHolder1_PanelSayfa"style="background-color:#fff">
        <div class="container" style="padding-bottom: 20px;">
                <div class="row">
                        <div class="col-md-12 block_info-wrapper">
                                <div class="block_info">
                                        <h1 style="font-weight: 400;">{{__('general.terms-conditions')}}</h1>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
                        <div class="col-md-12 pad_remove" style="padding-right: 15px !important;">
                                <p>{{__('general.contract-location')}}</p>
                        </div>
                </div>
        </div>
</div>
@stop