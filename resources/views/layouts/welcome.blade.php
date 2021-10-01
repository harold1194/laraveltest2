<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{ config('app.name', 'PlProject') }}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('better-clean/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('better-clean/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('better-clean/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('better-clean/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('better-clean/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('better-clean/images/loading.gif')}} " alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head">
            <div  class="container">
               <div class="row ">
                  <div  class="col-md-6">
                     <ul class="email_call">
                        <li><a href="#"><img src="{{ asset('better-clean/icon/2.png')}}" alt="#"/>(+71)1234567890</a></li>
                        <li><a href="#"><img src="{{ asset('better-clean/icon/1.png')}}" alt="#"/>demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div  class="col-md-6">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="/"><img src="{{ asset('better-clean/images/logo.png')}}" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <nav class="main-menu">
                                 <ul class="menu-area-main">
                                    <li class="active"> <a href="/">Home</a> </li>
                                    <li> <a href="#service">Service</a> </li>
                                    <li> <a href="#clean">Better Clean</a> </li>
                                    <li> <a href="#ourwork">Our Work</a> </li>
                                    
                                    <!-- Authentication Links -->
                                    @guest
                                       @if (Route::has('login'))
                                          <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                          </li>
                                       @endif

                                       @if (Route::has('register'))
                                          <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                          </li>
                                       @endif
                                    @else
                                       <li class="nav-item dropdown">
                                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                          </a>

                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                   {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                   @csrf
                                                </form>
                                          </div>
                                       </li>
                                    @endguest
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row ">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>Better YOUR</span> 
                                       <h1> WORLD AS CLEAN </h1>
                                       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum  </p>
                                       <a href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>Better YOUR</span> 
                                       <h1> WORLD AS CLEAN </h1>
                                       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum  </p>
                                       <a href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>Better YOUR</span> 
                                       <h1> WORLD AS CLEAN </h1>
                                       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum  </p>
                                       <a href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-7">
                                    <div class="text-bg">
                                       <span>Better YOUR</span> 
                                       <h1> WORLD AS CLEAN </h1>
                                       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum  </p>
                                       <a href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </section>
         </div>
      </header>
      <!-- three box -->
      @yield('content')
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="follow">
                        <h3>Follow Us</h3>
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free  html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('better-clean/js/jquery.min.js') }}"></script>
      <script src="{{ asset('better-clean/js/popper.min.js') }}"></script>
      <script src="{{ asset('better-clean/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('better-clean/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('better-clean/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('better-clean/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('better-clean/js/custom.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 11,
                 center: {
                     lat: 40.645037,
                     lng: -73.880224
                 },
             });
         
             var image = 'images/maps-and-flags.png';
             var beachMarker = new google.maps.Marker({
                 position: {
                     lat: 40.645037,
                     lng: -73.880224
                 },
                 map: map,
                 icon: image
             });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>