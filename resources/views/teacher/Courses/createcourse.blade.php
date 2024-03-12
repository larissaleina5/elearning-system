@extends('layouts.teacher.main')
@section('title')
 Teacher Create Course
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">New Course</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('teach.createstore') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class=" col-lg-12">
                                    <div class="row">

                                            <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label text-primary"> Course Name<span class="required">*</span></label>
                                                <input type="text" class="form-control" style="width:100%; height:50px; font-size:20px" name="name" id="exampleFormControlInput1">
                                                @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
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

                    <div class="col-xl-12 col-sm-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Choose a Category of course</label>
                            <select class="form-control" name="category_id" id="">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                        </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Choose a level</label>
                                <select class="form-control"name="level" id="">
                                    <option value="Novice">Novice</option>
                                    <option value="intermediary">Intermediary</option>
                                    <option value="difficult">Difficult</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">status</label>
                                </div>
                            </div>
                            <div class="">
                                <i class="fas fa-file"></i>

                                <input type="file" name="course_profile" required>
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



