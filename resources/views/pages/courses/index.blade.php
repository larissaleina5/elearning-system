@extends('layouts.frontend.main')

@section('title')
List of courses
@endsection
@section('content')

<main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
      <img class="shape-2" src="{{asset('assets/imgs/inner/bradcrumb-shape-2.png')}}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Browse Courses</h2>
        <ul class="breadcrumb__menu">
                <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
            <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Browse Courses</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- course area  -->
    <section class="course__area-2 course__area-3 pt-120 pb-125">
        <div class="container">
            <div class="course__wrapper-3">
                <div class="course__left-3">
                    <div class="course__sidebar">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="course__sidebarTitle" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                  Course Categories
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
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
                              <h2 class="course__sidebarTitle" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Instructor
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                                        <img src="{{ asset('assets/imgs/inner-2/recent-post-05.png') }}" alt="Post">
                                    </div>
                                    <div class="course__recentPost-right">
                                          <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                                          <a href="blog-details.html">
                                            <h5>Equitable nvironment for Students</h5>
                                          </a>
                                    </div>
                                </div>
                                <div class="course__recentPost-item">
                                    <div class="course__recentPost-left">
                                        <img src="{{ asset('assets/imgs/inner-2/recent-post-06.png') }}" alt="Post">
                                    </div>
                                    <div class="course__recentPost-right">
                                            <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                                          <a href="blog-details.html">
                                            <h5>Education Geometry New Year-2023</h5>
                                          </a>
                                    </div>
                                </div>
                                <div class="course__recentPost-item">
                                    <div class="course__recentPost-left">
                                        <img src="{{ asset('assets/imgs/inner-2/recent-post-08.png') }}" alt="Post">
                                    </div>
                                    <div class="course__recentPost-right">
                                          <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                                          <a href="blog-details.html">
                                            <h5>How IB Strategies Can Based Learning</h5>
                                          </a>
                                    </div>
                                </div>
                                <div class="course__recentPost-item">
                                    <div class="course__recentPost-left">
                                        <img src="{{ asset('assets/imgs/inner-2/recent-post-09.png') }}" alt="Post">
                                    </div>
                                    <div class="course__recentPost-right">
                                          <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                                          <a href="blog-details.html">
                                            <h5>10 Favorite Writers for School Students</h5>
                                          </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course__right-3">
                    <div class="course__grid">
                        <div class="course__grid-top">
                              <div class="course__grid-topLeft">
                                  <form class="course__search">
                                    <input class="form-control" type="search" placeholder="Search Course" aria-label="Search">
                                  </form>
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
                                    <img src="{{ asset('assets/css/login.css') }}" alt="Icon">
                                  </div>
                              </div>
                        </div>


                        @foreach($courseIsPost as $course)
                        <div class="course__grid-3">
                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ Storage::url($course->course_profile) }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">{{ $course->category->category_name }}</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">{{ $course->course_name }}</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>
                                </div>
                                <div class="course__btm3">
                                      <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                      <span>Jerome Bell</span>
                                </div>
                                </div>
                               </div>
                            @endforeach








                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/15.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">How to design a logo - a beginners course</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>
                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Cody Fisher</span>
                                </div>
                                </div>
                            </div>




                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/16.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">How to became a startup founder</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>
                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Darlene Robertson</span>
                                </div>
                                </div>
                            </div>



                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/17.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                      <span class="course__category-title">UI/UX Design</span>
                                      <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                    </div>
                                      <h6 class="course__itemTitle"><a href="course-details.html">Advance Beginner's Goal & Managing Course</a></h6>
                                    <div class="course__rating">
                                    <div class="course__rating-item">
                                      (4 ratings)
                                    </div>
                                    <div class="course__rating-item">
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                    </div>
                                  </div>
                                  <div class="course__btm3">
                                    <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                    <span>Savannah Nguyen</span>
                                  </div>
                                </div>
                            </div>


                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/18.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">Leadership and Management Skills</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>
                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Cameron Williamson</span>
                                </div>
                                </div>
                            </div>



                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/19.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">Basic Accounting Principles for Non-Accountants</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>

                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Ronald Richards</span>
                                </div>
                                </div>
                            </div>



                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/25.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">Cybersecurity Fundamentals for Everyone</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>

                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Wade Warren</span>
                                </div>
                                </div>
                            </div>




                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/21.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">Business & Management studies</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>

                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Esther Howard</span>
                                </div>
                                </div>
                            </div>


                            <div class="course__item-2">
                            <div class="course__content-4">
                                <div class="course__img-3">
                                <img src="{{ asset('assets/imgs/inner-2/course-v2/30.jpg') }}" alt="Image">
                                <span class="course__priceTitle">$49.00</span>
                            </div>
                                <div class="course__category-3">
                                <span class="course__category-title">UI/UX Design</span>
                                <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                </div>
                                <h6 class="course__itemTitle"><a href="course-details.html">History of art, architecture & design</a></h6>
                            <div class="course__rating">
                                <div class="course__rating-item">
                                (4 ratings)
                                </div>
                                <div class="course__rating-item">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                </div>
                              </div>
                              <div class="course__btm3">
                                <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                <span>Eleanor Pena</span>
                              </div>
                              </div>
                            </div>




                            <div class="course__item-2">
                                <div class="course__img-3">
                                    <img src="{{ asset('assets/imgs/inner-2/course-v2/23.jpg') }}" alt="Image">
                                    <span class="course__priceTitle">$49.00</span>
                                </div>
                                <div class="course__content-4">
                                  <div class="course__category-3">
                                    <span class="course__category-title">UI/UX Design</span>
                                    <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                  </div>
                                    <h6 class="course__itemTitle"><a href="course-details.html">Marketing Fundamentals for Small Businesses</a></h6>
                                <div class="course__rating">
                                  <div class="course__rating-item">
                                    (4 ratings)
                                  </div>
                                  <div class="course__rating-item">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </div>

                                </div>
                                <div class="course__btm3">
                                  <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                  <span>Arlene McCoy</span>
                                </div>
                                </div>
                            </div>




                            <div class="course__item-2">
                              <div class="course__content-4">
                                <div class="course__img-3">
                                  <img src="{{ asset('assets/imgs/inner-2/course-v2/29.jpg') }}" alt="Image">
                                  <span class="course__priceTitle">$49.00</span>
                              </div>
                                <div class="course__category-3">
                                  <span class="course__category-title">UI/UX Design</span>
                                  <span class="course__student-3"><i class="fa-solid fa-layer-group"></i> 40+ Students</span>
                                </div>
                                  <h6 class="course__itemTitle"><a href="course-details.html">Become a PHP master and make money fast</a></h6>
                              <div class="course__rating">
                                <div class="course__rating-item">
                                  (4 ratings)
                                </div>
                                <div class="course__rating-item">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                </div>
                              </div>
                              <div class="course__btm3">
                                <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                                <span>Arlene McCoy</span>
                              </div>
                              </div>
                            </div>



                        <ul class="course__pagination">
                            <li class="page-item">
                                <a class="pagination-link" href="#" aria-label="Previous">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                              </li>
                            <li class="page-item"><a href="">1</a></li>
                            <li class="page-item"><a href="">2</a></li>
                            <li class="page-item"><a href="">3</a></li>
                            <li class="page-item"><a href="">4</a></li>
                            <li class="page-item">
                                <a class="pagination-link" href="#" aria-label="Next">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                              </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /course area  --

  </main>


@endsection
