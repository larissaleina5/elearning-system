@extends('layouts.teacher.main')

@section('title')
 Teacher Create quizz
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Lesson Quizz</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('teacher.store.test',$id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class=" col-lg-12">
                                    <div class="row">

                                            <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label text-primary">Question quizz<span class="required">*</span></label>
                                                <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="question_name" id="exampleFormControlInput1">
                                                @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>




                                            <input type="hidden" name="lesson_id" value="{{ $id }}"/>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card" style="padding-bottom: 800px">
                <div class="card-header">
                    <h5 class="mb-0">Quizz Details</h5>
                </div>
                <div class="card-body">

                    <div class="col-xl-12 col-sm-12">




                            </div>
                            <div id="form"  class="mb-3 row">
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="propositions[]" id="exampleFormControlInput1">



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">IsGoodOrFalse<span class="required">*</span></label>
                                    <select class="form-control" style="width:100%; height:50px; font-size:20px" name="isGoodOrFalse[]" id="">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>



                                </div>

                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="propositions[]" id="exampleFormControlInput1">



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">IsGoodOrFalse<span class="required">*</span></label>
                                    <select class="form-control" style="width:100%; height:50px; font-size:20px" name="isGoodOrFalse[]" id="">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="propositions[]" id="exampleFormControlInput1">



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">IsGoodOrFalse<span class="required">*</span></label>
                                    <select class="form-control" style="width:100%; height:50px; font-size:20px" name="isGoodOrFalse[]" id="">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
                                                    <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="propositions[]" id="exampleFormControlInput1">



                                </div>
                                <div class="mb-3 col-6">
                                    <label for="exampleFormControlInput1" class="form-label text-primary">IsGoodOrFalse<span class="required">*</span></label>
                                    <select class="form-control" style="width:100%; height:50px; font-size:20px" name="isGoodOrFalse[]" id="">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>



                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="">

                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script>


    let i = 0;
    let j = 1;
    function addTest() {
        i = i + 1;
        const newDiv = document.createElement(`div`);
        newDiv.setAttribute('class', `row`);
        const div = document.getElementById('form');
        newDiv.innerHTML = `<div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label text-primary">Proposition<span class="required">*</span></label>
                        <input type="text"  style="width:100%; height:50px; font-size:20px" class="form-control" name="propositions[]" id="exampleFormControlInput1">



    </div>
    <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label text-primary">IsGoodOrFalse<span class="required">*</span></label>
        <select class="form-control" style="width:100%; height:50px; font-size:20px" name="isGoodOrFalse[]" id="">
            <option value="1">True</option>
            <option value="0">False</option>
        </select>



    </div>`
        div.appendChild(newDiv);


    }
</script>




