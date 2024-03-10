@extends('layouts.frontend.main')
@section('title')
{{ $course->course_name }}
@endsection
@section('content')
<main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
    <img class="shape-2" src="" alt="shape-1">
    <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
    <div class="container">
      <h2 class="breadcrumb__title">Courses Details</h2>
      <ul class="breadcrumb__menu">
        <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
        <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
        <li><a href="#">Courses Details</a></li>
      </ul>
    </div>
  </div>
  <!-- /breadcrumb area  -->


  <!-- course area  -->
  <section class="course__area-2 course__area-3 pt-120 pb-125">
      <div class="container">
          <div class="course__detailsWrp">
              <div class="course__detailsLeft">



                  <div class="course__detailsThumb">
                    <img src="{{ Storage::url($course->course_profile) }}" alt="Post">
                    <div class="course__detailsInfo">
                        <div class="course__authorBox">
                          <div class="course__author-img">
                            <img src="{{ asset($course->teacher->profile) }}" alt="Image">
                          </div>
                          <div class="author__info-3">
                            <span class="course__author-name">{{ $course->teacher->name }}</span>
                            <span class="course__author-degination">Sr. Instructor</span>
                          </div>
                        </div>
                        <div class="course__detailsCategory">
                          <span>Category :</span>
                          <p>{{ $course->category->category_name }} </p>
                        </div>
                        <div class="course__detailsReview">
                          <span>20 Reviews:</span> <br>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                  </div>





                  <div class="course__detailsContent">
                    <h2>Overview</h2>
                    <p>{{ $course->course_description }}</p>
                      <h2>What you'll learn</h2>

                  </div>
                  <div class="course__detailsfaqtitle">
                    <h2>Topics for this Course</h2>
                    <ul>
                      <li> <img src="{{ asset('assets/imgs/inner/icon-1.png') }}" alt="icon"> 30Module</li>
                      <li> <img src="{{ asset('assets/imgs/inner/icon-2.png') }}" alt="icon"> 4 Live class</li>
                      <li> <img src="{{ asset('assets/imgs/inner/icon-3.png') }}" alt="icon"> 20 Assignment</li>
                      <li> <img src="{{ asset('assets/imgs/inner/icon-4.png')}}" alt="icon">4 Test Project</li>
                    </ul>
                  </div>
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                      @foreach ($course->lessons as $index=>$lesson)
                      <div class="accordion-item">
                        <h2 class="course__sidebarTitle" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                            <div class="course__headerfaq">
                              <div class="course__headerfaqleft">
                                <span>Module</span>
                                <h2 class="course__headercount">02</h2>
                              </div>
                              <div class="right">
                                <h2 class="course__headerfaqtitle">{{ $lesson->lesson_title }}</h2>
                                <ul class="course__headercate">
                                  <li> <img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> 30Module</li>
                                  <li> <img src="{{ asset('assets/imgs/inner/icon-2.png') }}" alt="icon"> 4 Live class</li>
                                  <li> <img src="{{ asset('assets/imgs/inner/icon-3.png') }}" alt="icon"> 20 Assignment</li>
                                  <li> <img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> 4 Test Project</li>
                                </ul>
                              </div>
                            </div>
                          </button>
                        </h2>
                        <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <ul class="course__lecturelist">
                              <li><span><img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> Lecture 1.1 </span><span class="lecture">UI UX Fundamental & Figma Intro</span></li>
                              <li><span><img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> Lecture 1.2 </span><span class="lecture">Assignment 1 (UI UX Fundamental & Figma)</span></li>
                              <li><span><img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> Lecture 1.3 </span><span class="lecture">Human Centred Design & Figma basic</span></li>
                              <li><span><img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> Lecture 1.4 </span><span class="lecture">Module 1 Quiz</span></li>
                              <li><span><img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> Lecture 1.5 </span><span class="lecture">Assignment 2 (UI UX Fundamental & Figma )</span></li>
                              <li><span><img src="{{ asset('assets/imgs/inner/icon-4.png') }}" alt="icon"> Lecture 1.6 </span><span class="lecture">Module 1 live Test</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      @endforeach



                  </div>
                  <div class="cmt__form">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/inner/cmt1.png') }}" alt="thumb" style="border-radius:100%;width:200px;height:200px;object-fit:cover;">
                    </div>
                    <div class="content">
                      <h3>Cameron Williamson</h3>
                      <span class="v-post">Visitsite: Itech-themes</span>
                      <p class="dis">Self-reflection requires courage and patience. Teaching students to be self- them a skill that will help them throughout their lives.</p>
                      <ul class="course__authorsocial pt-0 justify-content-start">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <h2 class="course__feedbacktitle">Student Feedback</h2>
                  <div class="course__ratingbox">
                    <div class="course__ratingboxleft">
                      <h2 class="title">4.5</h2>
                      <div class="course__rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Total 3 Student Ratings</p>
                    </div>
                    <div class="course__ratingboxright">
                      <ul class="course__ratingprogress">
                        <li>5<span class="line"></span>2 Rating</li>
                        <li>5<span class="line"></span>2 Rating</li>
                        <li>5<span class="line"></span>2 Rating</li>
                        <li>5<span class="line"></span>2 Rating</li>
                        <li>5<span class="line"></span>2 Rating</li>
                      </ul>
                    </div>
                  </div>
              </div>
              <div class="course__detailsRight">
                <div class="course__video">
                  <div class="course__videooverview">
                    <img src="{{ Storage::url($course->course_profile) }}" alt="playicon">
                    <a class="blog__detailvideoicon video-link" href="https://youtu.be/pNje3bWz7V8"><i class="fa-solid fa-play"></i></a>
                  </div>
                  <p class="course__pricing">{{ $course->course_name }}</p>
                  <ul class="coursetwo__list">
                    <li>{{ count($course->lessons) }} lessons</li>
                    <li>Quizzes 1</li>
                    <li>Duration 10 weeks</li>
                    <li>Skill level All levels</li>
                    <li>Language English</li>
                    <li>Students 340</li>
                    <li>Assessments Yes</li>
                  </ul>
                  <button class="course__btnenroll">Enroll Now</button>
                  <button class="course__addtocart">Add to Cart</button>
                  <span class="course__gtitle">30 Day Money Back Gurantee</span>
                </div>
                <div class="course__recentPost">
                  <div class="course__recentPost">
                    <h3>Recent Courses</h3>
                  </div>
                  <div class="course__recent">

                        <div class="course__recentItem">
                        <div class="course__recentLeft">
                          <img src="{{ asset('assets/imgs/inner-2/thumb/recent-1.png') }}" alt="Image">
                        </div>
                        <div class="course__recentRight">
                          <a href="course.html">Learn Figma to Cms Beginner to Advanced</a>
                          <span>$80.00</span>
                        </div>
                        </div>

                        @foreach ($categories as $category )
                        <div class="course__recentItem">
                        <div class="course__recentLeft">
                          <img src="{{ asset('assets/imgs/inner-2/thumb/recent-1.png') }}" alt="Image">
                        </div>
                        <div class="course__recentRight">
                          <a href="course.html">{{ $category->category_name }}</a>
                          <span>$80.00</span>
                        </div>
                        </div>
                        @endforeach

                        <div class="course__recentItem">
                        <div class="course__recentLeft">
                          <img src="{{ asset('assets/imgs/inner-2/thumb/recent-2.png') }}" alt="Image">
                        </div>
                        <div class="course__recentRight">
                          <a href="course.html">{{ $category->category_name }}</a>
                          <span>$20.00</span>
                        </div>
                        </div>
                        <div class="course__recentItem">
                        <div class="course__recentLeft">
                          <img src="{{ asset('assets/imgs/inner-2/thumb/recent-3.png') }}" alt="Image">
                        </div>
                        <div class="course__recentRight">
                          <a href="course.html">{{ $category->category_name}}</a>
                          <span>$35.00</span>
                        </div>
                        </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="course__related">
            <div class="course__related-header">
              <h2>Related Course</h2>
              <div class="course__related-btn">
                <div class="course-related-next"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="course-related-prev"><i class="fa-solid fa-arrow-right"></i></div>
              </div>
            </div>

            <div class="swiper course-related-active">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="course__item-inner">
                    <div class="course__img-2">
                        <img src="{{ Storage::url($course->course_profile) }}" alt="Image">
                        <span><i class="fa-solid fa-star"></i>4.5 (120)</span>
                    </div>
                    <span class="course__category-title">{{ $course->category->category_name }}</span>
                        <h6><a href="course.html">{{ $course->course_name }}</a></h6>
                    <div class="course__info">
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-layer-group"></i> 15 Lessons</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-clock"></i> 4h 30m 15s</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-user"></i> Beginner</span>
                        </div>
                    </div>
                    <div class="course__btm">
                        <div class="course__btm-left">
                            <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                            <span>Jerome Bell</span>
                        </div>
                        <div class="course__btm-right">
                            <span class="course__price offer-price">$79.00</span>
                            <span class="course__price">$79.00</span>
                        </div>
                    </div>
                  </div>
                </div>





                <div class="swiper-slide">
                  <div class="course__item-inner">
                    <div class="course__img-2">
                        <img src="{{ asset('assets/imgs/inner-2/course/17.jpg') }}" alt="Image">
                        <span><i class="fa-solid fa-star"></i>4.5 (120)</span>
                    </div>
                    <span class="course__category-title">Mathematics</span>
                        <h6><a href="course.html">Create a Digital Illustration With Procreate</a></h6>
                    <div class="course__info">
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-layer-group"></i> 15 Lessons</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-clock"></i> 4h 30m 15s</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-user"></i> Beginner</span>
                        </div>
                    </div>
                    <div class="course__btm">
                        <div class="course__btm-left">
                            <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                            <span>Jerome Bell</span>
                        </div>
                        <div class="course__btm-right">
                            <span class="course__price offer-price">$79.00</span>
                            <span class="course__price">$79.00</span>
                        </div>
                    </div>
                  </div>
                </div>



                <div class="swiper-slide">
                  <div class="course__item-inner">
                    <div class="course__img-2">
                        <img src="{{ asset('assets/imgs/inner-2/course/16.jpg') }}" alt="Image">
                        <span><i class="fa-solid fa-star"></i>4.5 (120)</span>
                    </div>
                    <span class="course__category-title">Mathematics</span>
                        <h6><a href="course.html">Create a Digital Illustration With Procreate</a></h6>
                    <div class="course__info">
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-layer-group"></i> 15 Lessons</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-clock"></i> 4h 30m 15s</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-user"></i> Beginner</span>
                        </div>
                    </div>
                    <div class="course__btm">
                        <div class="course__btm-left">
                            <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                            <span>Jerome Bell</span>
                        </div>
                        <div class="course__btm-right">
                            <span class="course__price offer-price">$79.00</span>
                            <span class="course__price">$79.00</span>
                        </div>
                    </div>
                  </div>
                </div>



                <div class="swiper-slide">
                  <div class="course__item-inner">
                    <div class="course__img-2">
                        <img src="{{ asset('assets/imgs/inner-2/course/14.jpg') }}" alt="Image">
                        <span><i class="fa-solid fa-star"></i>4.5 (120)</span>
                    </div>
                    <span class="course__category-title">Mathematics</span>
                        <h6><a href="course.html">Create a Digital Illustration With Procreate</a></h6>
                    <div class="course__info">
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-layer-group"></i> 15 Lessons</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-clock"></i> 4h 30m 15s</span>
                        </div>
                        <div class="course__info-item">
                            <span><i class="fa-solid fa-user"></i> Beginner</span>
                        </div>
                    </div>
                    <div class="course__btm">
                        <div class="course__btm-left">
                            <img src="{{ asset('assets/imgs/inner-2/course/author.png') }}" alt="Image">
                            <span>Jerome Bell</span>
                        </div>
                        <div class="course__btm-right">
                            <span class="course__price offer-price">$79.00</span>
                            <span class="course__price">$79.00</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- /course area  -->
</main>
@endsection
