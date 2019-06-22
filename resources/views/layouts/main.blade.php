<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('front-end/images/favicon.ico') }}"/>
    <!-- Font Awesome -->
    <link href="{{ asset('front-end/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('front-end/css/bootstrap.css') }}" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/slick.css') }}"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('front-end/css/jquery.fancybox.css') }}" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/animate.css') }}"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/bootstrap-progressbar-3.3.4.css') }}"/> 
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('front-end/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('front-end/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 
    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->

    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    +62(800) 699-7071
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    info@literasi.co.id
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->

  <!-- Start login modal window -->
  
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>              
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="#" alt="logo"></a> -->                    
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          
          <ul id="top-menu" class="nav navbar-nav main-nav">
            
            @if (Auth::check())
              <li><a href="{{ url('/home') }}">Dashboard</a></li>
            @else
              <li><a href="{{ url('/') }}">Beranda</a></li>
            @endif
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Profil <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ url('/sambutan') }}">Sambutan</a>
                  <a href="{{ url('/sejarah') }}">Sejarah</a>
                  <a href="{{ url('/latar-belakang') }}">Latar Belakang</a>
                  <a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a>
                <li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Galeri <span class="fa fa-angle-down"></span></a>
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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Lainnya <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ url('/pengumuman') }}">Pengumuman</a>
                  <a href="{{ url('/kamus') }}">Kamus</a>
                  <a href="{{ url('/faq') }}">FAQ</a>
                <li>
              </ul>
            </li>
            <li><a href="{{ url('/contact-us') }}">Kontak</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right main-nav">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @else
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="fa fa-angle-down"></span>
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
        </div><!--/.nav-collapse -->
        <!-- search icon -->
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>LITERASI</h2>
              <p>Selamat datang di website literasi</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              @yield('breadcrumb')
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start blog archive -->
  <section id="blog-archive">
    @yield('content')  
  </section>
  <!-- End blog archive -->

  <!-- Start subscribe us -->
  
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Copyright &copy; 2019 {{config('app.name')}}</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="{{ asset('front-end/js/jquery.min.js') }}"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="{{ asset('front-end/js/bootstrap.js') }}"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="{{ asset('front-end/js/slick.js') }}"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="{{ asset('front-end/js/jquery.mixitup.js') }}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{ asset('front-end/js/jquery.fancybox.pack.js') }}"></script>
 <!-- counter -->
  <script src="{{ asset('front-end/js/waypoints.js') }}"></script>
  <script src="{{ asset('front-end/js/jquery.counterup.js') }}"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="{{ asset('front-end/js/wow.js') }}"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="{{ asset('front-end/js/bootstrap-progressbar.js') }}"></script>  
    
   
  <!-- Custom js -->
  <script type="text/javascript" src="{{ asset('front-end/js/custom.js') }}"></script>
  
  <script type='text/javascript'>
    $(document).ready(function() {
        var stickyNavTop = $('nav').offset().top; 
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();     
            if (scrollTop > stickyNavTop) { 
                $('nav').css({ 'position': 'fixed', 'top':0, 'width':'100%','z-index': 1030 });
            } else {
                $('nav').css({ 'position': 'relative' });
            }
        };
        stickyNav();
        $(window).scroll(function() {
            stickyNav();
        });
    });
  </script>
    
  </body>
</html>