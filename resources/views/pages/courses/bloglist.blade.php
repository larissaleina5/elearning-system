@extends('layouts.frontend.main')
@section('title')
Bloglist
@endsection
@section('content')
<main>


    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Blog Listing</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Blog Listing</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- course area  -->
    <section class="course__area-2 pt-120 pb-125">
        <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12">
                <article class="blog__item blog-lg-item mb-30">
                  <img src="{{ asset('assets/imgs/inner/blog-list-1.jpg') }}" alt="Thumbnail" class="image">
                  <div class="blog__content blog-lg-content">
                    <ul class="blog__meta">
                      <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                      <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                    </ul>
                    <a href="#">
                      <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                    </a>
                    <p>The end of the school year is always a time full of excitement, joy, and oodles of awards ceremonies to celebrate the year’s accomplishments. Teachers choose students to be publicly recognized for their achievements at an end-of-year assembly.</p>
                    <a href="" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
                  </div>
                </article>
                <article class="blog__item blog-lg-item mb-30">
                  <img src="{{ asset('assets/imgs/inner/blog-list-2.jpg') }}" alt="Thumbnail" class="image">
                  <div class="blog__content blog-lg-content">
                    <ul class="blog__meta">
                      <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                      <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                    </ul>
                    <a href="#">
                      <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                    </a>
                    <p>The end of the school year is always a time full of excitement, joy, and oodles of awards ceremonies to celebrate the year’s accomplishments. Teachers choose students to be publicly recognized for their achievements at an end-of-year assembly.</p>
                    <a href="" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
                  </div>
                </article>
                <article class="blog__item blog-lg-item mb-30">
                  <img src="{{ asset('assets/imgs/inner/blog-list-3.jpg') }}" alt="Thumbnail" class="image">
                  <div class="blog__content blog-lg-content">
                    <ul class="blog__meta">
                      <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                      <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                    </ul>
                    <a href="#">
                      <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                    </a>
                    <p>The end of the school year is always a time full of excitement, joy, and oodles of awards ceremonies to celebrate the year’s accomplishments. Teachers choose students to be publicly recognized for their achievements at an end-of-year assembly.</p>
                    <a href="" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
                  </div>
                </article>
                <article class="blog__item blog-lg-item mb-30">
                  <img src="{{ asset('assets/imgs/inner/blog-list-4.jpg') }}" alt="Thumbnail" class="image">
                  <div class="blog__content blog-lg-content">
                    <ul class="blog__meta">
                      <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                      <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                    </ul>
                    <a href="#">
                      <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                    </a>
                    <p>The end of the school year is always a time full of excitement, joy, and oodles of awards ceremonies to celebrate the year’s accomplishments. Teachers choose students to be publicly recognized for their achievements at an end-of-year assembly.</p>
                    <a href="" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
                  </div>
                </article>
                <article class="blog__item blog-lg-item mb-30">
                  <img src="{{ asset('assets/imgs/inner/blog-list-5.jpg') }}" alt="Thumbnail" class="image">
                  <div class="blog__content blog-lg-content">
                    <ul class="blog__meta">
                      <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                      <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                    </ul>
                    <a href="#">
                      <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                    </a>
                    <p>The end of the school year is always a time full of excitement, joy, and oodles of awards ceremonies to celebrate the year’s accomplishments. Teachers choose students to be publicly recognized for their achievements at an end-of-year assembly.</p>
                    <a href="" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
                  </div>
                </article>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="course__sidebar">
                  <div class="course__recentPost">
                    <h3>Search Now</h3>
                  </div>
                  <div class="course__widgetitem">
                    <form action="#">
                      <input type="text" name="search" id="search" placeholder="Search...">
                      <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                  </div>
                  <div class="course__recentPost">
                    <h3>About Author</h3>
                  </div>
                  <div class="course__widgetitem">
                    <div class="course__authorthumb">
                      <img src="{{ asset('assets/imgs/inner/author-1.jpg') }}" alt="author">
                    </div>
                    <h4 class="course__authorname">Marvin McKinney</h4>
                    <p>EduQuest is a frequent speaker on the topics of globa occaecat egestasquisquam.</p>
                    <ul class="course__authorsocial">
                      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                    </ul>
                  </div>
                    <div class="course__recentPost mb-30">
                        <h3>Recent Posts</h3>
                        <div class="course__recentPost-wrapper">
                            <div class="course__recentPost-item">
                                <div class="course__recentPost-left">
                                    <img src="{{ asset('assets/imgs/inner-2/recent-post-1.png') }}" alt="Post">
                                </div>
                                <div class="course__recentPost-right">
                                     <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                                     <a href="blog.html">
                                        <h5>How UDL Creates an Equitable Environment for Students</h5>
                                     </a>
                                </div>
                            </div>
                            <div class="course__recentPost-item">
                                <div class="course__recentPost-left">
                                    <img src="{{ asset('assets/imgs/inner-2/recent-post-2.png') }}" alt="Post">
                                </div>
                                <div class="course__recentPost-right">
                                     <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                                     <a href="blog.html">
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
                                     <a href="blog.html">
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
                                     <a href="blog.html">
                                        <h5>10 Favorite Writers for Middle School Students</h5>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course__recentPost mb-30">
                      <div class="course__recentPost">
                        <h3> Categories </h3>
                      </div>
                      <div class="course__categorywrapper">
                        <ul class="course__category-list">
                          <li><a href="course.html">Development</a> <span>08</span></li>
                          <li><a href="course.html">Digital Marketing</a> <span>06</span></li>
                          <li><a href="course.html">Financial</a> <span>03</span></li>
                          <li><a href="course.html">Business Consulting</a> <span>14</span></li>
                          <li><a href="course.html">Graphics Design</a> <span>21</span></li>
                          <li><a href="course.html">UI/UX Design</a> <span>09</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="course__recentPost mb-30">
                      <div class="course__recentPost">
                        <h3> Popular Courses</h3>
                      </div>
                      <div class="course__recent">
                           <div class="course__recentItem">
                            <div class="course__recentLeft">
                              <img src="{{ asset('assets/imgs/inner-2/thumb/recent-1.png') }}" alt="Image">
                            </div>
                            <div class="course__recentRight">
                              <a href="course-details.html">Learn Figma to Cms Beginner to Advanced</a>
                              <span>$80.00</span>
                            </div>
                           </div>
                           <div class="course__recentItem">
                            <div class="course__recentLeft">
                              <img src="{{ asset('assets/imgs/inner-2/thumb/recent-1.png') }}" alt="Image">
                            </div>
                            <div class="course__recentRight">
                              <a href="course-details.html">Learn Figma to Cms Beginner to Advanced</a>
                              <span>$80.00</span>
                            </div>
                           </div>
                           <div class="course__recentItem">
                            <div class="course__recentLeft">
                              <img src="{{ asset('assets/imgs/inner-2/thumb/recent-2.png') }}" alt="Image">
                            </div>
                            <div class="course__recentRight">
                              <a href="course-details.html">Learn Figma to Cms Beginner to Advanced</a>
                              <span>$20.00</span>
                            </div>
                           </div>
                           <div class="course__recentItem">
                            <div class="course__recentLeft">
                              <img src="{{ asset('assets/imgs/inner-2/thumb/recent-3.png') }}" alt="Image">
                            </div>
                            <div class="course__recentRight">
                              <a href="course-details.html">Learn Figma to Cms Beginner to Advanced</a>
                              <span>$35.00</span>
                            </div>
                           </div>
                      </div>
                    </div>
                    <div class="course__recentPost mb-30">
                      <div class="course__recentPost">
                        <h3> Popular Tags </h3>
                      </div>
                      <div class="course__categorywrapper">
                        <ul class="course__category-tags">
                          <li><a href="course.html">Development</a></li>
                          <li><a href="course.html">Digital Marketing</a></li>
                          <li><a href="course.html">Financial</a></li>
                          <li><a href="course.html">Business Consulting</a></li>
                          <li><a href="course.html">Graphics Design</a></li>
                          <li><a href="course.html">UI/UX Design</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="pagination-style-1">
              <ul class="mainblog__pagination">
                <li><a href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
              </ul>
            </div>
        </div>
    </section>
    <!-- /course area  -->



  </main>
@endsection
