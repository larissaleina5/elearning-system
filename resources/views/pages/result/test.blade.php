@extends('layouts.frontend.main')
@section('title')
Result Test
@endsection
@section('content')

<main></main>

    <!-- breadcrumb area  -->
    <div class="breadcrumb__area">
        <img class="shape-2" src="{{asset('assets/imgs/inner/bradcrumb-shape-2.png')}}" alt="shape-1">
        <img class="shape-3"  src="{{ asset('assets/imgs/inner/dotted-1.png') }}" alt="shape-1">
        <div class="container">
          <h2 class="breadcrumb__title">Browse Test Quizz</h2>
          <ul class="breadcrumb__menu">
                  <li><a href="index.html">Home</a><i class="fa-solid fa-chevron-right"></i></li>
              <li><a href="">Page</a><i class="fa-solid fa-chevron-right"></i></li>
            <li><a href="#">Browse Courses</a></li>
          </ul>
        </div>
      </div>
      <!-- /breadcrumb area  -->


      <section class=" container font-bold mt-5" style="margin-top:260px">
        @if (isset($result))
        <div style="display: flex;justify-content:center;align-items:center">
            <span class="text-danger" style="font-size: 20px">{{ $result[0] }}/5</span>
        </div>

        @endif
        <section>
            <form action="{{ route('store.quiz') }}"method="post">
                @csrf
            @foreach ($quizzes as $quiz)

            <h5 class="fs-5 fw-bold mt-5">{{ $quiz->question_name }}</h5>


            <div class="row">
                @foreach ($quiz->propositions as $index=>$proposition)

                <div class="col-6 form-check">

                    <div class="col-6 form-check">


                        <input type="hidden" name="lesson_id" value="{{ $id }}">
                        @if($quiz->propositions[$index]->pivot->isGoodOrFalse===1)
                        <span class="text-danger">{{ $proposition->proposition_name }}</span>
                        @endif
                        @if($quiz->propositions[$index]->pivot->isGoodOrFalse!==1)
                        <span class="" style="text-decoration:line-through">{{ $proposition->proposition_name }}</span>
                        @endif

                    </div>


            </div>
            @endforeach
            @endforeach



        </form>
        </section>












    </section>













      </section>
@endsection
