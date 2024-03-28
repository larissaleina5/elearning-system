@extends('layouts.frontend.main')
@section('title')
{{ $lesson->lesson_title }}
@endsection
@section('content')
<main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
    <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
    <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
    <div class="container">
      <h2 class="breadcrumb__title">lesson Details</h2>
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



                  <div class="course__detailsThumb container">
                    <video style="width:90vw" controls>
                        <source src="{{ Storage::url($lesson->lesson_video) }}" type="video/mp4" />
                        <p>
                          Votre navigateur ne prend pas en charge les vidéos HTML5. Voici
                          <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.
                        </p>

                      </video>

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
                 {!! html_entity_decode($lesson->lesson_content   ) !!}


                  </div>
                  <div class="d-flex justify-content-center align-items-center">

                    <a href="{{ route('view.test',$lesson->id) }}" class="btn btn-danger mt-5 ">Start Quizz</button></a>
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
