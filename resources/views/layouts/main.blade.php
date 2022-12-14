<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description"
		content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
	<meta name="keywords"
		content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
	<meta name="author" content="elemis">
	@yield('extra-meta')
	<title>EliteFootball</title>
	<link href="{{ asset('dist/assets/img/favicon.png') }}" rel="shortcut icon">
	<link href="{{ asset('dist/assets/css/plugins.css') }}" rel="stylesheet">
	<link href="{{ asset('dist/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('dist/assets/css/elitefoot.css') }}" rel="stylesheet">
	<link href="{{ asset('dist/assets/css/fonts/dm.css') }}" rel="preload" as="style" onload="this.rel='stylesheet'">
	@yield('extra-css')
	@yield('extra-script')
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="/menu">
              <img src="dist//assets/img/logo.png" srcset="dist//assets/img/logo@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Elite 1</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                        <li class="col"><a class="dropdown-item" href="{{ route('acceuil_one') }}">
                            <span>Accueil</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('calend_result_one') }}">
                            <span>Calendrier & R??sultats</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('classement_one') }}">
                            <span>Classement</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('club_one') }}">
                            <span>Clubs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('joueur_one') }}">
                            <span>Joueurs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('arbitre_one') }}">
                            <span>Arbitres</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Statistiques</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Elite 2</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                        <li class="col"><a class="dropdown-item" href="{{ route('acceuil_two') }}">
                            <span>Accueil</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('calend_result_two') }}">
                            <span>Calendrier & R??sultats</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="">
                            <span>Classement</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('club_two') }}">
                            <span>Clubs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('joueur_two') }}">
                            <span>Joueurs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('arbitre_two') }}">
                            <span>Arbitres</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Statistiques</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Guinness super league</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                        <li class="col"><a class="dropdown-item" href="{{ route('acceuil_guinness') }}">
                            <span>Accueil</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('calend_result_guinness') }}">
                            <span>Calendrier & R??sultats</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="">
                            <span>Classement</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('club_guinness') }}">
                            <span>Clubs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('joueur_guinness') }}">
                            <span>Joueurs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href="{{ route('arbitre_guinness') }}">
                            <span>Arbitres</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Statistiques</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Coupe du Cameroun</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Accueil</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Calendrier & R??sultats</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Classement</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Clubs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Joueurs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Arbitres</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Statistiques</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Autres comp??titions</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Accueil</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Calendrier & R??sultats</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Classement</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Clubs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Joueurs</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Arbitres</span>
                          </a>
                        </li>
                        <li class="col"><a class="dropdown-item" href=" ">
                            <span>Statistiques</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fr</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="#">Fr</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                </ul>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    @yield('content')
  <!-- /.content-wrapper py-13 py-md-15 -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <img class="mb-4" src="dist/assets/img/logo-light.png" srcset="dist/assets/img/logo-light@2x.png 2x" alt="" />
            <p class="mb-4">?? 2021 Sandbox. All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2 offset-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Need Help?</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Learn More</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Features</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Get in Touch</h4>
            <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('dist/assets/js/plugins.js') }}" defer></script>
  <script src="{{ asset('dist/assets/js/theme.js') }}" defer></script>
  
  <!--Start of Tawk.to Script-->
{{--   <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/626fb4507b967b11798d6ac2/1g225gn4e';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
  </script> --}}
		<!--End of Tawk.to Script-->
		<!--End of Tawk.to Script-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		@yield('extra-js')
</body>

</html>
