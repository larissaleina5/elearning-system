@extends('layouts.frontend.main')
@section('title')
Blog details
@endsection
@section('content')
 <main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Blog Details</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Blog Details</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- course area  -->
    <section class="course__area-2 pt-120 pb-125">
        <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-8">
                <div class="blog__details">
                  <div class="blog__detailsthumb">
                    <img src="{{ asset('assets/imgs/inner/blog-details-2.jpg') }}" alt="details">
                  </div>
                  <ul class="blog__detailsdate">
                    <li>E-Learning Education</li>
                    <li><i class="fa-solid fa-calendar-days"></i> July 29, 2023</li>
                    <li><i class="fa-solid fa-user-pen"></i> Leslie Alexander</li>
                  </ul>
                  <p> our worldwide annual spend on digital advertising surpassing $325 billion, it’s no surprise that different
                    apches to online marketing are becoming available. One of these new approaches is performance
                    or digital performance marketing. Keep reading to learn all about performance marketing, from how it works to it compares to digital marketing. Plus, get insight into the benefits and risks of performance marketing and how itcan affect your company’s long-term success and profitability. Performance marketing is an approach to digitalmarketing or advertising where businesses only pay when a specific result occurs. This result could be a new lead,sale, or other outcome agreed upon by the advertiser and business. Performance marketing involves channels such as affiliate marketing, online advertising.</p>

                    <ul class="blog__detailslist">
                    <li>Another way to promote reflection, not perfection</li>
                    <li>This practice will help students think interdependently</li>
                    <li>Self-reflection requires courage and patience</li>
                    <li>Teaching students to be self-reflective will give them a skill</li>
                   </ul>

                    <h2>Favorite Writers for Middle School Students</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit tincidunt iaculis eget interdum pretium ullamcorper est dui, donec feugiat at etiam aliquam ornare parturient ut convallis gravida malesuada netus commodo hendrerit lorem sed imperdiet praesent consectetur fermentum.</p>

                    <ul class="blog__detailslist">
                    <li>Neque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
                    <li>Adipiscing elit ut aliquam purus sit amet viverra suspendisse potenti</li>
                    <li>Mauris commodo quis imperdiet massa tincidunt nunc pulvinar</li>
                    <li>Adipiscing elit ut aliquam purus sit amet viverra suspendisse potenti</li>
                    </ul>


                    <div class="blog__detailvideo">
                    <div class="blog__detailvideothumb">
                      <img src="{{ asset('assets/imgs/inner/details1-video-play.jpg') }}" alt="videothumb">
                      <a class="blog__detailvideoicon video-link" href="https://youtu.be/pNje3bWz7V8"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="blog__detailvideocontent">
                      <h2>Education Research You Can Use</h2>
                      <p>The end of the school year is always a time full of excitement, joy, and oodles of </p>
                      <p>elf-reflection requires courage and patience. Teaching students to be self-reflective will give them a skill that will help them throughout their lives in whatever path they choose.</p>
                    </div>
                    </div>
                    <h2>Keep Up With Education Research</h2>
                    <p>Supported substance consolidates parts of web based promoting and substance showcasing. It includes making substance, for example, a blog entry or video and paying for its consideration on a site that routinely distributes comparative substance. A piece of supported substance will seem to be like the remainder of the substance on the site yet will incorporate some sign that it’s supported. With execution showcasing, you would pay a pre-decided aps on your supported article navigates to your site from the article.</p>
                    <div class="blog__quote">
                    <img src="{{ asset('assets/imgs/inner/quote-light.png') }}" alt="quote-left">
                    <h2>Have students make a “strengths résumé” at the beginning of the year that  identify areas to improve</h2>
                    <h4>Leslie Alexander</h4>
                      </div>
                    <p>Supported substance consolidates parts of web based promoting and substance showcasing. It includes making substance, for example, a blog entry or video and paying for its consideration on a site that routinely distributes comparative substance. A piece of supported substance will seem to be like the remainder of the substance on the site yet will incorporate some sign that it’s supported. With execution showcasing, you would pay a pre-decided aps on your supported article navigates to your site from the article.</p>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="blog__tagswrap">
                        <span>Tags.</span>
                        <ul class="blog__tagslist">
                          <li>E- Learning</li>
                          <li>Design</li>
                          <li>Development</li>
                        </ul>
                       </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="blog__tagswrap justify-content-end">
                        <span>Share On</span>
                        <ul class="course__authorsocial pt-0">
                          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                        </ul>
                       </div>
                    </div>
                   </div>
                   <div class="cmt__form">
                    <div class="thumb">
                      <img src="{{ asset('assets/imgs/inner/cmt.png') }}" alt="thumb">
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
                   <div class="row">
                    <div class="col-lg-6">
                      <button class="blog__prevbtn"><i class="fa-solid fa-chevron-left"></i>  Previous Post </button>
                      <div class="blog__prev">
                        <div class="thumb">
                          <img src="{{ asset('assets/imgs/inner/prev-post.jpg') }}" alt="prevpost">
                        </div>
                        <div class="content">
                          <h5 class="blog__prevtitle">How Generative AI Can Support  Math Instruction</h5>
                          <span class="blog__prevdate">21 Jun 20223</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 text-end">
                      <button class="blog__prevbtn"> Next Post <i class="fa-solid fa-chevron-right"></i>  </button>
                      <div class="blog__prev">
                        <div class="thumb">
                          <img src="{{ asset('assets/imgs/inner/prev-post.jpg') }}" alt="prevpost">
                        </div>
                        <div class="content">
                          <h5 class="blog__prevtitle">How Generative AI Can Support  Math Instruction</h5>
                          <span class="blog__prevdate">21 Jun 20223</span>
                        </div>
                      </div>
                    </div>
                   </div>
                   <h2 class="comment__user-title">Comments(02)</h2>
                   <div class="comment__user">
                    <div class="comment__thumb">
                      <img src="{{ asset('assets/imgs/inner/comment-user.jpg') }}" alt="comment user image">
                    </div>
                    <div class="comment__content">
                      <div class="comment__content-header">
                        <h3 class="comment__name">Randy K. Melton</h3>
                        <span class="comment__date">05.03.2021 [11.00am]</span>
                      </div>
                      <p>Universal Design for Learning is a powerful framework to operationalize the right to education, supporting educators in maximizing desirable challenges</p>
                      <button type="button"> <img src="{{ asset('assets/imgs/inner/arrow-round.png') }}" alt="arrow-round"> REPLY</button>
                    </div>
                   </div>
                   <div class="comment__user ml-90 mt-30">
                    <div class="comment__thumb">
                      <img src="assets/imgs/inner/comment-user.jpg" alt="comment user image">
                    </div>
                    <div class="comment__content">
                      <div class="comment__content-header">
                        <h3 class="comment__name">Randy K. Melton</h3>
                        <span class="comment__date">05.03.2021 [11.00am]</span>
                      </div>
                      <p>Universal Design for Learning is a powerful framework to operationalize the right to education, supporting educators in maximizing desirable challenges</p>
                      <button type="button"> <img src="{{ asset('assets/imgs/inner/arrow-round.png') }}" alt="arrow-round"> REPLY</button>
                    </div>
                   </div>
                   <div class="comment__user-form">
                    <form action="#">
                      <div class="comment__user-field">
                        <textarea placeholder="Write your Comment here..."></textarea>
                      </div>
                      <button type="submit">Post Comment</button>
                    </form>
                   </div>
                </div>
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
                      <img src="{{ asset('assets/imgs/inner/author-2.jpg') }}" alt="author">
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
                                    <img src="{{ asset('assets/imgs/inner-2/recent-post-05.png') }}" alt="Post">
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
                                    <img src="{{ asset('assets/imgs/inner-2/recent-post-06.png') }}" alt="Post">
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
                                    <img src="{{ asset('assets/imgs/inner-2/recent-post-07.png')}}" alt="Post">
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
                                    <img src="{{ asset('assets/imgs/inner-2/recent-post-08.png') }}" alt="Post">
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
        </div>
    </section>
    <!-- /course area  -->



  </main>
@endsection
