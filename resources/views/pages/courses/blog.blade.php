@extends('layouts.frontend.main')
@section('title')
Blog
@endsection
@section('content')

  <main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Blog</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->



    <!-- main blog  -->
    <section class="blog__innerpage">
      <div class="container">
        <div class="swiper mainblog-inneractive">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="blog__innerthumb">
                <img src="{{ asset("assets/imgs/inner/mainblog1.jpg") }}" alt="thumb"  style="width:100%; height:100%; border-radius:3rem;">
                <div class="blog__innercontent">
                  <ul class="blog__innerdate">
                    <li>E-Learning Education</li>
                    <li>Feb 18, 20223</li>
                  </ul>
                  <h2 class="blog__innertitle">Education Geometry New Ranking Strong Year-2023</h2>
                  <p>We care about safety big time & so do your site's  SSL certificate for commerce site parallel task tactical processes.</p>
                  <div class="blog__innerbtnwrap">
                    <a href="#"> Explore More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="blog__innerthumb">
                <img src="{{ asset('assets/imgs/inner/mainblog.jpg') }}" alt="thumb">
                                <div class="blog__innercontent">
                  <ul class="blog__innerdate">
                    <li>E-Learning Education</li>
                    <li>Feb 18, 20223</li>
                  </ul>
                  <h2 class="blog__innertitle">Education Geometry New Ranking Strong Year-2023</h2>
                  <p>We care about safety big time & so do your site's  SSL certificate for commerce site parallel task tactical processes.</p>
                  <div class="blog__innerbtnwrap">
                    <a href="#"> Explore More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="blog__innerthumb">
                <img src="{{ asset('assets/imgs/inner/mainblog.jpg') }}" alt="thumb">
                                <div class="blog__innercontent">
                  <ul class="blog__innerdate">
                    <li>E-Learning Education</li>
                    <li>Feb 18, 20223</li>
                  </ul>
                  <h2 class="blog__innertitle">Education Geometry New Ranking Strong Year-2023</h2>
                  <p>We care about safety big time & so do your site's  SSL certificate for commerce site parallel task tactical processes.</p>
                  <div class="blog__innerbtnwrap">
                    <a href="#"> Explore More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="blog__innerthumb">
                <img src="{{ asset('assets/imgs/inner/mainblog.jpg') }}" alt="thumb">
                                <div class="blog__innercontent">
                  <ul class="blog__innerdate">
                    <li>E-Learning Education</li>
                    <li>Feb 18, 20223</li>
                  </ul>
                  <h2 class="blog__innertitle">Education Geometry New Ranking Strong Year-2023</h2>
                  <p>We care about safety big time & so do your site's  SSL certificate for commerce site parallel task tactical processes.</p>
                  <div class="blog__innerbtnwrap">
                    <a href="#"> Explore More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- /main blog  -->

    <!-- main blog items  -->
    <div class="mainblog__items">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <div class="title-wrapper pb-80">
              <h2 class="sec-subtitle"><img src="{{ asset('assets/imgs/home-1/dot.png') }}" alt="dot"> blog</h2>
              <h3 class="sec-title">Latest from the Blog</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-16.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-18.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-3.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-4.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-5.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-19.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }} " alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-14.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-20.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-13.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-6.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-10.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article class="blog__item mb-30">
              <img src="{{ asset('assets/imgs/home-1/blog-7.jpg') }}" alt="Thumbnail" class="image">
              <div class="blog__content">
                <ul class="blog__meta">
                  <li><a href=""><i class="fa-solid fa-calendar-days"></i> Feb 18, 20223</a></li>
                  <li><a href=""><i class="fa-regular fa-clock"></i> 08 MIN</a></li>
                </ul>
                <a href="blog-details.html">
                  <h4 class="blog__title">Education Geometry New Ranking Strong Year-2023</h4>
                </a>
                <p>We care about safety big time & so do your site's SSL certificate for commerce site.</p>
                <a href="blog-details.html" class="btn-readmore">Explore More <img src="{{ asset('assets/imgs/home-1/arrow-3.png') }}" alt=""></a>
              </div>
            </article>
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
    </div>
    <!-- /main blog items  -->

  </main
@endsection
