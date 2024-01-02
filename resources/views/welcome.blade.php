
</html><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="HTML5 Template">

  <!-- Site Title -->
  <title>Dashboard</title>

  <!-- Site Favicon -->
  <link rel="shortcut icon" href="{{asset('assets/imgs/logo/favicon.png')}}" type="image/x-icon">

  <!-- All CSS Files -->
  <link rel="stylesheet" href="{{asset("assets/css/all.min.css")}}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/magnifi.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <link rel="stylesheet" href="style.css">


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
              <img src="assets/imgs/dashboard-1/rw-2.png" alt="Image">
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
              <img src="assets/imgs/dashboard-1/rw.png" alt="Image">
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
  <header class="header__area-2">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="header__inner">
            <div class="header__left">
              <div class="header__logo">
                <a href="">
                  <img src="{{asset('assets/imgs/home-1/loko.png')}}" alt="Logo">
                </a>
              </div>
            </div>
            <div class="header__right">
              <div class="header__btm">
                <div class="header__menu">
                  <div class="main-menu-2">
                    <ul>
                      <li class="has-dropdown"><a href="#">Dashboard</a>
                        <ul class="main-dropdown">
                          <li><a href="index.html">Dashboard</a></li>
                        </ul>
                      </li>
                      <li class="has-dropdown"><a href="#">courses</a>
                        <ul class="main-dropdown">
                          <li><a href="course.html">Course</a></li>
                          <li><a href="course-2.html">Course v2</a></li>
                          <li><a href="course-details.html">Course Details</a></li>
                        </ul>
                      </li>
                      <li><a href="about.html">About</a>
                      </li>
                      <li class="has-dropdown"><a href="#">pages</a>
                        <ul class="main-dropdown">
                          <li><a href="course.html">Course</a></li>
                          <li><a href="course-2.html">Course v2</a></li>
                          <li><a href="course-details.html">Course Details</a></li>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog-listing.html">Blog v.2</a></li>
                          <li><a href="blog-details.html">Blog Details</a></li>
                          <li><a href="shop.html">Shop</a></li>
                          <li><a href="product-details.html">Shop Details</a></li>
                          <li><a href="team.html">team</a></li>
                          <li><a href="faq.html">Faq</a></li>
                          <li><a href="contact.html">contact</a></li>
                          <li><a href="gallary.html">Gallary</a></li>
                          <li><a href="404.html">404</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('login')}}">login</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="header__other">
                  <div class="header__lang header__lang-2">
                    <div class="dropdown">
                      <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-solid fa-globe"></i>Eng</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Eng</a></li>
                        <li><a class="dropdown-item" href="#">France</a></li>
                        <li><a class="dropdown-item" href="#">spanish</a></li>
                        <li><a class="dropdown-item" href="#">German</a></li>
                        <li><a class="dropdown-item" href="#">Poland</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="header__cart header__cart-2">
                    <button class="cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                  </div>
                  <div class="header__search">
                    <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
                  </div>
                  <div class="header__btn">
                    <a href="#" class="btn-ractangle">Join Now</a>
                  </div>
                  <div class="mobile__menu">
                    <button class="menu-icon"><i class="fa-solid fa-bars"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container position-relative">
      <div class="search__form">
        <form action="#">
          <input type="text" name="s" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>
  <!-- Header area end -->


  <main>

    <!-- Hero area start  -->
    <section class="hero__area-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero__content">
              <h1 class="sec-subtitle" data-aos="fade-up" data-aos-delay="300"><img src="{{asset('assets/imgs/home-2/work4.png')}}"
                  alt="" style="width:100px;">
                The Leader in Online Learning
              </h1>
              <h2 class="hero__title" data-aos="fade-up" data-aos-delay="400">Explore Live <br> Creative Classes</h2>
              <p data-aos="fade-up" data-aos-delay="500">Architect client-centered total linkage for intuitive benefits
                restore convergence before
                real-time partnerships.</p>
              <div class="btns">
                <a href="about.html" class="btn-ractangle-2" data-aos="flip-left" data-aos-delay="600">Explore More <img
                    src="assets/imgs/dashboard-1/arrow.png" alt=""></a>
                <a href="about.html" class="btn-border" data-aos="flip-left" data-aos-delay="700">Explore More <img
                    src="assets/imgs/dashboard-1/arrow.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero__social-2">
        <div class="social-media-2" data-aos="fade-right" data-aos-delay="300">
          <ul class="media">
            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
          <p><span></span> Let’s Keep In Touch</p>
        </div>
      </div>

      <img src="{{asset('assets/imgs/home-1/star.png')}}">
    </section>
    <!-- Hero area end  -->


    <!-- Achievement area start  -->
    <section class="achievement__area-2">
      <div class="container">
        <div class="achievement__wrapper-2">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="achievement__item-2" data-aos="flip-up" data-aos-delay="300">
                <div class="achievement__img-2">
                  <img src="{{asset('assets/imgs/home-1/achive-1.png')}}">
                </div>
                <div class="achievement__info-2">
                  <h2 class="achievement__number-2">Book Library & Store </h2>
                  <a href="" class="btn-readmore">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="achievement__item-2" data-aos="flip-up" data-aos-delay="400">
                <div class="achievement__img-2">
                  <img src="{{asset('assets/imgs/home-1/achive-3.png')}}">
                </div>
                <div class="achievement__info-2">
                  <h2 class="achievement__number-2">10K+ Online Courses</h2>
                  <a href="" class="btn-readmore">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="achievement__item-2" data-aos="flip-up" data-aos-delay="500">
                <div class="achievement__img-2">
                  <img src="{{asset('assets/imgs/home-1/achive-4.png')}}">
                </div>
                <div class="achievement__info-2">
                  <h2 class="achievement__number-2">Expert Instructor</h2>
                  <a href="" class="btn-readmore">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Achievement area end  -->


    <!-- course area start  -->
    <section class="course__area-2">
      <div class="container">
        <div class="row">
          <div class="sec-title-wrapper" data-aos="fade-up" data-aos-delay="200">
            <h2 class="sec-title">Most Popular <span>Course</span></h2>
            <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore before real-time
              partnerships total linkage for intuitive benefits .</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="course__item-lg" data-aos="fade-up" data-aos-delay="300">
              <img src="{{asset('assets/imgs/home-2/work.png')}}" alt="Image">
              <div class="course__content-lg">
                <ul class="meta">
                  <li>
                    <a href="course.html" class="category">UI/UX Design</a>
                  </li>
                  <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> 40+ Students</li>
                </ul>
                <a href="course.html">
                  <h2 class="course__title-lg">Advance Beginner's Goal & Managing <br> Online Course</h2>
                </a>
                <div class="course__author">
                  <img src="assets/imgs/dashboard-1/instructor.png" alt="Author Image">
                  <div>
                    <p class="text-white">Prof. Arber Plante</p>
                    <ul class="rating">
                      <li class="text">(4 ratings)</li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="course__item-2" data-aos="fade-up" data-aos-delay="400">
              <a href="course.html">
                <img src="assets/imgs/dashboard-2/cute.png" alt="Image">
              </a>
              <div class="course__content-2">
                <ul class="meta">
                  <li>
                    <a href="course.html" class="category">UI/UX Design</a>
                  </li>
                  <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> 40+ Students</li>
                </ul>
                <a href="course.html">
                  <h2 class="course__title-2">Advance Beginner's Goal & Managing Online Course</h2>
                </a>
                <ul class="rating">
                  <li class="text">(4 ratings)</li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="course__author">
                  <img src="assets/imgs/dashboard-1/instructor.png" alt="Author Image">
                  <div>
                    <p>Chapin Daigle</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="course__item-2" data-aos="fade-up" data-aos-delay="500">
              <a href="course.html">
                <img src="assets/imgs/dashboard-2/child2.png" alt="Image">
              </a>
              <div class="course__content-2">
                <ul class="meta">
                  <li>
                    <a href="course.html" class="category">UI/UX Design</a>
                  </li>
                  <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> 40+ Students</li>
                </ul>
                <a href="course.html">
                  <h2 class="course__title-2">Advance Beginner's Goal & Managing Online Course</h2>
                </a>
                <ul class="rating">
                  <li class="text">(4 ratings)</li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                  <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="course__author">
                  <img src="assets/imgs/dashboard-1/instructor.png" alt="Author Image">
                  <div>
                    <p>Chapin Daigle</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- course area end  -->


    <!-- Register area start -->
    <section class="register__area-2 pt-120 pb-140">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="register__left-2">
              <h2 class="sec-title" data-aos="fade-up" data-aos-delay="200">Register <span class="b-btm">Now & Get
                  One</span> <br> Course for Free!</h2>
              <div class="register__countdown" data-aos="fade-up" data-aos-delay="300">
                <ul id="countdown">
                  <li><span id="days"></span> <br> days</li>
                  <li><span id="hours"></span> <br> Hours</li>
                  <li><span id="minutes"></span> <br> Minutes</li>
                  <li><span id="seconds"></span> <br> Seconds</li>
                </ul>
              </div>
              <div class="course__free-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="course__item-2" data-aos="fade-up" data-aos-delay="400">
                      <a href="course.html">
                        <img src="assets/imgs/dashboard-2/work2.png" alt="Image">
                      </a>
                      <div class="course__content-2">
                        <ul class="meta">
                          <li>
                            <a href="course.html" class="category">UI/UX Design</a>
                          </li>
                          <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> 40+ Students</li>
                        </ul>
                        <a href="course.html">
                          <h2 class="course__title-2">Advance Beginner's Goal & Managing Online Course</h2>
                        </a>
                        <ul class="rating">
                          <li class="text">(4 ratings)</li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="course__author">
                          <img src="assets/imgs/dashboard-1/instructor.png" alt="Author Image">
                          <div>
                            <p>Guiadem Aisha</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="course__item-2" data-aos="fade-up" data-aos-delay="500">
                      <a href="course.html">
                        <img src="assets/imgs/dashboard-2/work5.png" alt="Image">
                      </a>
                      <div class="course__content-2">
                        <ul class="meta">
                          <li>
                            <a href="course.html" class="category">UI/UX Design</a>
                          </li>
                          <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> 40+ Students</li>
                        </ul>
                        <a href="course.html">
                          <h2 class="course__title-2">Advance Beginner's Goal & Managing Online Course</h2>
                        </a>
                        <ul class="rating">
                          <li class="text">(4 ratings)</li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                          <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="course__author">
                          <img src="assets/imgs/dashboard-1/instructor.png" alt="Author Image">
                          <div>
                            <p>Chapin Daigle</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="register__right">
              <div class="sec-text" data-aos="fade-up" data-aos-delay="300">
                <p>Architect client-centered total linkage for intuitive benefits. total Dynamically restore before
                  real-time partnerships total linkage for intuitive intuitively benefits Dynamically benefits .</p>
                <h3 class="register__text">Register Now</h3>
              </div>
              <div class="register__form-wrapper" data-aos="fade-up" data-aos-delay="400">
                <h4 class="register__title">Get 100 of Online Courses for <br> Free Register Now</h4>
                <div class="register__form">
                  <input type="text" name="name" placeholder="Name">
                  <input type="tel" name="phone" placeholder="Phone No">
                  <input type="email" name="email" placeholder="Email Address">
                  <select name="subject" id="subject">
                    <option value="">Digital Electronics</option>
                    <option value="">Informatio System</option>
                    <option value="">Web programming</option>
                  </select>
                  <textarea name="message" placeholder="Description"></textarea>
                  <button type="submit" class="submit">Confirm</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <img src="assets/imgs/dashboard-2/shape.png" alt="shape" class="shape">
    </section>
    <!-- Register area end -->


    <!-- Course Category area start  -->
    <section class="category__area-2 pt-120">
      <div class="container">
        <div class="row">
          <div class="sec-title-wrapper" data-aos="fade-up" data-aos-delay="200">
            <h2 class="sec-title">Our Courses <span>Categories</span></h2>
            <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore before real-time
              partnerships total linkage for intuitive benefits .</p>
          </div>
        </div>
        <div class="row">
          <div class="swiper category__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="category__item" data-aos="fade-up" data-aos-delay="300">
                  <a href="course.html">
                    <img src="assets/imgs/dashboard-2/cat-1.jpg" alt="Image" class="image">
                  </a>
                  <div class="icon">
                    <img src="assets/imgs/dashboard-2/c1.png" alt="Icon">
                  </div>
                  <a href="course.html">
                    <h3 class="category__title">Management</h3>
                  </a>
                  <p><span></span> 16 Course</p>
                  <a href="course.html" class="link">
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category__item" data-aos="fade-up" data-aos-delay="400">
                  <a href="course.html">
                    <img src="assets/imgs/dashboard-2/cat-2.jpg" alt="Image" class="image">
                  </a>
                  <div class="icon">
                    <img src="assets/imgs/dashboard-2/c2.png" alt="Icon">
                  </div>
                  <a href="course.html">
                    <h3 class="category__title">IT & Software</h3>
                  </a>
                  <p><span></span> 16 Course</p>
                  <a href="course.html" class="link">
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category__item" data-aos="fade-up" data-aos-delay="500">
                  <a href="course.html">
                    <img src="assets/imgs/dashboard-2/cat-3.jpg" alt="Image" class="image">
                  </a>
                  <div class="icon">
                    <img src="assets/imgs/dashboard-2/c3.png" alt="Icon">
                  </div>
                  <a href="course.html">
                    <h3 class="category__title">Web Development</h3>
                  </a>
                  <p><span></span> 16 Course</p>
                  <a href="course.html" class="link">
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category__item" data-aos="fade-up" data-aos-delay="600">
                  <a href="course.html">
                    <img src="assets/imgs/dashboard-2/cat-4.jpg" alt="Image" class="image">
                  </a>
                  <div class="icon">
                    <img src="assets/imgs/dashboard-2/c4.png" alt="Icon">
                  </div>
                  <a href="course.html">
                    <h3 class="category__title">HR Admin</h3>
                  </a>
                  <p><span></span> 16 Course</p>
                  <a href="course.html" class="link">
                    <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="category__dots">
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Course Category area end  -->


    <!-- Counter area start  -->
    <section class="counter__area-2">
      <div class="container">
        <div class="counter__wrapper-2">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2" data-aos="fade-up" data-aos-delay="200">
                <div class="counter__img-2">
                  <img src="assets/imgs/dashboard-2/counter-1.png" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">50k+</h2>
                  <p>History Of High Achievers</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2" data-aos="fade-up" data-aos-delay="400">
                <div class="counter__img-2">
                  <img src="assets/imgs/dashboard-2/counter-2.png" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">30K+</h2>
                  <p>Classes Completed</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2" data-aos="fade-up" data-aos-delay="500">
                <div class="counter__img-2">
                  <img src="assets/imgs/dashboard-2/counter-3.png" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">63+</h2>
                  <p>Total Acres Of The Land</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2" data-aos="fade-up" data-aos-delay="600">
                <div class="counter__img-2">
                  <img src="assets/imgs/dashboard-2/counter-4.png" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">140+</h2>
                  <p>Awards & Achievements</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter area end  -->


    <!-- Event area start  -->
    <section class="event__area-2 pb-125">
      <div class="container">
        <div class="row">
          <div class="sec-title-wrapper" data-aos="fade-up" data-aos-delay="200">
            <h2 class="sec-title">Upcoming Events</h2>
            <p>Architect client-centered total linkage for intuitive benefits. linkage for intuitive benefits Many
              children & poor people are at high risk</p>
          </div>
        </div>
        <div class="row">
          <div class="event__list-2">
            <div class="event__item-2" data-aos="fade-up" data-aos-delay="300">
              <div class="event__img-2">
                <img src="assets/imgs/dashboard-2/bu6.png" alt="Image" style="border-radius:50%;width:200px;height:200px;object-fit:cover;" >
                <div class="date">
                  <p>27 <span>April, 2023</span></p>
                </div>
              </div>
              <div class="event__content-2">
                <a href="about.html">
                  <h3 class="event__title-2">Applying Natural Online Freelance <br> & Society</h3>
                </a>
                <ul class="course__meta">
                  <li><img src="assets/imgs/dashboard-1/alarm.png" alt="Total Time"> 4h 30m 15s</li>
                  <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> Beginner</li>
                </ul>
                <div class="event__link">
                  <a href="about.html">
                    <div class="icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                    <p>More Information</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="event__item-2" data-aos="fade-up" data-aos-delay="400">
              <div class="event__img-2">
                <img src="assets/imgs/dashboard-2/event-2.png" alt="Image">
                <div class="date">
                  <p>27 <span>April, 2023</span></p>
                </div>
              </div>
              <div class="event__content-2">
                <a href="about.html">
                  <h3 class="event__title-2">Customize your own site search <br> Feature without Coding</h3>
                </a>
                <ul class="course__meta">
                  <li><img src="assets/imgs/dashboard-1/alarm.png" alt="Total Time"> 4h 30m 15s</li>
                  <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> Beginner</li>
                </ul>
                <div class="event__link">
                  <a href="about.html">
                    <div class="icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                    <p>More Information</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="event__item-2" data-aos="fade-up" data-aos-delay="500">
              <div class="event__img-2">
                <img src="assets/imgs/dashboard-2/event-3.png" alt="Image">
                <div class="date">
                  <p>27 <span>April, 2023</span></p>
                </div>
              </div>
              <div class="event__content-2">
                <a href="about.html">
                  <h3 class="event__title-2">Applying Natural Online Freelance <br> & Society</h3>
                </a>
                <ul class="course__meta">
                  <li><img src="assets/imgs/dashboard-1/alarm.png" alt="Total Time"> 4h 30m 15s</li>
                  <li><img src="assets/imgs/dashboard-1/student.png" alt="Student Type"> Beginner</li>
                </ul>
                <div class="event__link">
                  <a href="about.html">
                    <div class="icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                    <p>More Information</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="event__text-2" data-aos="fade-up" data-aos-delay="600">
            <p>Wants to see the full list of Upcoming Events? <a href="about.html">View full Events Over view</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- Event area end  -->


    <!-- Instructor area start  -->
    <section class="instructor__area-2 pt-120 pb-110">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title-wrapper" data-aos="fade-up" data-aos-delay="200">
              <h3 class="sec-title text-white">Our Expert <span>Instructors</span></h3>
              <p>Architect client-centered total linkage for intuitive benefits. linkage for intuitive benefits Many
                children & poor people are at high risk</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="instructor__category-2" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/imgs/dashboard-2/arrow.png" alt="shape" class="shape">
              <select name="instructor" id="instructor_category">
                <option value="1">Web Development</option>
                <option value="2">Web Development</option>
                <option value="3">Web Development</option>
                <option value="4">Web Development</option>
                <option value="5">Web Development</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="instructor__list-2">
              <div class="swiper instructor__slider-2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="instructor__item-2" data-aos="fade-up" data-aos-delay="400">
                      <div class="instructor__img-2">
                        <a href="team-details.html"><img src="assets/imgs/dashboard-2/bu.png" alt="Image"></a>
                        <div class="instructor__social-2">
                          <ul>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="instructor__content-2">
                        <a href="team-details.html">
                          <h4 class="instructor__name">Jenny Wilson</h4>
                        </a>
                        <p>UI Designer</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="instructor__item-2" data-aos="fade-up" data-aos-delay="500">
                      <div class="instructor__img-2">
                        <a href="team-details.html"><img src="assets/imgs/dashboard-2/bu.png" alt="Image"></a>
                        <div class="instructor__social-2">
                          <ul>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="instructor__content-2">
                        <a href="team-details.html">
                          <h4 class="instructor__name">Courtney Henry</h4>
                        </a>
                        <p>Web Development</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="instructor__item-2" data-aos="fade-up" data-aos-delay="600">
                      <div class="instructor__img-2">
                        <a href="team-details.html"><img src="assets/imgs/dashboard-2/bu.png" alt="Image"></a>
                        <div class="instructor__social-2">
                          <ul>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="instructor__content-2">
                        <a href="team-details.html">
                          <h4 class="instructor__name">Jenny Wilson</h4>
                        </a>
                        <p>UI Designer</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="instructor__item-2" data-aos="fade-up" data-aos-delay="700">
                      <div class="instructor__img-2">
                        <a href="team-details.html"><img src="assets/imgs/dashboard-2/bu.png" alt="Image"></a>
                        <div class="instructor__social-2">
                          <ul>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="instructor__content-2">
                        <a href="team-details.html">
                          <h4 class="instructor__name">Jenny Wilson</h4>
                        </a>
                        <p>UI Designer</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Instructor area end  -->


    <!-- Testimonial area start  -->
    <section class="testimonial__area-2 pt-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="testimonial__left-2" data-aos="fade-right" data-aos-delay="300">
              <div class="quote">
                <img src="assets/imgs/dashboard-2/quote.png" alt="Quote">
              </div>
              <img src="assets/imgs/dashboard-2/dad.png" alt="Image" class="img-1" style="border-radius:50%;width:400px;height:400px;object-fit:cover;">
              <img src="assets/imgs/dashboard-2/testimonial-4.png" alt="Image" class="img-2">
              <img src="assets/imgs/dashboard-2/testimonial-3.png" alt="Image" class="img-3">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__right-2" data-aos="fade-up" data-aos-delay="200">
              <h2 class="sec-title">Student are Says <br> EduQuest <span class="b-btm">About Courses</span></h2>
              <p>Architect client-centered total linkage for intuitive benefits. linkage for intuitive benefits Many
                children & poor people are at high risk</p>

              <div class="swiper testimonial__slider-2" data-aos="fade-up" data-aos-delay="300">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial__slide-2">
                      <img src="assets/imgs/dashboard-2/testimonial-1.png" alt="Image" class="img">
                      <img class="rating" src="assets/imgs/dashboard-2/rating.png" alt="Star">
                      <p class="text">“Sam is somebody you need as a steward of your brand. He’s able to craft
                        compelling brand
                        narratives that bring a company’s vision to life We care about safety big time — and so do your
                        site's visitors. With a Shared Hosting account-LMS site..”</p>
                      <h4 class="name">Ronald Richards</h4>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial__slide-2">
                      <img src="assets/imgs/dashboard-2/testimonial-1.png" alt="Image" class="img">
                      <img class="rating" src="assets/imgs/dashboard-2/rating.png" alt="Star">
                      <p class="text">“Sam is somebody you need as a steward of your brand. He’s able to craft
                        compelling brand
                        narratives that bring a company’s vision to life We care about safety big time — and so do your
                        site's visitors. With a Shared Hosting account-LMS site..”</p>
                      <h4 class="name">Ronald Richards</h4>
                    </div>
                  </div>
                </div>
              </div>

              <img src="assets/imgs/dashboard-2/shape-2.png" alt="Shape" class="shape">
            </div>
          </div>
        </div>
      </div>

      <!-- Brand area start  -->
      <div class="brand__area-2 pt-150">
        <div class="container">
          <div class="brand__inner-2">
            <div class="brand__top-2" data-aos="fade-up" data-aos-delay="200">
              <p>Trusted by Leading Several <span>Eduquest Companies</span></p>
            </div>
            <div class="swiper brand__slider-2" data-aos="fade-up" data-aos-delay="300">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-1.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-2.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-3.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-4.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-5.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-1.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-2.png" alt="Logo">
                </div>
                <div class="swiper-slide">
                  <img src="assets/imgs/dashboard-2/brand-4.png" alt="Logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Brand area end  -->

    </section>
    <!-- Testimonial area end  -->


    <!-- Blog area start  -->
    <section class="blog__area-2 pt-150 pb-130">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <div class="title-wrapper pb-5" data-aos="fade-up" data-aos-delay="200">
              <h2 class="sec-subtitle"><img src="assets/imgs/dashboard-1/dot.png" alt="dot"> blog</h2>
              <h3 class="sec-title">Latest from the Blog</h3>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="text-wrapper" data-aos="fade-up" data-aos-delay="300">
              <p>SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors feel safe
                interacting with your site—this is particularly important if you run an e-commerce site.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <article class="blog__item" data-aos="fade-up" data-aos-delay="400">
              <div class="blog__img-2">
                <img src="assets/imgs/dashboard-2/work7.png" alt="Thumbnail" class="image">
                <a href="blog-details.html" class="category">Education</a>
              </div>
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href="#"><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <a href="" class="btn-readmore">Explore More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item" data-aos="fade-up" data-aos-delay="500">
              <div class="blog__img-2">
                <img src="assets/imgs/dashboard-2/blog-2.jpg" alt="Thumbnail" class="image">
                <a href="blog-details.html" class="category">Education</a>
              </div>
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <a href="" class="btn-readmore">Explore More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item" data-aos="fade-up" data-aos-delay="600">
              <div class="blog__img-2">
                <img src="assets/imgs/dashboard-2/work6.webp" alt="Thumbnail" class="image">
                <a href="blog-details.html" class="category">Education</a>
              </div>
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <a href="" class="btn-readmore">Explore More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog area end  -->


  </main>

  <!-- Footer area start  -->
  <footer class="footer__area-2 pt-120">
    <div class="container">
      <div class="footer__top-2">
        <div class="row">
          <div class="col-md-6">
            <div class="newsletter__content-2">
              <h2 class="title">App Is Available For Free <br> Let’s Learn Together</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer__app">
              <p>SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors particularly
                important .</p>

              <div class="footer__app-list">
                <div class="footer__app-item">
                  <a href="#">
                    <div class="img">
                      <i class="fa-brands fa-google-play"></i>
                    </div>
                    <div class="info">
                      <p>Get it on</p>
                      <h4>Google Play</h4>
                    </div>
                  </a>
                </div>
                <div class="footer__app-item">
                  <a href="#">
                    <div class="img">
                      <i class="fa-brands fa-apple"></i>
                    </div>
                    <div class="info">
                      <p>Download on the</p>
                      <h4>App Store</h4>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__mid pb-125">
        <div class="row">
          <div class="col-lg-4 col-md-8">
            <div class="footer__logo-2">
              <img src="assets/imgs/dashboard-1/loko.png" alt="Logo">
              <p>SSL for your site is a no-brainer best practice. Not only lMS Website site.</p>
              <div class="newsletter__form-2">
                <input type="email" name="email" placeholder="Enter email Address">
                <button class="submit" type="submit">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="footer__links">
              <h2 class="footer__title">Useful Links</h2>
              <ul class="quick-link">
                <li><a href="about.html">About Us</a></li>
                <li><a href="about.html">Resource Center</a></li>
                <li><a href="contact.html">Careers</a></li>
                <li><a href="team.html">Instructor</a></li>
                <li><a href="contact.html">Become A Teacher</a></li>
                <li><a href="course.html">Categories</a></li>
                <li><a href="course.html">All Courses</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="footer__links">
              <h2 class="footer__title">Courses</h2>
              <ul class="quick-link">
                <li><a href="course.html">Digital Marketing</a></li>
                <li><a href="course.html">Design & Branding</a></li>
                <li><a href="course.html">Storytelling & Voice Over</a></li>
                <li><a href="course.html">News & Blogs</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="course.html">Pricing</a></li>
                <li><a href="about.html">Terms & Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="footer__posts">
              <h2 class="footer__title">Recent Post</h2>
              <div class="footer__post">
                <div class="image">
                  <a href="blog-details.html">
                    <img src="assets/imgs/dashboard-2/bu4.png" alt="Image">
                  </a>
                </div>
                <div class="info">
                  <a href="blog-details.html">
                    <h3 class="title">Education Geometry New Ranking Strong Year-2023</h3>
                  </a>
                  <p><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</p>
                </div>
              </div>
              <div class="footer__post">
                <div class="image">
                  <a href="blog-details.html">
                    <img src="assets/imgs/dashboard-2/bu3.png" alt="Image">
                  </a>
                </div>
                <div class="info">
                  <a href="blog-details.html">
                    <h3 class="title">Education Geometry New Ranking Strong Year-2023</h3>
                  </a>
                  <p><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__btm-2">
        <div class="row">
          <div class="col-lg-6">
            <div class="footer__copyright-2">
              <p>©copyright 2023 Leina Academia.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="footer__social-2">
              <p>Flow Us On</p>
              <ul class="social-media">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer area end  -->



  <!-- All JS Files -->
  <script src="assets/js/jquery-3.6.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/mixitup.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
