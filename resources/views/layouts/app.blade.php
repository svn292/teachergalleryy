<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Teachers Gallery</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}img/favicon.png">
<!-- Normalize CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/normalize.css">
<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/main.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/animate.min.css">
<!-- Font-awesome CSS-->
<link rel="stylesheet" href="{{asset('/')}}css/font-awesome.min.css">
<!-- Owl Caousel CSS -->
<link rel="stylesheet" href="{{asset('/')}}vendor/OwlCarousel/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/')}}vendor/OwlCarousel/owl.theme.default.min.css">
<!-- Main Menu CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/meanmenu.min.css">
<!-- nivo slider CSS -->
<link rel="stylesheet" href="{{asset('/')}}vendor/slider/css/nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="{{asset('/')}}vendor/slider/css/preview.css" type="text/css" media="screen" />
<!-- Datetime Picker Style CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/jquery.datetimepicker.css">
<!-- Magic popup CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/magnific-popup.css">
<!-- Switch Style CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/hover-min.css">
<!-- ReImageGrid CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/reImageGrid.css">
<link rel="stylesheet" href="{{asset('/')}}css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('/')}}css/style.css">
<!-- Modernizr Js -->
<script src="{{asset('/')}}js/modernizr-2.8.3.min.js"></script>
<style>
.invalid-feedback{
  color: red !important;
}
</style>
</head>

<body>

<!-- Add your site or application content here --> 
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here --> 
<!-- Main Body Area Start Here -->
<div id="wrapper"> 
  <!-- Header Area Start Here -->
  <header>
    <div id="header2" class="header2-area">
      <div class="main-menu-area bg-textPrimary" id="sticker">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="logo-area"> <a href="{{url('/')}}"><img class="img-responsive" src="{{asset('/')}}img/logo.png" alt="logo"></a> </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
              <nav id="desktop-nav">
                <ul>
                  <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                  <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{url('/about')}}">About Us</a></li>
                  <li class="{{ (request()->is('our-teacher')) ? 'active' : '' }}"><a href="{{url('/our-teacher')}}">Our Teachers</a></li>
                  @if(auth()->id() && auth()->user()->role_id == 4)
                  <li class="{{ (request()->is('pricing')) ? 'active' : '' }}"><a href="{{url('/pricing')}}">Pricing</a></li>
                  <li class="{{ (request()->is('book-ads')) ? 'active' : '' }}"><a href="{{url('/book-ads')}}">Book Ads</a></li>
                  @endif
                  @if(auth()->id() && auth()->user()->role_id == 3)
                  <li class="{{ (request()->is('mutual-transfer')) ? 'active' : '' }}"><a href="{{url('/mutual-transfer')}}">Mutual Transfer</a></li>
                  @endif
                  <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{url('/contact')}}">Contact Us</a></li>
                  @guest
                  <li class="{{ (request()->is('login')) ? 'active' : '' }}"><a href="{{url('/login')}}"><i class="fa fa-lock" aria-hidden="true"></i>Login </a></li>
                  <li>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i> Register </a>
                 
                  <ul class="dropdown-menu">
          <li class="{{ (request()->is('register')) ? 'active' : '' }}"><a href="{{url('/register')}}">Student Registration</a></li>
          <li class="{{ (request()->is('teacherregister')) ? 'active' : '' }}"><a href="{{url('/teacherregister')}}">Teacher Registration</a></li>
          <li class="{{ (request()->is('publisherregister')) ? 'active' : '' }}"><a href="{{url('/publisherregister')}}">Publisher Registration</a></li>
        </ul>
                  </li>
                  @endguest
                  @auth
                  <li class="{{ (request()->is('profile')) ? 'active' : '' }}"><a href="{{url('/profile')}}">Profile</a></li>
                  <li class="{{ (request()->is('logout')) ? 'active' : '' }}"><a href="{{url('/logout')}}">Logout</a></li>
                  @endauth
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul>
                  <li class="active"><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About Us</a></li>
                  <li><a href="{{url('/our-teacher')}}">Our Teachers</a></li>
                  <li><a href="{{url('/book-ads')}}">Book Ads</a></li>
                  <li><a href="{{url('/mutual-transfer')}}">Mutual Transfer</a></li>
                  <li><a href="{{url('/contact')}}">Contact Us</a></li>
                  @guest
                  <li><a href="{{url('/login')}}"><i class="fa fa-lock" aria-hidden="true"></i>Login </a></li>
                  <li><a href="{{url('/register')}}"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
                  @endguest
                  @auth
                  <li><a href="{{url('/profile')}}">Profile</a></li>
                  <li><a href="{{url('/logout')}}">Logout</a></li>
                  @endauth
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area End --> 
  </header>
  <!-- Header Area End Here --> 
            @yield('content')
      <!-- Footer Area Start Here -->
  <footer>
    <div class="footer-area-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
            <div class="footer-logo"> <a href="{{url('/')}}"><img class="img-responsive" src="{{asset('/')}}img/logo-footer.png" alt="logo"></a>
              <div class="footer-about">
                <p>Praesent vel rutrum purus. Nam vel dui eu sus duis dignissim dignissim. Suspenetey disse at ros tecongueconsequat.Fusce sit amet rna feugiat.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-box">
              <h3>Information</h3>
              <ul class="corporate-address">
                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:(01)800433633"> (+91) 4800 499 233 </a></li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@teachergallery.com</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>A705, Salt Lake. Kolkata - 91</li>
              </ul>
              <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="footer-box">
              <h3>Popular Ads</h3>
              <ul class="flickr-photos">
                <li> <a href="#"><img class="img-responsive" src="{{asset('/')}}img/footer-add1.jpg" alt="flickr"></a> </li>
                <li> <a href="#"><img class="img-responsive" src="{{asset('/')}}img/footer-add2.jpg" alt="flickr"></a> </li>
                <li> <a href="#"><img class="img-responsive" src="{{asset('/')}}img/footer-add3.jpg" alt="flickr"></a> </li>
                <li> <a href="#"><img class="img-responsive" src="{{asset('/')}}img/footer-add4.jpg" alt="flickr"></a> </li>
                <li> <a href="#"><img class="img-responsive" src="{{asset('/')}}img/footer-add1.jpg" alt="flickr"></a> </li>
                <li> <a href="#"><img class="img-responsive" src="{{asset('/')}}img/footer-add2.jpg" alt="flickr"></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p>&copy; 2020 Teaches Gallery All Rights Reserved. &nbsp; Designed by<a target="_blank" href="https://www.shyamfuture.com/" rel="nofollow"> Shyam Future</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Area End Here --> 
