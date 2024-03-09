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
        <h2 class="breadcrumb__title">Team Details</h2>
        <ul class="breadcrumb__menu">
          <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
          <li><a href="#">Team Details</a></li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb area  -->


    <!-- team details  -->
    <div class="teamDetails__area">
      <div class="container">
        <div class="teamDetails__wrapper">
          <div class="teamDetails__thumb">
            <img src="{{ asset('assets/imgs/inner/team-details-1.jpg') }}" alt="thumb-1">
          </div>
          <div class="teamDetails__content">
            <h4 class="teamDetails__name">Alextina Miles</h4>
            <span class="teamDetails__post">Project Manager</span>
            <p class="teamDetails__dis">Digital Product Engineering Services leader helping Fortune 500 companies on their innovation agenda. In Matilda`s time as President and CEO of company, the company experienced explosive growth in size and revenu</p>
            <ul class="teamDetails__skills">
              <li><span>Experience:</span> Law Teacher </li>
              <li><span>Email:</span> Alextina@example.com </li>
              <li><span>LPhone:</span> +880132564-987 </li>
              <li><span>Location:</span> Preston Rd. Inglewood, New York. </li>
            </ul>
            <ul class="teamDetails__social">
              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
        <h4 class="teamDetails__title">Personal Info</h4>
        <p class="teamDetails__distwo">Since joining EduQuest  in 2023, Matilda has helped turn the company from a group of bright technology minds working with startups into a global Digital Product Engineering Services leader helping Fortune 500 companies on their innovation agenda. In Matilda`s time as President and CEO of company, the company has experienced explosive growth in size and revenue – all while developing a culture that fosters engaged employees around innovation.</p>
        <p class="teamDetails__distwo">Since joining EduQuest  in 2023, Matilda has helped turn the company from a group of bright technology minds working with startups into a global Digital Product Engineering Services leader helping Fortune 500 companies on their innovation agenda. In Matilda`s time as President and CEO of company, the company has experienced explosive growth in size and revenue – all while developing a culture that fosters engaged employees around innovation.</p>
        <div class="teamDetails__experience">
          <div class="teamDetails__item">
            <h4 class="teamDetails__title">Experience & Activities</h4>
            <p>Since joining EduQuest  in 2023, Matilda has helped turn the company from a group of bright technology minds working with startups into a global Digital Product Engineering Services leader helping Fortune 500 companies on their innovation agenda. In Matilda`s time as President and CEO of company, the company has experienced explosive growth in size and revenue – all while developing a culture that fosters engaged employees around innovation.</p>
          </div>
          <div class="teamDetails__item">
            <h4 class="teamDetails__title">Professional Skills</h4>
            <div class="progress-wrapper">
              <div class="progress-header">
                <h4 class="title">Consulting </h4>
                <span>80%</span>
              </div>
              <div class="progress-body"></div>
            </div>
            <div class="progress-wrapper">
              <div class="progress-header">
                <h4 class="title">Mathematics </h4>
                <span>80%</span>
              </div>
              <div class="progress-body"></div>
            </div>
            <div class="progress-wrapper">
              <div class="progress-header">
                <h4 class="title">Mathematics </h4>
                <span>80%</span>
              </div>
              <div class="progress-body"></div>
            </div>
          </div>
        </div>
        <div class="eduquest__contact">
          <h4 class="teamDetails__title">Request A Quote For Study</h4>
          <p>Feel Free to Contact us through Twitter ir Facebook Get in touch  it  you prefer!</p>
          <form action="#">
            <div class="eduquest__form">
              <div class="eduquest__fieldwrapper">
                <div class="eduquest__field">
                  <span>Name</span>
                  <input type="text" placeholder="Full Name">
                </div>
                <div class="eduquest__field">
                  <span>Email</span>
                  <input type="text" placeholder="Enter your Email">
                </div>
              </div>
              <div class="eduquest__fieldwrapper">
                <div class="eduquest__field">
                  <span>Phone No</span>
                  <input type="text" placeholder="Phone No">
                </div>
                <div class="eduquest__field">
                  <span>Subject</span>
                  <input type="text" placeholder="Web Development">
                </div>
              </div>
              <div class="eduquest__fullfield">
                <div class="eduquest__field">
                  <span>Phone No</span>
                  <textarea></textarea>
                </div>
              </div>
              <div class="eduquest__formbtnwrapper">
                <button type="submit" class="btn-ractangle">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /team details  -->


  </main>
@endsection

