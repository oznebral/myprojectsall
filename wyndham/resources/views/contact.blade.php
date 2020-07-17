@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
<div id="ctl00_ContentPlaceHolder1_PanelHomepage">
        <div class='container-fluid'>
                <div class='row padremove bg-white contact-size-bring'>
                        <div class='col-md-3'style='padding-left: 15px !important; margin: auto 0;'>
                                <h2 class='' style='font-weight: 400; padding:10px 0 20px 0;'>
                                        {{__('general.contact')}}</h2>
                                <div style='width:100%;'>
                                        <h3 style='font-weight: 300;display:inline-block;'class='adresbaslik'>
                                                {{__('general.adress-location')}}</h3>
                                </div>
                                <i class='fas fa-phone'style='color: #e40387;'></i>
                                <a style='color: #21304d;'href='tel:+90 312 491 77 88'> 
                                        {{__('general.office-phone1')}}</a><br>
                                <i class='fas fa-fax' style='color: #e40387;'></i>
                                <a style='color: #21304d;' href='tel:+90 312 491 13 31'>
                                        {{__('general.office-phone2')}}</a><br>
                                <label>
                                        <i class='fas fa-envelope' style='color: #e40387;'></i>
                                        <a style='color: #21304d;' href='mailto:info@tryptbywyndhamtopkapi.com'>{{__('general.email')}}</a></label>
                        </div>
                        <div class='col-md-9'>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6021.400353500299!2d28.90187302820026!3d41.00993516314973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20%20%20%20Seyitnizam%2C%20Mevlana%20caddesi%20%2C%20Zeytinburnu%2F%C4%B0stanbul%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Zeytinburnu%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1594650437751!5m2!1str!2str"
                                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                </div>
        </div>
</div>
@stop