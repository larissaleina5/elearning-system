@extends('layouts.frontend.main')
@section('title')
Product
@endsection
@section('content')
 <main>


     <!-- breadcrumb area  -->
     <div class="breadcrumb__area">
      <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
      <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
      <div class="container">
        <h2 class="breadcrumb__title">Product Details</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Product Details</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- Product details start -->
    <section class="product__details-area pt-120 pb-125">
      <div class="container">
        <div class="product__details-inner">
          <div class="product__details-left">
            <div class="tab-content" id="nav-tabContent2">
              <div class="tab-pane fade show active" id="product-img-1" role="tabpanel" aria-labelledby="product-img-1-tab" tabindex="0">
                <div class="product__details-img">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Image">
                </div>
              </div>
              <div class="tab-pane fade" id="product-img-2" role="tabpanel" aria-labelledby="product-img-2-tab" tabindex="0">
                <div class="product__details-img">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Image">
                </div>
              </div>
              <div class="tab-pane fade" id="product-img-3" role="tabpanel" aria-labelledby="product-img-3-tab" tabindex="0">
                <div class="product__details-img">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Image">
                </div>
              </div>
              <div class="tab-pane fade" id="product-img-4" role="tabpanel" aria-labelledby="product-img-4-tab" tabindex="0">
                <div class="product__details-img">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Image">
                </div>
              </div>
            </div>

            <nav class="product__details-imgs">
              <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                <button class="nav-link active" id="product-img-1-tab" data-bs-toggle="tab" data-bs-target="#product-img-1" type="button" role="tab" aria-controls="product-img-1" aria-selected="true">
                  <img src="{{ asset('assets/imgs/shop/13.png') }}" alt="Image">
                </button>
                <button class="nav-link" id="product-img-2-tab" data-bs-toggle="tab" data-bs-target="#product-img-2" type="button" role="tab" aria-controls="product-img-2" aria-selected="false">
                  <img src="{{ asset('assets/imgs/shop/13.png') }}" alt="Image">
                </button>
                <button class="nav-link" id="product-img-3-tab" data-bs-toggle="tab" data-bs-target="#product-img-3" type="button" role="tab" aria-controls="product-img-3" aria-selected="false">
                  <img src="{{ asset('assets/imgs/shop/13.png') }} " alt="Image">
                </button>
                <button class="nav-link" id="product-img-4-tab" data-bs-toggle="tab" data-bs-target="#product-img-4" type="button" role="tab" aria-controls="product-img-4" aria-selected="false">
                  <img src="{{ asset('assets/imgs/shop/13.png') }}" alt="Image">
                </button>
              </div>
            </nav>
          </div>
          <div class="product__details-right">
            <div class="rating">
              <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="rating">
              <span>(1 Customer Review)</span>
            </div>
            <h2 class="product__details-title">Wayfarer Messenger Bag</h2>
            <div class="text">
              <p>Faded short sleeves with high neckline. Soft and stretchy material for comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
            </div>
            <div class="sku">
              <p><strong>SKU:</strong> blox-fr-21</p>
            </div>
            <div class="category">
              <strong>Categories:</strong>
              <a href=""> History</a>,
              <a href="">Funny book</a>
            </div>
            <div class="size">
              <strong>Size :</strong>
              <select name="product size" id="product_size">
                <option value="m">m</option>
                <option value="l">l</option>
                <option value="xl">xl</option>
              </select>
            </div>
            <div class="social">
              <strong>Share Now : </strong>
              <ul>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-dribbble"></i></a></li>
                <li><a href=""><i class="fa-brands fa-behance"></i></a></li>
              </ul>
            </div>
            <div class="price">
              <p><span>$780.00</span> $480.00</p>
            </div>
            <div class="btns">
              <div class="quantity">
                <form>
                  <div class="value-button" id="decrease" onclick="decreaseValue()" >-</div>
                  <input type="number" id="quantity-number" value="0" />
                  <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                </form>
              </div>
              <div class="add-cart">
                <a href="#" class="btn-ractangle">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product details end -->


    <!-- Product info start -->
    <section class="product__info-area pb-125">
      <div class="container">
        <div class="product__info-inner">
          <div class="product__info-left">
            <nav class="info">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="product-description-tab" data-bs-toggle="tab" data-bs-target="#product-description" type="button" role="tab" aria-controls="product-description" aria-selected="true">Description</button>
                <button class="nav-link" id="product-specification-tab" data-bs-toggle="tab" data-bs-target="#product-specification" type="button" role="tab" aria-controls="product-specification" aria-selected="false">Specification</button>
                <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#product-review" type="button" role="tab" aria-controls="product-review" aria-selected="false">Reviews (1)</button>
              </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="product-description-tab" tabindex="0">
                <div class="product__description">
                  <h2>Description</h2>
                  <p>Distinctively pursue tactical niche markets vis-a-vis strategic models. Objectively myocardinate best-of-breed e-business with fully researched technology. Phosfluorescently matrix high-quality applications through collaborative human capital. Appropriately syndicate viral niches before accurate communities. Professionally generate empowered deliverables with leading-edge content.

                  </p>
                  <p>Uniquely unleash B2C portals without functional supply chains. Monotonectally visualize plug-and-play scenarios for enterprise-wide total linkage. Uniquely productivate flexible after.</p>
                  <h3>Perfect for fans of Barbara Kingsolver.”–Bustle</h3>
                  <p>Distinctively pursue tactical niche markets vis-a-vis strategic models. Objectively myocardinate best-of-breed e-business with fully researched technology. Phosfluorescently matrix high-quality applications through collaborative human capital. Appropriately syndicate viral niches before accurate communities. Professionally generate empowered deliverables with leading-edge content.</p>
                  <p>Uniquely unleash B2C portals without functional supply chains. Monotonectally visualize plug-and-play scenarios for enterprise-wide total linkage. Uniquely productivate flexible after.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="product-specification" role="tabpanel" aria-labelledby="product-specification-tab" tabindex="0">
                <div class="product__specification">
                  <p>Distinctively pursue tactical niche markets vis-a-vis strategic models. Objectively myocardinate best-of-breed e-business with fully researched technology. Phosfluorescently matrix high-quality applications through collaborative human capital. Appropriately syndicate viral niches before accurate communities. Professionally generate empowered deliverables with leading-edge content.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="product-review" role="tabpanel" aria-labelledby="product-review-tab" tabindex="0">
                <div class="product__review">
                  <div class="product__review-top">
                    <div class="content">
                      <h2>Reviews (1)</h2>
                      <p>Get specific details about this product from customers who own it.</p>
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                        <p>( 5 out of 5)</p>
                      </div>
                    </div>
                    <div class="review-btn">
                      <a href="" class="btn-border">Write a Review</a>
                    </div>
                  </div>

                  <div class="product__review-list">
                    <div class="product__review-item">
                      <div class="author">
                        <div class="top">
                          <div class="img">
                            <img src="{{ asset('assets/imgs/shop/14.png') }}" alt="User">
                          </div>
                          <div class="name">
                            <h3>Helena Garcia</h3>
                            <p>2 January, 2018</p>
                          </div>
                        </div>
                        <p>Information on technical characteristics, the delivery set, the country of manufacture and the appearance of the goods is for reference only and is based on the latest information of publication.</p>
                      </div>
                      <div class="rating">
                        <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product__info-right">
            <div class="course__recentPost">
              <h3>Recent Posts</h3>
              <div class="course__recentPost-wrapper">
                <div class="course__recentPost-item">
                    <div class="course__recentPost-left">
                        <img src="{{ asset('assets/imgs/inner-2/recent-post-2.png') }}" alt="Post">
                    </div>
                    <div class="course__recentPost-right">
                         <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                         <a href="blog-details.html">
                            <h5>Education Geometry New Rank</h5>
                         </a>
                    </div>
                </div>
                <div class="course__recentPost-item">
                    <div class="course__recentPost-left">
                        <img src="{{ asset('assets/imgs/inner-2/recent-post-3.png') }}" alt="Post">
                    </div>
                    <div class="course__recentPost-right">
                         <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                         <a href="blog-details.html">
                            <h5>How IB Strategies Can Enhance</h5>
                         </a>
                    </div>
                </div>
                <div class="course__recentPost-item">
                    <div class="course__recentPost-left">
                        <img src="{{ asset('assets/imgs/inner-2/recent-post-4.png') }}" alt="Post">
                    </div>
                    <div class="course__recentPost-right">
                         <h4><i class="fa-solid fa-calendar-days"></i> <span>Feb 18, 20223</span></h4>
                         <a href="blog-details.html">
                            <h5>10 Favorite Writers for Mids</h5>
                         </a>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product info end -->


    <!-- Related Products start -->
    <section class="related__product-area pb-120">
      <div class="container">
        <div class="related__product-title pb-30">
          <h2 class="sec-title">Related Products</h2>
        </div>

        <div class="swiper related_product_slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product__item">
                <div class="thumb">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Product Image">
                </div>
                <div class="product__content">
                  <div class="rating">
                    <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                    <p>4.5 ( 1k Review )</p>
                  </div>
                  <a href="course.html">
                    <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                  </a>
                  <div class="product__price">
                    <a href="">Add to cart</a>
                    <p>$135.00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__item">
                <div class="thumb">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Product Image">
                </div>
                <div class="product__content">
                  <div class="rating">
                    <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                    <p>4.5 ( 1k Review )</p>
                  </div>
                  <a href="course.html">
                    <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                  </a>
                  <div class="product__price">
                    <a href="">Add to cart</a>
                    <p>$135.00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__item">
                <div class="thumb">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Product Image">
                </div>
                <div class="product__content">
                  <div class="rating">
                    <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                    <p>4.5 ( 1k Review )</p>
                  </div>
                  <a href="course.html">
                    <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                  </a>
                  <div class="product__price">
                    <a href="">Add to cart</a>
                    <p>$135.00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__item">
                <div class="thumb">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Product Image">
                </div>
                <div class="product__content">
                  <div class="rating">
                    <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                    <p>4.5 ( 1k Review )</p>
                  </div>
                  <a href="course.html">
                    <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                  </a>
                  <div class="product__price">
                    <a href="">Add to cart</a>
                    <p>$135.00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product__item">
                <div class="thumb">
                  <img src="{{ asset('assets/imgs/shop/1.jpg') }}" alt="Product Image">
                </div>
                <div class="product__content">
                  <div class="rating">
                    <img src="{{ asset('assets/imgs/shop/rating.png') }}" alt="">
                    <p>4.5 ( 1k Review )</p>
                  </div>
                  <a href="course.html">
                    <h2 class="product__name">Start Guide  Beginner UI /UX Design Book</h2>
                  </a>
                  <div class="product__price">
                    <a href="">Add to cart</a>
                    <p>$135.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Related Products end -->


  </main>
@endsection
