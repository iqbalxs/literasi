<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <div class="header-top">
          <img src="{{asset('img/header-fix.jpg')}}" alt="logo" class="logo-default"  style="max-width:100%;height:auto;">
        </div>

       <nav class="navbar navbar-default" style="border-radius: 0;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                            @if (Auth::check())
                                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                            @endif
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Beranda</a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="{{ url('/pengumuman') }}">Pengumuman</a>
                                <a href="{{ url('/kamus') }}">Kamus</a>
                                <a href="{{ url('/tanya-jawab') }}">Tanya Jawab</a>
                                <a href="#">Download</a>
                              <li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Profil</a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="{{ url('/sambutan') }}">Sambutan</a>
                                <a href="{{ url('/sejarah') }}">Sejarah</a>
                                <a href="{{ url('/latar-belakang') }}">Latar Belakang</a>
                                <a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a>
                                <a href="{{ url('/contact-us') }}">Kontak</a>
                              <li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Galery</a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="{{ url('/berita') }}">Berita</a>
                                <a href="{{ url('/artikel') }}">Artikel</a>
                                <a href="{{ url('/karya-siswa') }}">Karya Siswa</a>
                                <a href="{{ url('/karya-guru') }}">Karya Guru</a>
                                <a href="{{ url('/publikasi-ilmiah') }}">Publikasi Ilmiah</a>
                              <li>
                            </ul>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('scripts')

    <script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function() {
        // Menentukan elemen yang dijadikan sticky yaitu .nav
        var stickyNavTop = $('nav').offset().top; 
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();  
            // Kondisi jika discroll maka menu akan selalu diatas, dan sebaliknya        
            if (scrollTop > stickyNavTop) { 
                $('nav').css({ 'position': 'fixed', 'top':0, 'width':'100%','z-index': 1030 });
            } else {
                $('nav').css({ 'position': 'relative' });
            }
        };
        // Jalankan fungsi
        stickyNav();
        $(window).scroll(function() {
            stickyNav();
        });
    });
    //]]>
    </script>
</body>
</html>
