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
                        @if(auth()->user())
                            @if(auth()->user()->role_id===1)
                                <li><a href="{{ route('admin.dashboard')}}">Dashboard</a>

                                </li>
                            @endif
                            @if(auth()->user()->role_id==3)
                                <li><a href="{{ route('teacher.dashboard')}}">Dashboard</a>

                                </li>
                            @endif

                        @endif

                      <li class="has-dropdown"><a href="{{ route('front.courses') }}">courses</a>
                        <ul class="main-dropdown">
<<<<<<< HEAD
                    <li><a href="{{route('front.courses')}}">Course</a></li>
                        <li><a href="course-2.html">Course v2</a></li>
                        <li><a href="#">Course Details</a></li>
=======
                        <li><a href="{{route('front.courses')}}">Courses</a></li>
                        <li><a href="#">Course Categories</a></li>
>>>>>>> 18c4549476b18f729396469fb00029c028871cfc
                        </ul>
                      </li>
                      </li>
                      <li class="has-dropdown"><a href="#">Categories</a>
                        <ul class="main-dropdown">
                            @foreach ($categories as $category)
                            <li><a href="course.html">{{ $category->category_name }}</a></li>
                            @endforeach

                        </ul>
                      </li>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="header__other">


                  <div class="header__search">
                    <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
                  </div>

                  @if(empty(auth()->user()))
                    <div class="header__btn">
                        <a href="{{ route('login') }}" class="btn-ractangle">Login</a>
                    </div>
                  @endif

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
