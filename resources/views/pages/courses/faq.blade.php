@extends('layouts.frontend.main')
@section('title')
FAQ
@endsection
@section('content')
<main>

     <!-- breadcrumb area  -->
     <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Faq Page</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Faq Page</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->

    <!-- faq area  -->
    <div class="faqpage__area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="faqpage__innerleft">
              <div class="title-wrapper">
                <h3 class="sec-title pb-2">Frequently Asked Questions</h3>
                <p>Architect client-centered total linkage for intuitive benefits. Dynamically restore convergence
                  before real-time restore.</p>
                  <ul class="faqpage__lists" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> <i class="fa-solid fa-house"></i> General</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fa-solid fa-comments-dollar"></i> Payment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> <i class="fa-solid fa-headset"></i> Support</button>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faqpage__innerright">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="faq__list">
                <div class="accordion" id="accordionExample2">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_6">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
                        1. Why choose us for your education?
                      </button>
                    </h2>
                    <div id="collapse_6" class="accordion-collapse collapse show" aria-labelledby="heading_6"
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
                    <h2 class="accordion-header" id="heading_7">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_7" aria-expanded="false" aria-controls="collapse_7">
                        2.Why choose us for your education?
                      </button>
                    </h2>
                    <div id="collapse_7" class="accordion-collapse collapse" aria-labelledby="heading_7"
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
                    <h2 class="accordion-header" id="heading_8">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_8" aria-expanded="false" aria-controls="collapse_8">
                        3.What We Offer To You?
                      </button>
                    </h2>
                    <div id="collapse_8" class="accordion-collapse collapse" aria-labelledby="heading_8"
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
                    <h2 class="accordion-header" id="heading_9">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_9" aria-expanded="false" aria-controls="collapse_9">
                        How We Provide Services For You?
                      </button>
                    </h2>
                    <div id="collapse_9" class="accordion-collapse collapse" aria-labelledby="heading_9"
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
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="faq__list">
                <div class="accordion" id="accordionExample3">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_10">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_10" aria-expanded="true" aria-controls="collapse_10">
                        1. Why choose us for your education?
                      </button>
                    </h2>
                    <div id="collapse_10" class="accordion-collapse collapse show" aria-labelledby="heading_10"
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
                    <h2 class="accordion-header" id="heading_12">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_12" aria-expanded="false" aria-controls="collapse_12">
                        2.Why choose us for your education?
                      </button>
                    </h2>
                    <div id="collapse_12" class="accordion-collapse collapse" aria-labelledby="heading_12"
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
                    <h2 class="accordion-header" id="heading_13">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_13" aria-expanded="false" aria-controls="collapse_13">
                        3.What We Offer To You?
                      </button>
                    </h2>
                    <div id="collapse_13" class="accordion-collapse collapse" aria-labelledby="heading_13"
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
                    <h2 class="accordion-header" id="heading_14">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse_14" aria-expanded="false" aria-controls="collapse_14">
                        How We Provide Services For You?
                      </button>
                    </h2>
                    <div id="collapse_14" class="accordion-collapse collapse" aria-labelledby="heading_14"
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
        </div>
      </div>
    </div>
    <!-- faq area  -->

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

    <!-- faq contact  -->
    <div class="faq__contact">
      <div class="container">
        <div class="faq__contactwrapper">
          <div class="faq__thumb">
            <img src="{{ asset('assets/imgs/inner/faq-contact.jpg') }}" alt="thumb">
          </div>
          <div class="eduquest__contact">
            <h4 class="teamDetails__title">Request A Quote For Study</h4>
            <p>Feel Free to Contact us through Twitter ir Facebook Get in touch  it  you prefer!</p>
            <form action="#">
              <div class="eduquest__form">
                <div class="eduquest__fieldwrapper">
                  <div class="eduquest__field">
                    <span>Name</span>
                    <input type="text" placeholder="Full Name">
                  </div>
                  <div class="eduquest__field">
                    <span>Email</span>
                    <input type="text" placeholder="Enter your Email">
                  </div>
                </div>
                <div class="eduquest__fieldwrapper">
                  <div class="eduquest__field">
                    <span>Phone No</span>
                    <input type="text" placeholder="Phone No">
                  </div>
                  <div class="eduquest__field">
                    <span>Subject</span>
                    <input type="text" placeholder="Web Development">
                  </div>
                </div>
                <div class="eduquest__fullfield">
                  <div class="eduquest__field">
                    <span>Phone No</span>
                    <textarea></textarea>
                  </div>
                </div>
                <div class="eduquest__formbtnwrapper">
                  <button type="submit" class="btn-ractangle">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- faq contact  -->


  </main>
@endsection
