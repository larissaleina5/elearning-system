@extends('layouts.teacher.main')
@section('title')
Teacher Edit Lesson
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">New Lesson</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teacher.lesson.edit',$lesson->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class=" col-lg-12">
                                    <div class="row">

                                            <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label text-primary">Lesson Title<span class="required">*</span></label>
                                                <input type="text" class="form-control"value="{{$lesson->lesson_title }} "name="lesson_title" id="exampleFormControlInput1">
                                                @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Lesson Content</label>
                                                <textarea class="form-control"value="{{ $lesson->lesson_content}}" name="lesson_content" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Lesson Description</label>
                                                <textarea class="form-control"value="{{ $lesson->lesson_description}}" name="lesson_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                    </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Course Details</h5>
                </div>
                <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Choose a level</label>
                                <select class="form-control" name="level" id="">
                                    <option value="Novice">Novice</option>
                                    <option value="intermediary">Intermediary</option>
                                    <option value="difficult">Difficult</option>
                                </select>
                            </div>

    
                            </div>
                        </div>


                    </div>
                    <div class="">

                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



