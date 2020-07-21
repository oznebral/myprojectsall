<div class="container-fluid footer-copyright text-center py-2">
        <div class="row padremove-bottom" style="background:#21304d; color:white;">
                <div class="col-md-4">   {{__('general.tryp-by-wyndham-istanbul2018')}}</div>
                <div class="col-md-4 text-center">
                        <ul class='horizontal_menu'>
                                <li>
                                        <a href="{{route('terms', App::getLocale())}}" target='_self'title='Terms & Conditions'>
                                                {{__('general.terms-conditions')}}/
                                        </a>
                                </li>
                                <li>
                                        <a href="{{route('privacy',App::getLocale())}}" target='_self'title='Privacy Policy'>
                                                {{__('general.privacy-policy')}}/
                                        </a> 
                                </li>
                                <li>
                                        <a href="{{route('disclamer',App::getLocale())}}"target='_self' title='Disclamer'>
                                                {{__('general.disclamer')}}
                                        </a>
                                </li>
                        </ul>
                </div>
        </div>
</div>