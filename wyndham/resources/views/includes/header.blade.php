<ul class='navbar-nav navbar-black mainmenu mr-auto'>
        <li class='nav-item'>
                <a class='nav-link hovers' href="{{route('home', App::getLocale())}}" target='_self'title='HOME'>
                        {{__('general.home')}}
                </a>
        </li>
        <li class='nav-item'>
                <a class='nav-link hovers' href="{{route('ourhotel', App::getLocale())}}"target='_self' title='OUR HOTEL'>
                        {{__('general.our-hotel')}}
                </a>
        </li>
        <li class='nav-item'>
                <a class='nav-link hovers' href="{{route('rooms', App::getLocale())}}"target='_self' title='ROOMS'>
                        {{__('general.rooms')}}
                </a>
        </li>
        <li class='nav-item'>
                <a class='nav-link hovers' href="{{route('facilities', App::getLocale())}}"target='_self' title='FACILITIES'>
                        {{__('general.facilities')}}
                </a>
        </li>
        <li class='nav-item'>
                <a class='nav-link hovers' href="{{route('contact', App::getLocale())}}"target='_self' title='CONTACT'>
                        {{__('general.contact')}}
                </a>
        </li>
</ul>