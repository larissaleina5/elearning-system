@extends('layouts.frontend.main')
@section('title')
Gallery
@endsection
@section('content')
<main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
     <img class="shape-2" src="{{ asset('assets/imgs/inner/bradcrumb-shape-2.png') }}" alt="shape-1">
     <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
     <div class="container">
       <h2 class="breadcrumb__title">Gallary</h2>
       <ul class="breadcrumb__menu">
         <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
         <li><a href="#">Page</a><i class="fa-solid fa-chevron-right"></i></li>
         <li><a href="#">Gallary</a></li>
       </ul>
     </div>
   </div>
   <!-- /breadcrumb area  -->


   <!-- Gallary area  -->
   <div class="gallary__innerarea">
     <div class="container">
       <div class="gallary__innersectionwrap">
         <h2 class="gallary__sectitle">EduQuest Gallery</h2>
         <p>Universal Design for Learning  powerful framework to operationalize the right to <br> education supporting educators in maximizing desirable c</p>
       </div>
       <div class="gallary__inneritems">
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g1.jpg') }}" alt="galary-img">
         </div>
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g2.jpg') }}" alt="galary-img">
         </div>
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g3.jpg') }}" alt="galary-img">
         </div>
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g4.jpg') }}" alt="galary-img">
         </div>
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g5.jpg') }}" alt="galary-img">
         </div>
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g6.jpg') }}" alt="galary-img">
         </div>
         <div class="gallary__inneritem">
           <img src="{{ asset('assets/imgs/inner/g7.jpg') }}" alt="galary-img">
         </div>
       </div>
       <div class="teampage__btnwrapper">
         <a href="#" class="btn-ractangle-2">Load More </a>
       </div>
     </div>
   </div>
   <!-- /Gallary area  -->


 </main>
@endsection

