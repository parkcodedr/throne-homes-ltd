<div class="loader loader3">
    <div class="loader-inner">
        <div class="spin">
            <span></span>
            <img src="{{ asset($siteinfos->coy_logo) }}" alt="{{ $siteinfos->app_name }}">
        </div>
    </div>
</div>

  <!-- ========== MOBILE MENU ========== -->
  <nav id="mobile-menu"></nav>

<div class="topbar">
    <div class="container">
        <div class="welcome-mssg">
            @if($source != 'pc')Welcome to {{ join(' ',explode('_',$siteinfos->app_name)) }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/login') }}">LOGIN</a> @else {{ join(' ',explode('_',$siteinfos->welcomenote)) }} @endif
        </div>
        <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:{{ $siteinfos->app_phone }}">
                        <i class="fa fa-phone"></i>Hotline : {{ $siteinfos->app_phone }}
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:{{ $siteinfos->app_email }}">
                        <i class="fa fa-envelope-o "></i>{{ $siteinfos->app_email }}</a>
                </li>                
                @foreach ($navs as $nav)
                    @if (strtoupper($nav->nav_name) != 'LOGIN' && substr_count($nav, 'covid')>0)
                        <li class="d-none d-md-inline"><a href="@if ($nav->nav_link == '/index') {{ url('/') }} @else
                                {{ url($nav->nav_link) }} @endif">{{ strtoupper($nav->nav_name) }}</a></li>
                    @endif
                @endforeach
                @foreach ($navs as $nav)
                    @if (strtoupper($nav->nav_name) == 'LOGIN')
                        @if (strtoupper($user_logon) == strtoupper($nav->nav_name))
                            <li class="d-none d-md-inline"><a
                                    href="@if ($nav->nav_link == '/index') {{ url('/') }} @else {{ url($nav->nav_link) }} @endif">{{ strtoupper($nav->nav_name) }}</a></li>
                        @endif
                        @if (strtoupper($user_logon) != strtoupper($nav->nav_name))
                            <li class="d-none d-md-inline"><a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ strtoupper($user_logon) }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;"> @csrf </form>
                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset($siteinfos->coy_logo) }}"
                        alt="{{ join(' ', explode('_', $siteinfos->app_name)) }}" width="155">
                </a>
            </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu" >
            <ul class="menu">
                @foreach ($navs as $nav)
                    @if (strtoupper($nav->nav_name) != 'LOGIN' && substr_count($nav, 'covid')<=0)
                        @if(empty($nav->nav_dropdown))
                        <li class="menu-item @if (Route::current()->getName() ==
                                $nav->nav_link) {{ 'active ' }} @endif"><a href="@if ($nav->nav_link == '/index') {{ url('/') }} @else
                                    {{ url($nav->nav_link) }} @endif">{{ strtoupper(join(' ',explode('_',$nav->nav_name))) }}</a></li>
                        @endif
                        @if(!empty($nav->nav_dropdown))
                        <li class="menu-item dropdown @if (Route::current()->getName() ==
                                $nav->nav_link) {{ 'active ' }} @endif"><a href="#">{{ strtoupper($nav->nav_name) }}</a>
                            <ul class="submenu">
                                @if(url(!empty($nav->nav_submenu0)))
                                    <li class="menu-item"><a href="{{ url($nav->nav_submenu0) }}" style="color: #101010">{{ strtoupper(join('',explode('/',$nav->nav_submenu0))) }}</a></li>
                                @endif
                                @if(url(!empty($nav->nav_submenu1)))
                                    <li class="menu-item"><a href="{{ url($nav->nav_submenu1) }}" style="color: #101010">{{ strtoupper(join('',explode('/',$nav->nav_submenu1))) }}</a></li>
                                @endif
                            </ul>
                        </li>
                        @endif
                    @endif
                @endforeach
                <li class="menu-item menu-btn">
                    <a href="{{ url('/buynow') }}" class="btn">
                        <i class="fa fa-paper-plane"></i>
                        {{ $siteinfos->booking_btn }}</a>
                </li>
            </ul>
        </nav>
    </div>
</header>