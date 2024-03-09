@extends('layouts.frontend.main')
@section('title')
404
@endsection
@section('content')
 <main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
      <img class="shape-2" src="assets/imgs/inner/bradcrumb-shape-2.png" alt="shape-1">
      <img class="shape-3"  src="assets/imgs/inner/dotted-1.png" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">404</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">404</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- 404 area start  -->
    <section class="error__page">
      <div class="container">
        <div class="error__thumb text-center">
          <img src="assets/imgs/inner/404.png" alt="error image">
        </div>
        <div class="error__content">
          <h2 class="error__title">Oops! Page Not Found</h2>
          <p>The page you are looking for is not exist.</p>
          <div class="teampage__btnwrapper">
            <a href="index.html" class="btn-ractangle-2 error-btn">Back to Home </a>
          </div>
        </div>
      </div>
    </section>
    <!-- 404 area end  -->

  </main>
@endsection
