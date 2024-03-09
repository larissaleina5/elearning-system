@extends('layouts.frontend.main')
@section('title')
Team
@endsectionl
@section('content')

  <main>

      <!-- breadcrumb area  -->
      <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png')}}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Team</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Team</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- Instructor area start  -->
    <section class="teampage__area pb-130">
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
                <a href="team-details.html"><img src="{{ asset('assets/imgs/home-1/teacher-1.png') }}" alt="Image"></a>
                <a href="team-details.html">
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
                <a href="team-details.html">
                  <img src="{{ asset('assets/imgs/home-1/teacher-2.png') }}" alt="Image">
                </a>
                <a href="team-details.html">
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
                <a href="team-details.html"><img src="{{ asset('assets/imgs/home-1/teacher-3.png') }}" alt="Image"></a>
                <a href="team-details.html">
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
                <a href="team-details.html"><img src="{{ asset('assets/imgs/home-1/teacher-4.png') }}" alt="Image"></a>
                <a href="team-details.html">
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
                <a href="team-details.html"><img src="{{ asset('assets/imgs/home-1/teacher-1.png') }}" alt="Image"></a>
                <a href="team-details.html">
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
                <a href="team-details.html">
                  <img src="{{ asset('assets/imgs/home-1/teacher-2.png') }}" alt="Image">
                </a>
                <a href="team-details.html">
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
                <a href="team-details.html"><img src="{{ asset('assets/imgs/home-1/teacher-3.png') }}" alt="Image"></a>
                <a href="team-details.html">
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
                <a href="team-details.html"><img src="{{ asset('assets/imgs/home-1/teacher-4.png') }}" alt="Image"></a>
                <a href="team-details.html">
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
            </div>
          </div>
        </div>
        <div class="teampage__btnwrapper">
          <a href="#" class="btn-ractangle-2">Load More </a>
        </div>
      </div>
    </section>
    <!-- Instructor area end  -->

    <!-- Why area start  -->
    <section class="teampage__why">
      <div class="row">
        <div class="col-lg-12">
          <div class="teampage__class online__class">
            <h2 class="online__title">Ready to dive in? Start You <br>r Free Course today.</h2>
            <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore convergence before s <br> total linkage for intuitive benefits restore convergence before real-time.</p>
            <div class="teampage__whybtnwrapper">
              <a href="about.html" class="btn-ractangle-2">Become a Instructor <img src="{{ asset('assets/imgs/home-1/arrow.png') }}" alt=""></a>
              <a href="about.html" class="btn-ractangle-2">Become a Partner <img src="{{ asset('assets/imgs/home-1/arrow.png') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why area end  -->

    <!-- FAQ area start  -->
    <section class="faq__area pt-120 pb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="faq__left">
              <img src="{{ asset('assets/imgs/home-1/faq.png') }}" alt="Image" class="image">
              <img src="{{ asset('assets/imgs/home-1/shape.png') }}" alt="" class="shape">
              <div class="contact-box">
                <p>Contact Us For a <span>Free Learning</span> Consulting Evaluation</p>
                <ul>
                  <li>
                    <img src="{{ asset('assets/imgs/home-1/shape-6.png') }}" alt="Icon">
                    <a href="tel:0884500105">088 4500 105</a>
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
