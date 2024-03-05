@extends('layouts.frontend.main')
@section('title')
Team
@endsection
@section('content')

 <main>


     <!-- breadcrumb area  -->
     <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Shop</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Shop</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- course area  -->
    <section class="course__area-2 pt-120 pb-125">
      <div class="container">
        <div class="product__shop">
          <div class="product__shop-left">
            <div class="course__sidebar">
                <div class="product__search">
                  <h2 class="product__search-title">Search Book</h2>
                  <form action="#" method="get">
                    <label for="search">search</label>
                    <input type="text" placeholder="Search Course" id="search">
                    <button type="submit" class="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
                </div>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="course__sidebarTitle" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                            Instructor
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-title">
                                    Instructor Name
                                </li>
                                <li class="list-title">
                                    Instructor Name
                                </li>
                                <li class="list-title">
                                    Instructor Name
                                </li>
                                <li class="list-title">
                                    Instructor Name
                                </li>
                            </ul>

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="course__sidebarTitle" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Course Categories
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Web Development
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Design
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  IT & Software
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Lifestyle
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Digital Marketing
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Photography & Videos
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Health & Fitness
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="course__sidebarTitle" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Price
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Price <span>(19)</span>
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Price <span>(08)</span>
                                </li>
                                <li class="list-title">
                                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                  Price <span>(16)</span>
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="course__sidebarTitle" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            All Courses
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-title">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    All Courses <span>20</span>
                                </li>
                                <li class="list-title">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Free Courses <span>20</span>
                                </li>
                                <li class="list-title">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    All Courses <span>20</span>
                                </li>
                            </ul>

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="course__sidebarTitle" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Year
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-title">
                                  Junuay 2020
                                </li>
                                <li class="list-title">
                                    Junuay 2020
                                </li>
                                <li class="list-title">
                                    Junuay 2020
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="course__sidebarTitle" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Tags
                        </button>
                      </h2>
                      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <li class="list-title">
                                  Desing <span>(19)</span>
                                </li>
                                <li class="list-title">
                                    Development <span>(08)</span>
                                </li>
                                <li class="list-title">
                                    Desing <span>(16)</span>
                                </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="course__recentPost">
                    <h3>Recent Posts</h3>
                    <div class="course__recentPost-wrapper">
                      <div class="course__recentPost-item">
                          <div class="course__recentPost-left">
                              <img src="{{ asset('assets/imgs/inner-2/recent-post-2.png') }}" alt="Post">
                          </div>
                          <div class="course__recentPost-right">
                               <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                               <a href="#">
                                  <h5>Education Geometry New Rank Strong Year-2023</h5>
                               </a>
                          </div>
                      </div>
                      <div class="course__recentPost-item">
                          <div class="course__recentPost-left">
                              <img src="{{ asset('assets/imgs/inner-2/recent-post-3.png') }}" alt="Post">
                          </div>
                          <div class="course__recentPost-right">
                               <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                               <a href="#">
                                  <h5>How IB Strategies Can Enhance Project-Based Learning</h5>
                               </a>
                          </div>
                      </div>
                      <div class="course__recentPost-item">
                          <div class="course__recentPost-left">
                              <img src="{{ asset('assets/imgs/inner-2/recent-post-4.png') }}" alt="Post">
                          </div>
                          <div class="course__recentPost-right">
                               <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                               <a href="#">
                                  <h5>10 Favorite Writers for Middle School Students</h5>
                               </a>
                          </div>
                      </div>
                  </div>
                </div>

            </div>
          </div>

          <div class="product__shop-right">
            <div class="course__grid">
                <div class="course__grid-top">
                      <div class="product__total">
                          <p>Showing 1-12 of 120 Results</p>
                      </div>
                      <div class="course__grid-topRight">
                        <div class="course__select">
                            <span>Sort by : </span>
                            <select class="form-select">
                                <option selected>Newest First</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                          </div>
                          <div class="course__iconBox">
                            <img src="{{ asset('assets/imgs/inner-2/icon/gird-icon.png') }}" alt="Icon">
                          </div>
                          <div class="course__iconBox">
                            <img src="{{ asset('assets/imgs/inner-2/icon/grid-bar.png') }}" alt="Icon">
                          </div>
                      </div>
                </div>

                <div class="product__grid">
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/2.jpg') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/3.jpg') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/4.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/5.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/6.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/7.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/8.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/9.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/11.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="product__item">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/shop/12.png') }}" alt="Product Image">
                    </div>
                    <div class="product__content">
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>4.5 ( 1k Review )</p>
                      </div>
                      <a href="course-details.html">
                        <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                      </a>
                      <div class="product__price">
                        <a href="">Add to cart</a>
                        <p>$135.00</p>
                      </div>
                    </div>
                  </div>


                </div>

                <ul class="course__pagination">
                    <li class="page-item">
                        <a class="pagination-link" href="#" aria-label="Previous">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                      </li>
                    <li class="page-item"><a href="">1</a></li>
                    <li class="page-item"><a href="">2</a></li>
                    <li class="page-item"><a href="">3</a></li>
                    <li class="page-item"><a href="">4</a></li>
                    <li class="page-item">
                        <a class="pagination-link" href="#" aria-label="Next">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                      </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /course area  -->



  </main>
@endsection