</div>
<!-- Main Body Area End Here --> 
<!-- jquery--> 
<script src="{{asset('/')}}js/jquery-2.2.4.min.js" type="text/javascript"></script> 
<!-- Plugins js --> 
<script src="{{asset('/')}}js/plugins.js" type="text/javascript"></script> 
<!-- Bootstrap js --> 
<script src="{{asset('/')}}js/bootstrap.min.js" type="text/javascript"></script> 
<!-- WOW JS --> 
<script src="{{asset('/')}}js/wow.min.js"></script> 
<!-- Nivo slider js --> 
<script src="{{asset('/')}}vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script> 
<script src="{{asset('/')}}vendor/slider/home.js" type="text/javascript"></script> 
<!-- Owl Cauosel JS --> 
<script src="{{asset('/')}}vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script> 
<!-- Meanmenu Js --> 
<script src="{{asset('/')}}js/jquery.meanmenu.min.js" type="text/javascript"></script> 
<!-- Srollup js --> 
<script src="{{asset('/')}}js/jquery.scrollUp.min.js" type="text/javascript"></script> 
<!-- jquery.counterup js --> 
<script src="{{asset('/')}}js/jquery.counterup.min.js"></script> 
<script src="{{asset('/')}}js/waypoints.min.js"></script> 
<!-- Countdown js --> 
<script src="{{asset('/')}}js/jquery.countdown.min.js" type="text/javascript"></script> 
<!-- Isotope js --> 
<script src="{{asset('/')}}js/isotope.pkgd.min.js" type="text/javascript"></script> 
<!-- Magic Popup js --> 
<script src="{{asset('/')}}js/jquery.magnific-popup.min.js" type="text/javascript"></script> 
<!-- Gridrotator js --> 
<script src="{{asset('/')}}js/jquery.gridrotator.js" type="text/javascript"></script> 
<!-- Custom Js --> 
<script src="{{asset('/')}}js/main.js" type="text/javascript"></script>
@yield('js')
</body>
</html>
