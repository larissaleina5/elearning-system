@extends('layouts.frontend.main')
@section('title')
About page
@endsection
@section('content')
 <main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">About Us</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">About us</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->

    <!-- overview area  -->
    <section class="aboutpage__overview">
      <div class="container">
        <h3 class="aboutpage__subtitle">Our Story</h3>
        <h2 class="aboutpage__title">The Leading Global Marketplace for <br> Learning and Instruction</h2>
      </div>
    </section>
    <!-- /overview area  -->

    <!-- video area  -->
    <div class="aboutpage__video">
      <div class="container">
        <div class="video__area-3">
          <div class="video__thumb-3">
            <img src="{{ asset('assets/imgs/inner/video2-thumb.jpg') }}" alt="video-thumb">
            <div class="video__iconwraper-3" >
              <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="video-icon-3 video-icon-4 video-link"  data-aos="flip-left" data-aos-delay="300"><i class="fa-solid fa-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /video area  -->

    <!-- Counter area start  -->
    <section class="aboutpage__counter">
      <div class="container">
        <div class="aboutpage__wrapper">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2">
                <div class="counter__img-2">
                  <img src="{{ asset('assets/imgs/inner/about-1.png') }}" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">50k+</h2>
                  <p>History Of High Achievers</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2">
                <div class="counter__img-2">
                  <img src="{{ asset('assets/imgs/inner/about-2.png') }}" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">30K+</h2>
                  <p>Classes Completed</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2">
                <div class="counter__img-2">
                  <img src="{{ asset('assets/imgs/inner/about-3.png') }}" alt="Icon">
                </div>
                <div class="counter__info-2">
                  <h2 class="counter__number-2 counter_medium">63+</h2>
                  <p>Total Acres Of The Land</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="counter__item-2">
                <div class="counter__img-2">
                  <img src="{{ asset('assets/imgs/inner/about-4.png') }}" alt="Icon">
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

    <!-- About area start  -->
    <section class="about__area about-inner">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="about__inner">
              <div class="about__img">
                <img src="{{ asset('assets/imgs/home-1/about-3.jpg') }}" alt="Image" class="image">
                <img src="{{ asset('assets/imgs/home-1/shape.png') }}" alt="shape" class="shape">

                <div class="about__success">
                  <div class="success-story">
                    <div class="left">
                      <img src="{{ asset('assets/imgs/home-1/about-3.png') }}" alt="Image">
                    </div>
                    <div class="right">
                      <h2 class="title"> Success Story</h2>
                      <p>Student Success History</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="about__content">
                <h3 class="sec-subtitle"><img src="{{ asset('assets/imgs/home-1/dot.png') }}" alt=""> Welcome to Education </h3>
                <h4 class="sec-title">New Experience Learn <br>
                  to the <span class="color-pink">Next Level</span> <br>
                  Your Career
                </h4>
                <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore convergence
                  before real-time partnerships total linkage for intuitive benefits restore convergence before
                  real-time.</p>
                <ul>
                  <li>The foundation for a lifetime of success</li>
                  <li>Find the right instructor for you</li>
                  <li>Popular topics to learn now</li>
                </ul>
                <div class="btm">
                  <div class="project-story">
                    <div class="left">
                      <img src="{{ asset('assets/imgs/home-1/about-2.png') }}" alt="Image">
                    </div>
                    <div class="right">
                      <h2 class="title">Mark Andersson </h2>
                      <p>Project Manager</p>
                    </div>
                  </div>

                  <div class="about__btn">
                    <a href="" class="btn-ractangle-2">Explore More <img src="{{ asset('assets/imgs/home-1/arrow.png') }}"
                        alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About area end  -->

    <!-- Why area start  -->
    <section class="why__area-about">
      <div class="online__class">
        <h2 class="online__title">Ready to dive in? Start Your <br> Free Course today.</h2>
        <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore convergence befores <br> total linkage for intuitive benefits restore convergence before real-time.</p>
        <a href="" class="btn-ractangle-2 my-2">Become a Instructor </a>
        <a href="" class="btn-ractangle-2">Become a Partner </a>
      </div>
    </section>
    <!-- Why area end  -->

    <!-- Instructor area start  -->
    <section class="instructor__area-about pb-130">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title-wrapper">
              <h2 class="sec-subtitle"><img src="{{ asset('assets/imgs/home-1/dot.png') }}" alt=""> Instructor's </h2>
              <h3 class="sec-title">Our Expert <span>Instructors</span></h3>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="instructor__category">
              <img src="{{ asset('assets/imgs/home-1/shape-5.png') }}" alt="shape" class="shape">
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
            <div class="instructor__list">
              <div class="instructor__item">
                <a href=""><img src="{{ asset('assets/imgs/home-1/teacher-9.png') }}" alt="Image" style="border-radius:50%;width:200px;height:200px;object-fit:cover;"></a>
                <a href="">
                  <h4 class="instructor__name">Nganou Joshua</h4>
                </a>
                <p>UI Designer</p>

                <div class="share__wrap">
                  <button class="share-btn"><i class="fa-solid fa-plus"></i></button>
                  <ul class="social-share">
                    <li style="--i:1"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li style="--i:2"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li style="--i:3"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="instructor__item">
                <a href="">
            <img src="{{ asset('assets/imgs/home-1/teacher-6.png') }}" alt="Image"style="border-radius:50%;width:200px;height:200px;object-fit:cover;" >
                </a>
                <a href="">
                  <h4 class="instructor__name">Adeline Sprinton</h4>
                </a>
                <p>UI Designer</p>

                <div class="share__wrap">
                  <button class="share-btn"><i class="fa-solid fa-plus"></i></button>
                  <ul class="social-share">
                    <li style="--i:1"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li style="--i:2"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li style="--i:3"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="instructor__item">
                <a href=""><img src="{{ asset('assets/imgs/home-1/teacher-7.png') }}" alt="Image" style="border-radius:50%;width:200px;height:200px;object-fit:cover;" ></a>
                <a href="">
                  <h4 class="instructor__name">Jenny Wilson</h4>
                </a>
                <p>UI Designer</p>

                <div class="share__wrap">
                  <button class="share-btn"><i class="fa-solid fa-plus"></i></button>
                  <ul class="social-share">
                    <li style="--i:1"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li style="--i:2"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li style="--i:3"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="instructor__item">
                <a href=""><img src="{{ asset('assets/imgs/home-1/teacher-8.png') }}" alt="Image" style="border-radius:50%;width:200px;height:200px;object-fit:cover;"></a>
                <a href="">
                  <h4 class="instructor__name">Adolpho kenny</h4>
                </a>
                <p>UI Designer</p>

                <div class="share__wrap">
                  <button class="share-btn"><i class="fa-solid fa-plus"></i></button>
                  <ul class="social-share">
                    <li style="--i:1"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li style="--i:2"><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li style="--i:3"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Instructor area end  -->

    <!-- FAQ area start  -->
    <section class="faq__area pt-120 pb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="faq__left">
              <img src="{{ asset('assets/imgs/home-1/faq-2.png') }}" alt="Image" class="image">
        <img src="{{ asset('assets/imgs/home-1/shape.png') }}" alt="" class="shape">
              <div class="contact-box">
                <p>Contact Us For a <span>Free Learning</span> Consulting Evaluation</p>
                <ul>
                  <li>
                    <img src="{{ asset('assets/imgs/home-1/shape-6.png') }}" alt="Icon">
                    <a href="tel:123 671 107 454">671 107 454</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faq__right">
              <div class="title-wrapper">
                <h2 class="sec-subtitle"><img src="{{ asset('assets/imgs/home-1/dot.png') }}" alt="Dot"> FAQ</h2>
                <h3 class="sec-title">Frequently Asked Questions</h3>
                <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore convergence
                  before real-time restore.</p>
              </div>

              <div class="faq__list">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_1">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                        1. Why choose us for your education?
                      </button>
                    </h2>
                    <div id="collapse_1" class="accordion-collapse collapse show" aria-labelledby="heading_1"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We care about safety big time — and so do your site's visitors. With a Shared Hosting
                          account, you get an SSL certificate for free to add to your site. In this day and age, having
                          an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors
                          feel safe interacting with your site — this is particularly important if you run an e-commerce
                          site.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                        2.Why choose us for your education?
                      </button>
                    </h2>
                    <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We care about safety big time — and so do your site's visitors. With a Shared Hosting
                          account, you get an SSL certificate for free to add to your site. In this day and age, having
                          an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors
                          feel safe interacting with your site — this is particularly important if you run an e-commerce
                          site.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                        3.What We Offer To You?
                      </button>
                    </h2>
                    <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="heading_3"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We care about safety big time — and so do your site's visitors. With a Shared Hosting
                          account, you get an SSL certificate for free to add to your site. In this day and age, having
                          an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors
                          feel safe interacting with your site — this is particularly important if you run an e-commerce
                          site.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                        How We Provide Services For You?
                      </button>
                    </h2>
                    <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>We care about safety big time — and so do your site's visitors. With a Shared Hosting
                          account, you get an SSL certificate for free to add to your site. In this day and age, having
                          an SSL for your site is a no-brainer best practice. Not only does an SSL help your visitors
                          feel safe interacting with your site — this is particularly important if you run an e-commerce
                          site.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ area end  -->


  </main>
@endsection

