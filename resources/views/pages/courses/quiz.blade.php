@extends('layouts.frontend.main')
@section('title')
MAKE A TEST
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
                @foreach ($quiz->propositions as $proposition)

                <div class="col-6 form-check">

                    <div class="col-6 form-check">


                        <input type="hidden" name="lesson_id" value="{{ $id }}">
                        <input value="{{ $proposition->proposition_name }}" name="propositions[]" class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        {{ $proposition->proposition_name }}

                        </label>
                    </div>


            </div>
            @endforeach
            @endforeach
            @if (empty($result))
            <div style="display: flex;justify-content:center" class="d-flex items-center justify-center">
                <button class=" w-10 btn btn-primary mb-5 mt-5" type="submit">Sending Test</button>
            </div>
            @endif


        </form>
        </section>












    </section>













      </section>
@endsection
