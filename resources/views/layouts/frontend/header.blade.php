<header class="header__area-2">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="header__inner">
            <div class="header__left">
              <div class="header__logo">
                <a href="">
                  <img src="{{asset('assets/imgs/home-1/loko.png')}}" alt="Logo">
                </a>
              </div>
            </div>
            <div class="header__right">
              <div class="header__btm">
                <div class="header__menu">
                  <div class="main-menu-2">
                    <ul>
                      <li class="has-dropdown"><a href="#">Dashboard</a>
                        <ul class="main-dropdown">
                          <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                        </ul>
                      </li>
                      <li class="has-dropdown"><a href="{{ route('front.courses') }}">courses</a>
                        <ul class="main-dropdown">
                        <li><a href="{{route('front.courses')}}">Course</a></li>
                        <li><a href="course-2.html">Course v2</a></li>
                        <li><a href="#">Course Details</a></li>
                        </ul>
                      </li>
                      <li><a href="about.html">About</a>
                      </li>
                      <li class="has-dropdown"><a href="#">pages</a>
                        <ul class="main-dropdown">
                          <li><a href="course.html">Course</a></li>
                          <li><a href="course-2.html">Course v2</a></li>
                          <li><a href="course-details.html">Course Details</a></li>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog-listing.html">Blog v.2</a></li>
                          <li><a href="blog-details.html">Blog Details</a></li>
                          <li><a href="shop.html">Shop</a></li>
                          <li><a href="product-details.html">Shop Details</a></li>
                          <li><a href="team.html">team</a></li>
                          <li><a href="faq.html">Faq</a></li>
                          <li><a href="contact.html">contact</a></li>
                          <li><a href="gallary.html">Gallary</a></li>
                          <li><a href="404.html">404</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('login')}}">login</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="header__other">
                  <div class="header__lang header__lang-2">
                    <div class="dropdown">
                      <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-solid fa-globe"></i>Eng</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Eng</a></li>
                        <li><a class="dropdown-item" href="#">France</a></li>
                        <li><a class="dropdown-item" href="#">spanish</a></li>
                        <li><a class="dropdown-item" href="#">German</a></li>
                        <li><a class="dropdown-item" href="#">Poland</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="header__cart header__cart-2">
                    <button class="cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                  </div>
                  <div class="header__search">
                    <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
                  </div>
                  <div class="header__btn">
                    <a href="#" class="btn-ractangle">Join Now</a>
                  </div>
                  <div class="mobile__menu">
                    <button class="menu-icon"><i class="fa-solid fa-bars"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container position-relative">
      <div class="search__form">
        <form action="#">
          <input type="text" name="s" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>
