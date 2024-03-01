
</html><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="HTML5 Template">

  <!-- Site Title -->
  <title>@yield('title')</title>

  <!-- Site Favicon -->
  <link rel="shortcut icon" href="{{asset('assets/imgs/logo/favicon.png')}}" type="image/x-icon">

  <!-- All CSS Files -->
  <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnifi.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<style>
    .hover-class:hover{
        color:  white;
        background-color: black;
    }
</style>
</head>

<body>

  <!-- Preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>


  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>


  <!-- Offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__inner">
      <div class="offcanvas__top">
        <img src="{{asset('assets/imgs/home-1/loko.png')}}" alt="Logo" height="5" width="5">
        <button id="offcanvas_close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="offcanvas__menu">
        <div class="offcanvas-menu">
          <ul>
            <li><a href="index.html">Dashboard</a>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="index.html">Service</a>
            </li>
            <li><a href="#">portfolio</a>
            </li>
            <li><a href="#">team</a>
            </li>
            <li><a href="#">blog</a>
            </li>
            <li><a href="#">others</a>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Offcanvas area end -->


  <!-- Cart area start -->
  <div class="offcanvas offcanvas-end cart__offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">SHOPPING CART</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="cart__list">
        <div class="cart__item">
          <div class="image">
            <a href="">
              <img src="{{ asset('assets/imgs/home-1/rw-2.png') }}" alt="Image">
            </a>
          </div>
          <div class="info">
            <a href="">
              <h3 class="title">Education Geometry New Ranking Strong Year-2023</h3>
            </a>
            <p>1x$500</p>
          </div>
          <button class="delete">X</button>
        </div>
        <div class="cart__item">
          <div class="image">
            <a href="">
              <img src="{{ asset('assets/imgs/home-1/rw.png') }}" alt="Image">
            </a>
          </div>
          <div class="info">
            <a href="">
              <h3 class="title">Education Geometry New Ranking Strong Year-2023</h3>
            </a>
            <p>1x$500</p>
          </div>
          <button class="delete">X</button>
        </div>
      </div>

      <div class="cart__other">
        <p>SUBTOTAL:  <span>$121.00</span></p>
        <a href="">view cart</a>
        <a href="">checkout</a>
      </div>
    </div>
  </div>
  <!-- Cart area end -->



  <!-- Header area start -->
  @include('layouts.frontend.header')
  <!-- Header area end -->
<!-- Footer area start  -->
@yield('content')
@include('layouts.frontend.footer')
  <!-- Footer area end  -->



  <!-- All JS Files -->
  <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/backToTop.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
